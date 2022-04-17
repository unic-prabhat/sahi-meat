<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Invoice No. 1234</title>
	<script src="js/jquery.min.js"></script>
	<style>
		@media screen, print {
			@font-face {
			  font-family: 'Poppins';
			  font-style: normal;
			  font-weight: 400;
			  src: url(css/font-poppins/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
			  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
			}
			/* latin-ext */
			@font-face {
			  font-family: 'Poppins';
			  font-style: normal;
			  font-weight: 400;
			  src: url(css/font-poppins/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
			  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
			  font-family: 'Poppins';
			  font-style: normal;
			  font-weight: 400;
			  src: url(css/font-poppins/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
			  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}

			@font-face {
			  font-family: 'Jockey One';
			  font-style: normal;
			  font-weight: 400;
			  font-display: swap;
			  src: url(css/font-poppins/HTxpL2g2KjCFj4x8WI6AnI_xHLOk.woff2) format('woff2');
			  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
			  font-family: 'Jockey One';
			  font-style: normal;
			  font-weight: 400;
			  font-display: swap;
			  src: url(css/font-poppins/HTxpL2g2KjCFj4x8WI6AnIHxHA.woff2) format('woff2');
			  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}
			body {
				background:#fff;
				font-size:14px;
				line-height:1.5;
				font-family:'Poppins', Arial, sans-serif;
				color:#000000;
				-webkit-font-smoothing: antialiased;
			}
			.text-center{text-align: center;}
			.text-left{text-align: left;}
			.text-right{text-align: right;}
			.w-100{width: 100%;}
			.w-80{width: 80%;}
			.w-70{width: 70%;}
			.w-60{width: 60%;}
			.w-55{width: 55%;}
			.w-50{width: 50%;}
			.w-45{width: 45%;}
			.w-40{width: 40%;}
			.w-35{width: 35%;}
			.w-30{width: 30%;}
			.w-25{width: 25%;}
			.w-22{width: 22%;}
			.w-20{width: 20%;}
			.w-15{width: 15%;}
			.w-10{width: 10%;}
			.w-5{width: 5%;}
			.w-3{width: 3%;}
			.mb-0{margin-bottom: 0px;}
			.mt-0{margin-top: 0px;}
			.p-1{padding: 10px;}

			.invoice-page-area {
/*				width: 210mm;
				hight: 297mm;*/
				padding: 5px;
				margin: 5px;
			}
			.spe-bdr{
				border: 1px solid black;
				border-radius: 8px;
			}
			.invoice-page-area .invoice-table{
				width: 100%;
			}
			.invoice-page-area .border-table,
			.invoice-page-area .border-table tr td,
			.invoice-page-area .border-table tr th {
			    border: 1px solid #656565;
			    border-collapse: collapse;
			    padding: 5px 8px;
			}

			.bdr-l-none {
			    border-left-style: none!important;
			}
			.bdr-r-none {
			    border-right-style: none!important;
			}
			.tc-area p{
				margin-bottom: 2px;
				margin-top: 2px;
			}

		}
		.invoice-page-area {
			width: 210mm;
			margin-left: auto;
    		margin-right: auto;
		}
		.m-lr-auto{
			margin-left: auto;
    		margin-right: auto;
    	}
    	@media print{
			.btn-d-none{
				display: none!important;
			}
		}
	</style>
</head>
<body>
	<div class="w-100 text-center terms-condition-area">
		<button onclick="printDiv('printMe')" class="m-lr-auto"><i class="fa fa-print"></i> Print</button>
	</div>
	<div id='printMe'>
		<section class="invoice-page-area spe-bdr">
			<table class="invoice-table">
				<body>
					<tr>
						<td class="w-30">
							<img src="img/logo-chicken.png" alt="" width="100%" height="auto">
						</td>
						<td class="w-70 text-right">
							<b><big>SAHI Meat</big></b><br>
							Plot No-88, Sai Maharaja Building, Das Hotel Lane,
							Vani Vihar, Bhubaneswar(Odisha),
							India- 751009

							<br><b>Tel :</b> +91-65765 XXXXX
							<b>Email Us:</b> info@sahimeat.com

							<br><b>GSTIN-</b>353JGHGGH676
							<b>PAN NO:</b> RRRWR4242
							<br><b>Website:</b>www.sahimeat.com
						</td>
					</tr>
				</body>
			</table>
		</section>
		<section class="invoice-page-area">
			<table class="invoice-table border-table">
				<thead>
					<tr>
						<th colspan="3">INVOICE</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="w-60" rowspan="5">
							<b><big>Bill To :</big></b><br>
							<b>Priyabrata Nath</b><br>
							<b>Address:</b> Plot No 329/1929(P),331/1998,99
							Near Municipal Kalyan Mandap
							Chandrasekharpur,<br>
		                    <b>City:</b> Bhubaneswar, <b>PIN:</b> 751016, <b>Contact:</b> 6655445566 <br>
						</td>
						<th class="w-15 bdr-r-none text-left">Invoice No. :</th>
						<td class="w-25 bdr-l-none">2223004</td>
					</tr>
					<tr>
						<th class="bdr-r-none text-left">Order ID :</th>
						<td class="bdr-l-none">222S3004</td>
					</tr>
					<tr>
						<th class="bdr-r-none text-left">Invoice Date :</th>
						<td class="bdr-l-none">08-04-2022</td>
					</tr>
					<tr>
						<th class="bdr-r-none text-left">Status :</th>
						<th class="bdr-l-none text-left">
							<span style="color:green;">Paid</span>
							 <span style="color:red;">Unpaid</span>
						</th>
					</tr>
				</tbody>
			</table>
		</section>

		<section class="invoice-page-area">
			<table class="invoice-table border-table text-left">
				<thead>
					<tr>
						<th>PRODUCT NAME</th>
						<th>PRODUCT ID</th>
						<th>PRICE</th>
						<th>QTY.</th>
						<th>TOTAL</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Chiken Full Meat 1Kg</td>
						<td>424211</td>
						<td>₹140.00</td>
						<td>1</td>
						<th>₹140.00</th>
					</tr>
					<tr>
						<td>Chiken Full Meat 1Kg</td>
						<td>424211</td>
						<td>₹140.00</td>
						<td>1</td>
						<th>₹140.00</th>
					</tr>
				</tbody>
			</table>
		</section>

		<section class="invoice-page-area">
			<table class="invoice-table border-table text-left">
				<tbody>
					<tr>
						<td rowspan="5" class="w-60 tc-area">
							<b><big>Terms & Conditions :</big></b><br>
							<p>Demo text One...</p>
							<p>Demo text Three...</p>
							<p>Demo text Four...</p>
						</td>
						<th class="w-15 bdr-r-none">SUBTOTAL:</th>
						<td class="w-25 bdr-l-none">₹280.00</td>
					</tr>
					<tr>
						<th class="w-15 bdr-r-none">SHIPPING:</th>
						<td class="w-25 bdr-l-none">₹30.00</td>
					</tr>
						<tr>
						<th class="w-15 bdr-r-none"><big>TOTAL:</big></th>
						<tH class="w-25 bdr-l-none"><big>₹310.00</big></tH>
					</tr>
					</tr>
				</tbody>
			</table>
		</section>
	</div>

	<div class="w-100 text-center terms-condition-area">
		<button onclick="printDiv('printMe')" class="m-lr-auto"><i class="fa fa-print"></i> Print</button>
	</div>
	<script type="text/javascript">
		// window.print();
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	</script>
</body>
</html>
