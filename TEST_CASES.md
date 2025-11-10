# Test Cases for Manual Auction Control

## Setup
1. Create a test auction with:
   - Title: "TEST-MANUAL-CONTROL"
   - Duration: 7 days (auto mode)
   - Featured: Yes
   - Status: Live

2. Open TWO browser windows:
   - Window A: Item page (`/item.php?id=XXXX`)
   - Window B: Home page (`/index.php`)

3. Have admin panel ready in third window

---

## Test 1: Auto-End (No Manual Buttons Pressed) ✅

### Expected Behavior
Auction should auto-close after time expires, disappear from home page, and reject new bids.

### Steps
1. Open item page (Window A)
   - **Verify**: Countdown displays and counts down every 1 second
   - **Font**: Should be red and bold
   
2. Wait for countdown to reach 0:00
   - **Verify**: Item automatically closed
   - **Message**: "Auction has ended" or similar
   - **Bid form**: Disabled/hidden
   
3. Check home page (Window B)
   - **Verify**: Item removed from featured section
   - **No refresh needed**: Should disappear on next page load or AJAX update

4. Try to place a bid on item page
   - **Expected Error**: "Auction has ended"
   - **Error Message**: Matches `$ERR_614`

### Pass Criteria
- ✅ Countdown updates automatically every 1-2 seconds
- ✅ Auto-closes without admin intervention
- ✅ Removed from home page
- ✅ Bid form rejects new bids with proper error

---

## Test 2: Manual "Going Once" ✅

### Expected Behavior
Admin presses Button 1, auction enters manual mode, message displays instantly without refresh.

### Steps
1. Item in auto mode (countdown visible on item page)

2. **Admin presses Button 1 ("Hurry Bid Now")**
   - Admin action: `?going=1`
   - Server: Sets `going_once=1, ends=now+5min`

3. **Window A (Item Page)** - WITHOUT REFRESH:
   - **Verify WITHIN 5 SECONDS**: 
     - Countdown label changes to "Going Once....Hurry & bid!"
     - Timer shows: MM:SS format (e.g., "04:59")
     - Font is LARGE (20px) and BOLD
     - Color is RED (#d9534f)
     - Heading timer (top right) also shows "04:59"
   - **Verify countdown ticks**: Every 1 second, time decreases

4. **Window B (Home Page)** - WITHOUT REFRESH:
   - **Verify WITHIN 5 SECONDS**:
     - Featured item shows "Going Once....Hurry & bid!" message
     - Yellow background (#fff3cd)
     - Large bold text (16px)
     - Item is STILL VISIBLE (not removed)

5. **Place a bid on item page**:
   - Enter bid amount
   - Click "Place Bid"
   - **Expected**: Bid succeeds (no "auction closed" error)
   - **Verify**: Bid appears in bid history
   - **Verify**: Current bid updates

6. **Monitor countdown**:
   - Should continue ticking down without refresh
   - Should not auto-close until Button 3 pressed

### Pass Criteria
- ✅ Message appears without page refresh
- ✅ Message visible within 5 seconds of button press
- ✅ Font size is noticeably large (20px vs 18px)
- ✅ Item remains on home page without refresh
- ✅ Bidding is allowed and succeeds
- ✅ Countdown continues ticking

### Failure Scenarios (Previous Bugs)
- ❌ Message only appears after manual refresh → **FIXED**
- ❌ Item disappears from home page → **FIXED**
- ❌ Bid rejected with "auction closed" → **FIXED**
- ❌ Countdown timer frozen (not ticking) → **FIXED**

---

## Test 3: Escalate to "Fair Warning" ✅

### Expected Behavior
Admin presses Button 2, manual mode escalates, message updates instantly without refresh.

### Prerequisites
- Auction already in "Going Once" mode (from Test 2)
- Countdown shows "Going Once....Hurry & bid! 03:15"

### Steps
1. **Admin presses Button 2 ("Fair Warning")**
   - Admin action: `?going=2`
   - Server: Sets `going_twice=2, going_once=0`

2. **Window A (Item Page)** - WITHOUT REFRESH:
   - **Verify WITHIN 2 SECONDS**:
     - Label changes to "Fair Warning....Last chance to bid!"
     - Timer shows: MM:SS (e.g., "03:10")
     - Font remains LARGE and BOLD
     - Color remains RED

3. **Window B (Home Page)** - WITHOUT REFRESH:
   - **Verify WITHIN 5 SECONDS**:
     - Message updates to "Fair Warning....Last chance to bid!"
     - Item remains visible

4. **Place additional bid**:
   - Enter new bid amount
   - Click "Place Bid"
   - **Expected**: Succeeds (still in manual mode)

### Pass Criteria
- ✅ Message updates without page refresh
- ✅ Update happens within 2 seconds on item page
- ✅ Home page updates within 5 seconds
- ✅ Bidding still allowed
- ✅ Countdown continues

---

## Test 4: Final "SOLD" Button ✅

### Expected Behavior
Admin presses Button 3, auction closes immediately, item removed from listings, bidding disabled.

### Prerequisites
- Auction in manual mode (either Going Once or Fair Warning)
- Item visible on home page

### Steps
1. **Admin presses Button 3 ("SOLD")**
   - Admin action: `?going=3`
   - Server: Sets `going_once=0, going_twice=0, ends=now, sold='y'`

2. **Window A (Item Page)**:
   - **Verify SOON AFTER**:
     - Countdown frozen at "00:00"
     - Message: "Auction ended" or "Sold"
     - Bid form: Hidden or disabled
     - New bid attempt: Error message

3. **Window B (Home Page)**:
   - **Verify AFTER REFRESH OR WITHIN 10 SECONDS**:
     - Item removed from featured section
     - Item no longer visible

4. **Try to bid**:
   - Item page: "Auction has ended"
   - Browse page: Item not in list

### Pass Criteria
- ✅ Item removed from home page
- ✅ Bid form disabled with error message
- ✅ "Sold" status clear
- ✅ No bidding allowed

---

## Test 5: Multiple Viewers Sync ✅ (Optional)

### Expected Behavior
When one viewer sees manual mode change, other viewers see it too (within polling interval).

### Steps
1. Open item page in Window A (Viewer 1)
2. Open item page in Window B (Viewer 2, different browser/device if possible)
3. Admin presses Button 1
4. **Verify both windows**:
   - Message appears in both without refresh
   - Both countdown timers stay in sync (within 1-2 seconds)
   - Bid from one viewer updates in other (next poll)

### Pass Criteria
- ✅ No refresh-lock on either viewer
- ✅ Both see same state within 2-5 seconds
- ✅ Bid updates appear in both views

---

## Test 6: Rapid Button Clicks ✅ (Stress Test)

### Expected Behavior
Rapid clicks should not cause errors or race conditions.

### Steps
1. Admin rapidly clicks:
   - Button 1 (Hurry)
   - Button 2 (Fair Warning)
   - Button 1 (Hurry)
   - Button 2 (Fair Warning)
   - Button 3 (Sold)

2. Monitor item page for:
   - SQL errors in logs
   - Countdown freezing
   - Conflicting messages
   - Bid form crashes

### Pass Criteria
- ✅ No SQL errors in error_log
- ✅ Final state (Sold) reflects last action
- ✅ Countdown state consistent
- ✅ No JavaScript errors in browser console

---

## Test 7: Edge Case - Bid During Countdown ✅

### Expected Behavior
Bid placed just as countdown reaches 0, during "Sold" button press, etc.

### Steps
1. Auction in Going Once, countdown at ~5 seconds
2. Place bid at 3 seconds remaining
3. During bid processing, admin presses "SOLD"
4. **Verify**:
   - Bid either accepted or rejected with clear message
   - No "half-processed" state
   - Item closes cleanly

### Pass Criteria
- ✅ Clear success/failure for bid
- ✅ Item state consistent
- ✅ No database corruption

---

## Test 8: Browser DevTools Validation

### Expected Behavior
AJAX requests should be minimal and efficient.

### Steps
1. Open item page with DevTools open (Network tab)
2. Auction in auto mode for 30 seconds
3. Admin presses Button 1 (Going Once)
4. Monitor for 2 minutes total

### Verify**:
- AJAX to `/auction_state.php` every 2-5 seconds
- Response size < 1KB
- Response time < 100ms
- No console JavaScript errors

### Pass Criteria
- ✅ Max 2 network requests per 5 seconds
- ✅ Response < 500 bytes
- ✅ No JS errors
- ✅ No memory leaks (DevTools heap)

---

## Regression Tests (Existing Functionality)

Verify these still work after changes:

### Regular Auctions (Auto Mode)
- [ ] Create auto auction, let it auto-close ✅
- [ ] Bid during auto countdown ✅
- [ ] Auto-close removes from listings ✅

### Home Page
- [ ] Browse category still works ✅
- [ ] Search still works ✅
- [ ] Latest items list shows ✅

### Admin Panel
- [ ] Non-manual auctions unaffected ✅
- [ ] Manual buttons only appear for live auctions ✅

---

## Performance Benchmarks

| Operation | Expected | Actual |
|-----------|----------|--------|
| Manual mode activation | < 5 sec visible | |
| AJAX response time | < 100ms | |
| Page load time | No change | |
| CPU usage (polling) | Negligible | |
| Memory (item page) | < 5MB total | |

---

## Sign-Off

**Tester Name**: _______________  
**Date**: _______________  
**Browser/OS**: _______________  

**Test Results**:
- Test 1 (Auto-End): [ ] PASS [ ] FAIL
- Test 2 (Going Once): [ ] PASS [ ] FAIL
- Test 3 (Fair Warning): [ ] PASS [ ] FAIL
- Test 4 (SOLD): [ ] PASS [ ] FAIL
- Test 5 (Multi-viewer): [ ] PASS [ ] FAIL
- Test 6 (Stress): [ ] PASS [ ] FAIL
- Test 7 (Edge Case): [ ] PASS [ ] FAIL
- Test 8 (DevTools): [ ] PASS [ ] FAIL

**Issues Found**:
(Document any failures or anomalies)

---

**Ready for Production**: [ ] YES [ ] NO


