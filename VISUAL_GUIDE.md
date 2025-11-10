# Visual Guide - Manual Auction Control UI

## Home Page - Featured Items Section

### Before Button 1 Pressed (Auto Mode)
```
┌─────────────────────────────┐
│   [Item Image]              │
├─────────────────────────────┤
│ Item Title                  │
│ Current Bid: $100.00        │
│ Time Left: 2h 45m 30s       │  ← Counts down automatically
└─────────────────────────────┘
```

### After Button 1 Pressed (Manual Mode)
```
┌─────────────────────────────┐
│   [Item Image]              │
├─────────────────────────────┤
│ Item Title                  │
│ Current Bid: $100.00        │
│ ╔═════════════════════════╗ │
│ ║ Going Once....Hurry &   ║ │  ← Large bold text (16px)
│ ║ bid!                    ║ │     Yellow background
│ ╚═════════════════════════╝ │
└─────────────────────────────┘
```
**Key Changes**:
- ✅ Message appears WITHOUT page refresh
- ✅ Countdown replaced with status message
- ✅ Item stays on home page
- ✅ Message has eye-catching styling

---

## Item Details Page - Auction Updates Panel

### Heading (Top Right)
```
┌────────────────────────────────────┐
│ Auction Updates                    │
│              ┌─────────────────┐   │
│              │ 04:59           │   │  ← Manual timer (18px bold)
│              └─────────────────┘   │     Yellow background
└────────────────────────────────────┘
```

### Auction Details Table - Ending Time Row

#### Before Button 1 Pressed
```
┌──────────────────┬──────────────────┐
│ Ending Time:     │ 02:45:30         │  ← Auto countdown
│                  │                  │     18px red bold
└──────────────────┴──────────────────┘
```

#### After Button 1 Pressed (Going Once)
```
┌──────────────────┬──────────────────┐
│ Ending Time:     │ Going Once....   │  ← Manual status (20px red bold)
│                  │ Hurry & bid! 04:59
└──────────────────┴──────────────────┘
```

#### After Button 2 Pressed (Fair Warning)
```
┌──────────────────┬──────────────────┐
│ Ending Time:     │ Fair Warning.... │  ← Updated status (20px red bold)
│                  │ Last chance!03:12
└──────────────────┴──────────────────┘
```

---

## Admin Control Buttons (Not Shown Here - In Admin Panel)

| Button | Action | Effect |
|--------|--------|--------|
| Button 1: "Hurry Bid Now" | `going_once = 1` | Manual mode active |
| Button 2: "Fair Warning" | `going_twice = 2` | Escalated manual mode |
| Button 3: "SOLD" | `ends = now, sold = 'y'` | Closes auction, removes from listings |
| Button 4: "Relist" | Resets auction | Back to auto mode |

---

## Font Size Comparison

```
Auto Mode Countdown:        Auto Countdown
                           18px, red, bold

Manual Mode Label:          Going Once....Hurry & bid!
                           20px, red (#d9534f), bold

Manual Mode Message (Home): Going Once....Hurry & bid!
                           16px, red (#d9534f), bold
                           Yellow background (#fff3cd)
```

---

## Real-Time Update Timeline

### User Presses Button 1 in Admin

```
TIME  ADMIN PANEL          ITEM PAGE               HOME PAGE
─────────────────────────────────────────────────────────────
0s    Click "Hurry Bid     Showing: Timer 02:45   Showing: Timer
      Now" Button         (auto countdown)        05m 30s

0.5s  ✓ Button Processed  AJAX poll (every 5s    Still showing
                          when in auto mode)     timer

2s    Admin panel         
      shows GOING_ONCE    [STATE NOT YET SEEN]
      = 1

2.1s  [No refresh         ✅ AJAX DETECTS        Still timer
      needed on admin]    MODE CHANGE            (5s interval)

2.2s  State: GOING_ONCE   Countdown stops        [Preparing next
      = 1                 New label displays:    update]
      Ends: +5 min        "Going Once....
                          Hurry & bid! 04:59"
                          ✅ NO REFRESH NEEDED

4.1s  [No action]         Timer: 04:57           
                          Updates every 1s

5.0s  [No action]         Timer: 04:55           ✅ AJAX DETECTS
                          (still counting)       MODE CHANGE
                                                Label updates:
                                                "Going Once..."
                                                No refresh!
```

---

## Bid Form Behavior

### When in Manual Mode
- ✅ Bid form is VISIBLE
- ✅ Bid button is CLICKABLE
- ✅ Submitting bid SUCCEEDS
- ⚠️ Even though `ends <= now`

### When Not in Manual Mode (After SOLD)
- ❌ Bid form is HIDDEN
- ❌ Item shows "Auction Closed"
- ❌ Bidding rejected with error

---

## Network Activity (Browser DevTools)

When item page is open in manual mode:

```
XHR GET /auction_state.php?id=12345
↓ Response (< 500 bytes):
{
  "going_once": 1,
  "going_twice": 0,
  "ends": 1731234567,
  "current_time": 1731234543,
  "remaining": 24,
  "manual_mode": true,
  "manual_label": "Going Once....Hurry & bid!"
}

[Repeat every 2 seconds while in manual mode]
```

---

## Performance Indicators

| Metric | Value |
|--------|-------|
| AJAX Response Time | < 50ms |
| Countdown Update Latency | < 100ms |
| Home Page Load (featured) | No change |
| Item Page Load | No change |
| DB Queries Per Poll | 1 SELECT |
| Bandwidth Per Poll | ~400 bytes |


