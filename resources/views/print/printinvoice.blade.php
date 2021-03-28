<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<style>
#invoice{
    padding: 0px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 10px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 14px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
<div id="invoice">
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                <img style="width:100% !important;" src="assets/images/banner.png">
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">BILLED TO:</div>
                        <div class="name">Client Name : {{$user->name}}</div>
                        <div class="email">Phone Number : {{$user->mobile}}</div>
                        <div class="email">Email ID : {{$user->email}}</div>
                        <!-- <div class="address">Address : {{$user->email}}</div> -->
                        <div class="email">Emirate : UAE 'DUBAI'</div>
                    </div>
                    <!-- <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE 3-2-1</h1>
                        <div class="date">Date of Invoice: 01/10/2018</div>
                        <div class="date">Due Date: 30/10/2018</div>
                    </div> -->
                </div>

                <div class="row">
                    <div style="width:100% !important;" class="col invoice-to">
                        <div class="text-gray-light">INVOICE:</div>
                        <div class="date">Invoice Number</div>
                        <div class="invoice-id">#{{$booking->id}}</div>
                    </div>
                    <div style="width:100% !important;margin-top:-40px !important;" class="col invoice-details">
                    <div class="date">Date</div>
                        <div class="date">{{$booking->date}}</div>
                    </div>
                </div>
                <br><br>

                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-left">START-POINT</th>
                            <th class="text-left">REACH-POINT</th>
                            <th class="text-right">DISTANCE</th>
                            <th class="text-right">RATE <br>PER KM</th>
                            <th class="text-right">AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">{{$booking->service_name}}y</td>
                            <td class="text-left">{{$booking->from_address}}</td>
                            <td class="text-left">{{$booking->to_address}}</td>
                            <td class="qty">{{$booking->total_km}}</td>
                            <td class="qty">{{$booking->rate_per_km}}</td>
                            <td class="total">{{$booking->sub_total}} AED</td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td colspan="2">SUBTOTAL</td>
                        <td>{{$booking->sub_total}} AED</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td colspan="2">Discount</td>
                        <td>0 AED</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td colspan="2">INVOICE TOTAL</td>
                        <td>{{$booking->total}} AED</td>
                    </tr>
                    </tfoot>
                </table>
                <!-- <div class="thanks">Thank you!</div> -->
                <div class="notices">
                    <div>Terms and Conditions:</div>
                    <div class="notice">{{$settings->print_terms_and_conditions}}</div>
                </div>

                <br><br><br>
                <div class="row">
                    <!-- <div style="width:100% !important;" class="col invoice-to">
                        <div class="text-gray-light">INVOICE:</div>
                        <div class="date">Invoice Number</div>
                        <div class="invoice-id">#{{$booking->id}}</div>
                    </div> -->
                    <div style="width:100% !important;margin-top:0px !important;" class="col invoice-details">
                        <div style="margin-right:25px !important;font-size:10px;" class="date">THIS IS A SYSTEM GENERATED INVOICE </div>
                        <div style="margin-right:25px !important;font-size:10px;" class="date">TREIGHTPORTAL ©</div>
                    </div>
                </div>

            </main>
            <!-- <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer> -->
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>