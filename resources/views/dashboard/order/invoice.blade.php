<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        * {
            font-size: 12px;
            font-family: 'Times New Roman';
        }

        td,
        th,
        tr,
        table {
            border-top: 1px solid black;
            border-collapse: collapse;
        }

        td.description,
        th.description {
            width: 75px;
            max-width: 75px;
        }

        td.quantity,
        th.quantity {
            width: 60px;
            max-width: 60px;
            word-break: break-all;
        }

        td.price,
        th.price {
            width: 50px;
            max-width: 50px;
            word-break: break-all;
        }

        .centered {
            text-align: center;
            align-content: center;
        }

        .ticket {
            width: 200px;
            max-width: 200px;
        }

        @media print {

            .hidden-print,
            .hidden-print * {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="ticket">
        <p class="centered">ORDER - {{ $order->order_code }}</p>
        <p class="centered">{{ $order->customer_name }}
            <br>
            {{ $order->address }}
        </p>
        <table>
            <thead>
                <tr>
                    <th class="quantity">Jumlah</th>
                    <th class="description">Paket</th>
                    <th class="price">Rp.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="quantity centered">{{ $order->weight }}</td>
                    <td class="description centered">{{ $order->packet->name }}</td>
                    <td class="price centered">{{ number_format($order->packet->price) }}</td>
                </tr>
                <tr>
                    <td class="quantity centered"></td>
                    <td class="description centered">TOTAL</td>
                    <td class="price centered">{{ number_format($order->price) }}</td>
                </tr>
            </tbody>
        </table>
        <p class="centered">Terima kasih!
        </p>
    </div>
    <button id="btnPrint" class="hidden-print">Print</button>
    <script>
        const $btnPrint = document.querySelector("#btnPrint");
        $btnPrint.addEventListener("click", () => {
            window.print();
        });
    </script>
</body>

</html>
