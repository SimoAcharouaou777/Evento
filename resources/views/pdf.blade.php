


 <!DOCTYPE html>
<html lang="en">

<head>

    <style>
        /* Add your custom styles here */

        * {
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ticket {
            width: 95%;
            padding: 0.3cm;
            border: 2px solid #ddd;
            background-color: rgba(242, 223, 242, 0.893);
            display: flex;
            flex-direction: column;
        }

        .logo {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .client-name{
            font-weight: 700
        }

        .fill-violet-400 {
            fill: rgb(246, 236, 42)
        }

        .event-info {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .event-date {
            font-size: 1rem;
            background-color: rgb(46, 92, 255);
            color: #00ff22;
            padding: 5px;
            border-radius: 7px;
        }

        .event-title {
            font-size: 18px;
            font-weight: bold;
        }

        .event-details {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }

        .ticket-price {
            background-color: #eee;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>

<body style="width: 100%;">
    <div class="ticket">
        <div class="event-info">
            <div class="event-date"> start date : {{ \Carbon\Carbon::parse($event->start_date)->format('d M, Y | h:i') }}</div>
        </div>
        <h3 class="event-title"> event name : {{ $event->title }}</h3>
        <div class="logo">
            <p class="event-details"> event location :{{ $event->location }}</p>
            <p class="client-name"> participant username : {{ $user->username }}</p>
        </div>
    </div>
</body>

</html>