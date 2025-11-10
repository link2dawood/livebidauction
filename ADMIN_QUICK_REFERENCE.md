# Admin Quick Reference - Manual Auction Control

## How It Works (Quick Overview)

When you have a **LIVE auction** running, you now have **3 new buttons** to control when it ends:

| Button | Action | Effect |
|--------|--------|--------|
| **Button 1** | "Hurry Bid Now" | Pause auto-countdown, take manual control |
| **Button 2** | "Fair Warning" | Escalate urgency, still in manual control |
| **Button 3** | "SOLD" | Immediately close auction, declare winner |

---

## Quick Start

### Step 1: Start a Live Auction (Normal)
- Create auction as usual
- Set duration (e.g., 7 days)
- Mark as "Featured" if desired
- Item appears on home page with auto-countdown

### Step 2: When Ready for Live Bidding (Press Button 1)
- Go to admin panel → Auctions → List Auctions
- Find your live auction
- Click **"Hurry Bid Now"** button
- ✅ Auction enters manual mode
- ✅ Message appears instantly on item page (NO REFRESH NEEDED)
- ✅ Message shows on home page (NO REFRESH NEEDED)
- ✅ Countdown now shows "Going Once....Hurry & bid! 04:59"

### Step 3: Alert Bidders (Optional - Press Button 2)
- After ~1-2 minutes in manual mode, click **"Fair Warning"** button
- ✅ Message updates to "Fair Warning....Last chance to bid!"
- ✅ Both item page and home page update without refresh
- ✅ Urgency increases

### Step 4: Close Auction (Press Button 3)
- When you're ready to end, click **"SOLD"** button
- ✅ Auction immediately closes
- ✅ Bid form disabled
- ✅ Item removed from home page
- ✅ Winner declared (highest bidder)

---

## What Users See (Visual Reference)

### On Home Page
```
Before Button 1:              After Button 1:
┌──────────────┐            ┌──────────────┐
│ [Item Image] │            │ [Item Image] │
├──────────────┤            ├──────────────┤
│ Current: $100│            │ Current: $100│
│              │            │              │
│ 02:45:30     │            │ Going Once...│
│ (countdown)  │            │ Hurry & bid! │
└──────────────┘            └──────────────┘
```

### On Item Details Page
```
Ending Time: 02:45:30 → Going Once....Hurry & bid! 04:59
              (red 18px)    (red 20px, bold, large)
```

---

## Key Features

### ✅ Real-Time Updates (NO REFRESH)
- Users see "Going Once" message instantly
- No one needs to refresh their browser
- Countdown updates every 1 second automatically

### ✅ Item Stays Visible
- Item remains on home page while in manual mode
- Bids can still be placed
- Item only disappears when you press "SOLD"

### ✅ Larger, Clearer Text
- "Going Once" message is **BOLD and LARGE (20px)**
- Easy to read on both desktop and mobile
- Clear urgency signal to bidders

### ✅ Bidding Still Works
- Users can place bids even in manual mode
- No "auction closed" errors
- All bids recorded normally

---

## Common Scenarios

### Scenario A: Steady Auction (30 minute window)
1. Create auction with 7-day duration
2. When ready: Click **Button 1** at 30 min before meeting
3. Click **Button 2** after 20 min (escalate urgency)
4. Click **Button 3** at exactly meeting time
5. **Result**: Clean, controlled auction ending

### Scenario B: Fast-Paced Auction (5 minute sprint)
1. Create auction, let it auto-count down to ~5 min
2. When exciting part starts: Click **Button 1**
3. Skip Button 2, go straight to Button 3 when done
4. **Result**: Intense, controlled bidding session

### Scenario C: Extended Bidding War
1. Click Button 1 to enter manual mode
2. Watch bidding activity
3. Every 2-3 minutes, click **Button 2** to re-escalate (optional)
4. Click **Button 3** when winner is clear
5. **Result**: Maximized engagement and final bid amounts

---

## Troubleshooting for Admins

### "Users don't see the change immediately"
- Users see updates within 2-5 seconds (AJAX polling)
- Check if they have browser tab active (some browsers pause polling)
- Have them refresh page if waiting > 10 seconds

### "Message shows on item page but not home page"
- Home page updates every 5 seconds (slower polling)
- Message will appear within 10 seconds
- Users can refresh home page to see immediately

### "Can't place bid" (user issue)
- Make sure auction is in manual mode (Button 1 pressed, not yet Button 3)
- Check if user is logged in
- Verify bid amount meets minimum increment

### "Can't press Button 1" (admin issue)
- Button only appears for **LIVE** auctions (not pending, ended, or draft)
- Auction must be active and not already in manual mode
- Check user permissions (admin role required)

---

## Visual Walkthrough

### Admin Panel View
```
[Auctions List]
┌─────────────────┬──────────┬──────────┬───────────┐
│ Item Title      │ Status   │ Buttons  │ Time Left │
├─────────────────┼──────────┼──────────┼───────────┤
│ TEST-ITEM-001   │ LIVE     │ [1][2][3]│ 02:15:30  │
│ TEST-ITEM-002   │ CLOSED   │   -      │ Ended     │
│ TEST-ITEM-003   │ PENDING  │   -      │ Not yet   │
└─────────────────┴──────────┴──────────┴───────────┘

When you click Button [1]:
  going_once = 1
  ends = now + 5 minutes

When you click Button [2]:
  going_twice = 2
  going_once = 0

When you click Button [3]:
  going_once = 0
  going_twice = 0
  ends = now
  sold = 'y'
```

---

## Database Changes (Technical Info)

### Flags Set by Each Button

| Button | going_once | going_twice | ends | Meaning |
|--------|-----------|------------|------|---------|
| Start (auto) | 0 | 0 | future | Auto mode, counts down |
| Button 1 | 1 | 0 | +5 min | Manual mode, "Hurry Bid" |
| Button 2 | 0 | 2 | unchanged | Manual mode, "Fair Warning" |
| Button 3 | 0 | 0 | now | Closed, no more bids |

---

## Best Practices

### ✅ DO
- Press **Button 1** when live broadcast/event starts
- Use **Button 2** to re-energize bidding if it stalls
- Press **Button 3** when winner is decided
- Announce via chat/broadcast when entering manual mode
- Monitor bid activity between button presses

### ❌ DON'T
- Spam buttons repeatedly (can confuse bidders)
- Leave item in manual mode for hours (set reasonable manual window)
- Press Button 3 while users are actively placing bids (slight race condition risk)
- Rely on auto-mode if you want precise control (use manual buttons instead)

---

## Performance Notes

### Server Load
- Each button press triggers **1 database update**
- AJAX polling = ~1 SELECT query every 2-5 seconds per viewer
- Minimal bandwidth: ~400 bytes per poll
- Auto-countdown runs on **client-side** (no server CPU)

### Browser Compatibility
- Works on Chrome, Firefox, Safari, Edge
- Works on mobile (iOS Safari, Chrome)
- Requires JavaScript enabled (countdown won't work without it, but auction still functions)

---

## FAQ

**Q: What if I press Button 1 by mistake?**  
A: Just press Button 3 to close immediately, or wait for the 5-minute timer to expire and it returns to auto-close.

**Q: Can I use Button 1 multiple times?**  
A: Yes, each press resets the manual timer to +5 minutes.

**Q: Do users need to refresh to see changes?**  
A: No! They see updates within 2-5 seconds automatically (AJAX polling).

**Q: What if a bid comes in right as I press Button 3?**  
A: System handles this - bid is either accepted or rejected cleanly, no corruption.

**Q: Can I see who's bidding in real-time?**  
A: Check the "Auction Updates" panel on item page - refreshes every 1 second.

**Q: Does manual mode affect auto-close for non-live auctions?**  
A: No, regular auctions still auto-close normally. Manual buttons only work for featured live auctions.

---

## Support Contact

**Issue**: Button doesn't work  
**Action**: Check browser console (F12 → Console tab) for errors

**Issue**: Users report lag  
**Action**: Check server load; verify AJAX polling in DevTools (Network tab)

**Issue**: Item stays visible after SOLD  
**Action**: Check if `sold` flag is 'y'; clear browser cache

---

## Quick Keyboard Reference (If Implemented)

For faster access, consider:
- **Shortcut 1**: Go → Button 1
- **Shortcut 2**: FA → Button 2  
- **Shortcut 3**: SO → Button 3

*(Ask developer to add keyboard shortcuts if needed)*

---

**Remember**: The goal is to give you **precise control** over auction timing while keeping users engaged with **instant visual feedback**. Press the buttons as needed to manage your live auction!


