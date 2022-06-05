<style>
    /* CountDown */
    .clock-container {
        background: #0095da;
        position: relative;
        padding: 10px
    }

    .batas-promo {
        float: left;
        padding: 5px;
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        margin-top: 0;
    }

    .icon-batas-promo {
        float: left;
        padding: 0 5px;
        margin-top: 0
    }

    #countdown {
        margin: 0 auto;
        display: block;
        position: relative;
        height: 40px
    }

    #countdown p {
        color: #555555;
        text-align: center;
        font-size: 30px;
        padding: 20px;
        line-height: 1;
    }

    #clock span {
        float: left;
        text-align: center;
        font-size: 16px;
        margin: 0 5px;
        color: #000;
        padding: 5px;
        width: 40px;
        border-radius: 5px;
        box-sizing: border-box;
    }

    #clock span:nth-child(1) {
        background: #fff;
    }

    #clock span:nth-child(2) {
        background: #fff;
    }

    #clock span:nth-child(3) {
        background: #fff;
    }

    #clock span:nth-child(4) {
        background: #fff;
        color: #000;
    }

    #clock:after {
        content: &quot;
        &quot;
        ;
        display: block;
        clear: both;
    }

    #units span {
        float: none;
        width: 40px;
        text-align: center;
        margin: 0;
        color: #55555;
        padding: 5px;
        box-sizing: border-box;
        letter-spacing: 1px;
    }

    @media (max-width: 640px) {
        #countdown {
            width: 100%;
            margin: 0 auto;
        }

        #units span {
            font-size: 12px;
        }

        .batas-promo {
            float: none
        }
    }

    @media (max-width: 360px) {
        #countdown {
            width: 100%;
            margin: 0 auto;
        }

        #countdown span {
            font-size: 20px;
        }

        #units span,
        #countdown p {
            font-size: 18px;
        }
    }

</style>

<script>
    /*<![CDATA[*/
    const updateTimer = (deadline) => {
        // calculates time left until deadline
        const time = deadline - new Date();
        return {
            'days': Math.floor(time / (1000 * 60 * 60 * 24)),
            'hours': Math.floor((time / (1000 * 60 * 60)) % 24),
            'minutes': Math.floor((time / (1000 * 60)) % 60),
            'seconds': Math.floor((time / (1000)) % 60),
            'total': time
        };
    }

    const animateClock = (span) => {
        // animation lasts for 0.5 seconds
        span.className = 'turn';
        setTimeout(() => {
            span.className = '';
        }, 500);
    }

    const startTimer = (id, deadline) => {
        // calls updateTimer every second
        const timeInterval = setInterval(() => {
            const clock = document.getElementById(id);
            let timer = updateTimer(deadline);

            clock.innerHTML =
                '<span>' + timer.days + '</span>' +
                '<span>' + timer.hours + '</span>' +
                '<span>' + timer.minutes + '</span>' +
                '<span>' + timer.seconds + '</span>';

            const spans = clock.getElementsByTagName("span");
            animateClock(spans[3]);
            if (timer.seconds == 59) animateClock(spans[2]);
            if (timer.minutes == 59 && timer.seconds == 59) animateClock(spans[1]);
            if (timer.minutes == 23 && timer.minutes == 59 && timer.seconds == 59) animateClock(spans[0]);
            // check if deadline has passed
            if (timer.total < 1) {
                clearInterval(timeInterval);
                clock.innerHTML =
                    '<span>0</span><span>0</span><span>0</span><span>0</span>';
            }

        }, 1000);
    }
    /*]]>*/
</script>
<div class="clock-container">
    <img alt='Flash Sale' class='icon-batas-promo' height='50'
        src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9Ii4wNzklIiB4Mj0iOTkuNzcxJSIgeTE9IjQ5Ljg1NCUiIHkyPSI0OS44NTQlIj4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzk0N0NDMSIvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3MjUxQTEiLz4KICAgICAgICA8L2xpbmVhckdyYWRpZW50PgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0iYiIgeDE9Ii4zMjElIiB4Mj0iOTkuODA2JSIgeTE9IjUwLjAxNCUiIHkyPSI1MC4wMTQlIj4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI0Y5QjI2MCIvPgogICAgICAgICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNFQjgyMDgiLz4KICAgICAgICA8L2xpbmVhckdyYWRpZW50PgogICAgPC9kZWZzPgogICAgPGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8Y2lyY2xlIGN4PSIyMCIgY3k9IjIwIiByPSIyMCIgZmlsbD0iI0ZGRiIvPgogICAgICAgIDxwYXRoIGZpbGw9InVybCgjYSkiIGQ9Ik0xMS44NDYgMTEuNTM4aDYuODQ2YzEuMTU0IDAgMS43NyAxLjMwOCAxLjA3NyAyLjIzMUw3LjkyMyAyOC42OTJjLTEuMDc3IDEuMzA4LTMuMjMuMjMxLTIuNjkyLTEuMzg0bDMuMjMtMTAuMzg1IDMuMzg1LTUuMzg1eiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAgNi4yNSkiLz4KICAgICAgICA8cGF0aCBmaWxsPSJ1cmwoI2IpIiBkPSJNOC40NjIgMTYuOTIzSDIuMDc3Yy0uOTIzIDAtMS41MzktLjkyMy0xLjMwOC0xLjc3TDUuMjMxLjkyNEM1LjUzOC4zODUgNiAwIDYuNjE1IDBoNy45MjNjLjkyNCAwIDEuNjE2IDEgMS4yMzEgMS44NDZsLTMuOTIzIDkuNjkyLTMuMzg0IDUuMzg1eiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAgNi4yNSkiLz4KICAgICAgICA8cGF0aCBmaWxsPSIjRkNEMkExIiBmaWxsLXJ1bGU9Im5vbnplcm8iIGQ9Ik0yOC42OTIgMTcuNzg4aC02Ljg0NmwzLjkyMy05LjYxNWMuMzA4LS45MjMtLjMwNy0xLjkyMy0xLjIzLTEuOTIzaC01LjE1NHMtLjUzOS45MjMgMS42MTUgMi4yM2M0LjUzOCAyLjg0Ny0zIDEwLjc3LTEuNjE1IDEyLjg0NyAxLjM4NCAyLjE1NCA1LjIzLTMuMDc3IDYuNDYxLS41MzkgMS4yMyAyLjUzOS0xLjUzOCA1LjYxNi01Ljg0NiA4Ljg0Ny0yLjM4NSAxLjc2OS0xLjc3IDQuMTUzLTIuMDc3IDUuMTUzbDExLjc3LTE0LjkyM2MuNzY5LS43NjkuMDc2LTIuMDc3LTEtMi4wNzd6IiBvcGFjaXR5PSIuNzIiIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTpzb2Z0LWxpZ2h0Ii8+CiAgICA8L2c+Cjwvc3ZnPgo='
        width='50' />
    <p class='batas-promo'>Batas Promo</p>
    <div id='countdown'>
        <div id='clock'>
            <!--<div id='units'>
    <span>Hari</span>
    <span>Jam</span>
    <span>Menit</span>
    <span>Detik</span>
    </div>-->
        </div>
    </div>

    <script>
        window.onload = () => {
            const deadline = new Date("June 5, 2022 00:00:00");
            startTimer("clock", deadline)
        };
        // Ganti tahun bulan tanggal dan jam sesuai dengan batas promo
    </script>
