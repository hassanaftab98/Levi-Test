<div class="container">
	<div class="nk-content-inner">
		<div class="nk-content-body">

			<div class="nk-block">
				<div class="invoice">
					<div class="invoice-action">
						<a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary" onclick="window.print()" target="_blank"><em class="icon ni ni-printer-fill"></em></a>
					</div>
					<div class="invoice-wrap">
						<div class="invoice-brand text-center">
							<img src="<?= base_url('uploads/logo.png'); ?>" srcset="https://dashlite.net/demo1/images/logo-dark2x.png 2x" alt="">
						</div>
						<div class="invoice-head">
							<div class="invoice-contact">
								<span class="overline-title">Invoice To</span>
								<div class="invoice-contact-info">
									<h4 class="title"><?= $print_invoice[0]['business_name']; ?></h4>
									<ul class="list-plain">
										<li><em class="icon ni ni-map-pin-fill"></em><span><?= $print_invoice[0]['business_address']; ?><br></span>
										</li>
										<li><em class="icon ni ni-call-fill"></em><span><?= $print_invoice[0]['business_contact_no']; ?></span>
										</li>
									</ul>
								</div>
							</div>
							<div class="invoice-desc">
								<h3 class="title">Invoice</h3>
								<ul class="list-plain">
									<li class="invoice-id"><span>Invoice ID</span>:<span><?= $print_invoice[0]['invoice_no'] ?></span></li>
									<li class="invoice-date"><span>Order Date</span>:<span><?= date('Y-m-d', strtotime($print_invoice[0]['added_at'])); ?></span></li>
									<li class="invoice-date"><span>Created By</span>:<span><?= $print_invoice[0]['name']; ?></span></li>
								</ul>
							</div>
						</div>
						<div class="invoice-bills">
							<div class="table-responsive table-bordered">
								<table class="table table-striped ">
									<thead class="">
										<tr>
											<th class="w-15">S. No</th>
											<th class="w-50">Description</th>
											<th>Price</th>
											<th>Qty</th>
											<th>Amount</th>
										</tr>
									</thead>
									<tbody>

										<!--									@php $i = 0 @endphp-->
										<!--									@foreach($data->OrderDetails as $od)-->
										<tr>
											<td>1</td>
											<td><?= $print_invoice[0]['sub_package'] ?></td>
											<td><?= $print_invoice[0]['invoice_amount'] ?></td>
											<td>1</td>
											<td><?= $print_invoice[0]['invoice_amount'] ?></td>
										</tr>
										<!--									@endforeach-->

									</tbody>

									<tfoot>

										<tr>
											<td colspan="2"> </td>
											<td colspan="2">Subtotal</td>
											<td><?= $print_invoice[0]['total'] ?></td>
										</tr>
										<!--									<tr>-->
										<!--										<td colspan="2"></td>-->
										<!--										<td colspan="2">TAX</td>-->
										<!--										<td>${{$data->vat}}</td>-->
										<!--									</tr>-->
										<tr>
											<td colspan="2"></td>
											<td colspan="2">Discount <?= $print_invoice[0]['discount_type'] ?> </td>
											<td><?= $print_invoice[0]['discount_value'] ?></td>
										</tr>
										<tr>
											<td colspan="2"></td>
											<td colspan="2">Grand Total</td>
											<td><?= $print_invoice[0]['total'] ?></td>
										</tr>
									</tfoot>
								</table>
								<div class="nk-notes ff-italic fs-12px text-soft">
									Invoice was created on a computer and is valid without the signature and seal.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	@font-face {
		font-family: 'Roboto';
		src: url("../fonts/Roboto-Light.eot");
		src: local("Roboto Light"), local("Roboto-Light"), url("../fonts/Roboto-Light.eot#iefix") format("embedded-opentype"), url("../fonts/Roboto-Light.woff2") format("woff2"), url("../fonts/Roboto-Light.woff") format("woff"), url("../fonts/Roboto-Light.ttf") format("truetype");
		font-weight: 300;
		font-style: normal
	}

	@font-face {
		font-family: 'Roboto';
		src: url("../fonts/Roboto-Regular.eot");
		src: local("Roboto"), local("Roboto-Regular"), url("../fonts/Roboto-Regular.eot#iefix") format("embedded-opentype"), url("../fonts/Roboto-Regular.woff2") format("woff2"), url("../fonts/Roboto-Regular.woff") format("woff"), url("../fonts/Roboto-Regular.ttf") format("truetype");
		font-weight: normal;
		font-style: normal
	}

	@font-face {
		font-family: 'Roboto';
		src: url("../fonts/Roboto-Medium.eot");
		src: local("Roboto Medium"), local("Roboto-Medium"), url("../fonts/Roboto-Medium.eot#iefix") format("embedded-opentype"), url("../fonts/Roboto-Medium.woff2") format("woff2"), url("../fonts/Roboto-Medium.woff") format("woff"), url("../fonts/Roboto-Medium.ttf") format("truetype");
		font-weight: 500;
		font-style: normal
	}

	@font-face {
		font-family: 'Roboto';
		src: url("../fonts/Roboto-Bold.eot");
		src: local("Roboto Bold"), local("Roboto-Medium"), url("../fonts/Roboto-Bold.eot#iefix") format("embedded-opentype"), url("../fonts/Roboto-Bold.woff2") format("woff2"), url("../fonts/Roboto-Bold.woff") format("woff"), url("../fonts/Roboto-Bold.ttf") format("truetype");
		font-weight: 700;
		font-style: normal
	}

	@font-face {
		font-family: 'Nunito';
		src: url("../fonts/Nunito-Regular.eot");
		src: local("Nunito Regular"), local("Nunito-Regular"), url("../fonts/Nunito-Regular.eot#iefix") format("embedded-opentype"), url("../fonts/Nunito-Regular.woff2") format("woff2"), url("../fonts/Nunito-Regular.woff") format("woff"), url("../fonts/Nunito-Regular.ttf") format("truetype");
		font-weight: normal;
		font-style: normal
	}

	@font-face {
		font-family: 'Nunito';
		src: url("../fonts/Nunito-Bold.eot");
		src: local("Nunito Bold"), local("Nunito-Bold"), url("../fonts/Nunito-Bold.eot#iefix") format("embedded-opentype"), url("../fonts/Nunito-Bold.woff2") format("woff2"), url("../fonts/Nunito-Bold.woff") format("woff"), url("../fonts/Nunito-Bold.ttf") format("truetype");
		font-weight: bold;
		font-style: normal
	}

	:root {
		--blue: #559bfb;
		--indigo: #2c3782;
		--purple: #816bff;
		--pink: #ff63a5;
		--red: #e85347;
		--orange: #ffa353;
		--yellow: #f4bd0e;
		--green: #1ee0ac;
		--teal: #20c997;
		--cyan: #09c2de;
		--white: #fff;
		--gray: #6c757d;
		--gray-dark: #343a40;
		--primary: #6576ff;
		--secondary: #364a63;
		--success: #1ee0ac;
		--info: #09c2de;
		--warning: #f4bd0e;
		--danger: #e85347;
		--dark: #1c2b46;
		--gray: #8091a7;
		--light: #e5e9f2;
		--lighter: #f5f6fa;
		--breakpoint-xs: 0;
		--breakpoint-sm: 576px;
		--breakpoint-md: 768px;
		--breakpoint-lg: 992px;
		--breakpoint-xl: 1200px;
		--breakpoint-xxl: 1540px;
		--font-family-sans-serif: (Roboto, sans-serif), "Helvetica Neue", Arial, "Noto Sans", sans-serif;
		--font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
	}

	*,
	*::before,
	*::after {
		box-sizing: border-box
	}

	html {
		font-family: sans-serif;
		line-height: 1.15;
		-webkit-text-size-adjust: 100%;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0)
	}

	article,
	aside,
	figcaption,
	figure,
	footer,
	header,
	hgroup,
	main,
	nav,
	section {
		display: block
	}

	body {
		margin: 0;
		font-family: Roboto, sans-serif, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
		font-size: .875rem;
		font-weight: 400;
		line-height: 1.65;
		color: #526484;
		text-align: left;
		background-color: #f5f6fa
	}

	[tabindex="-1"]:focus:not(:focus-visible) {
		outline: 0 !important
	}

	hr {
		box-sizing: content-box;
		height: 0;
		overflow: visible
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		margin-top: 0;
		margin-bottom: .5rem
	}

	p {
		margin-top: 0;
		margin-bottom: 1rem
	}

	abbr[title],
	abbr[data-original-title] {
		text-decoration: underline;
		cursor: help;
		border-bottom: 0;
		text-decoration-skip-ink: none
	}

	address {
		margin-bottom: 1rem;
		font-style: normal;
		line-height: inherit
	}

	ol,
	ul,
	dl {
		margin-top: 0;
		margin-bottom: 1rem
	}

	ol ol,
	ul ul,
	ol ul,
	ul ol {
		margin-bottom: 0
	}

	dt {
		font-weight: 700
	}

	dd {
		margin-bottom: .5rem;
		margin-left: 0
	}

	blockquote {
		margin: 0 0 1rem
	}

	b,
	strong {
		font-weight: bolder
	}

	small {
		font-size: 80%
	}

	sub,
	sup {
		position: relative;
		font-size: 75%;
		line-height: 0;
		vertical-align: baseline
	}

	sub {
		bottom: -.25em
	}

	sup {
		top: -.5em
	}

	a {
		color: #798bff;
		text-decoration: none;
		background-color: transparent
	}

	a:hover {
		color: #465fff;
		text-decoration: underline
	}

	a:not([href]) {
		color: inherit;
		text-decoration: none
	}

	a:not([href]):hover {
		color: inherit;
		text-decoration: none
	}

	pre,
	code,
	kbd,
	samp {
		font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
		font-size: 1em
	}

	pre {
		margin-top: 0;
		margin-bottom: 1rem;
		overflow: auto;
		-ms-overflow-style: scrollbar
	}

	figure {
		margin: 0 0 1rem
	}

	img {
		vertical-align: middle;
		border-style: none
	}

	svg {
		overflow: hidden;
		vertical-align: middle
	}

	table {
		border-collapse: collapse
	}

	caption {
		padding-top: .5rem;
		padding-bottom: .5rem;
		color: #8094ae;
		text-align: left;
		caption-side: bottom
	}

	th {
		text-align: inherit
	}

	label {
		display: inline-block;
		margin-bottom: 16px
	}

	button {
		border-radius: 0
	}

	button:focus {
		outline: 1px dotted;
		outline: 5px auto -webkit-focus-ring-color
	}

	input,
	button,
	select,
	optgroup,
	textarea {
		margin: 0;
		font-family: inherit;
		font-size: inherit;
		line-height: inherit
	}

	button,
	input {
		overflow: visible
	}

	button,
	select {
		text-transform: none
	}

	[role="button"] {
		cursor: pointer
	}

	select {
		word-wrap: normal
	}

	button,
	[type="button"],
	[type="reset"],
	[type="submit"] {
		-webkit-appearance: button
	}

	button:not(:disabled),
	[type="button"]:not(:disabled),
	[type="reset"]:not(:disabled),
	[type="submit"]:not(:disabled) {
		cursor: pointer
	}

	button::-moz-focus-inner,
	[type="button"]::-moz-focus-inner,
	[type="reset"]::-moz-focus-inner,
	[type="submit"]::-moz-focus-inner {
		padding: 0;
		border-style: none
	}

	input[type="radio"],
	input[type="checkbox"] {
		box-sizing: border-box;
		padding: 0
	}

	textarea {
		overflow: auto;
		resize: vertical
	}

	fieldset {
		min-width: 0;
		padding: 0;
		margin: 0;
		border: 0
	}

	legend {
		display: block;
		width: 100%;
		max-width: 100%;
		padding: 0;
		margin-bottom: .5rem;
		font-size: 1.5rem;
		line-height: inherit;
		color: inherit;
		white-space: normal
	}

	progress {
		vertical-align: baseline
	}

	[type="number"]::-webkit-inner-spin-button,
	[type="number"]::-webkit-outer-spin-button {
		height: auto
	}

	[type="search"] {
		outline-offset: -2px;
		-webkit-appearance: none
	}

	[type="search"]::-webkit-search-decoration {
		-webkit-appearance: none
	}

	::-webkit-file-upload-button {
		font: inherit;
		-webkit-appearance: button
	}

	output {
		display: inline-block
	}

	summary {
		display: list-item;
		cursor: pointer
	}

	template {
		display: none
	}

	[hidden] {
		display: none !important
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	.h1,
	.h2,
	.h3,
	.h4,
	.h5,
	.h6 {
		margin-bottom: .5rem;
		font-family: Nunito, sans-serif;
		font-weight: 700;
		line-height: 1.1;
		color: #364a63
	}

	h1,
	.h1 {
		font-size: 2rem
	}

	h2,
	.h2 {
		font-size: 1.75rem
	}

	h3,
	.h3 {
		font-size: 1.5rem
	}

	h4,
	.h4 {
		font-size: 1.25rem
	}

	h5,
	.h5 {
		font-size: 1.15rem
	}

	h6,
	.h6 {
		font-size: 1rem
	}

	.lead {
		font-size: 1.00625rem;
		font-weight: 400
	}

	.display-1 {
		font-size: 6rem;
		font-weight: 300;
		line-height: 1.1
	}

	.display-2 {
		font-size: 5.5rem;
		font-weight: 300;
		line-height: 1.1
	}

	.display-3 {
		font-size: 4.5rem;
		font-weight: 300;
		line-height: 1.1
	}

	.display-4 {
		font-size: 3.5rem;
		font-weight: 300;
		line-height: 1.1
	}

	hr {
		margin-top: 1rem;
		margin-bottom: 1rem;
		border: 0;
		border-top: 1px solid #b7c2d0
	}

	small,
	.small {
		font-size: 85%;
		font-weight: 400
	}

	mark,
	.mark {
		padding: .2em;
		background-color: #fcf8e3
	}

	.list-unstyled {
		padding-left: 0;
		list-style: none
	}

	.list-inline {
		padding-left: 0;
		list-style: none
	}

	.list-inline-item {
		display: inline-block
	}

	.list-inline-item:not(:last-child) {
		margin-right: .5rem
	}

	.initialism {
		font-size: 90%;
		text-transform: uppercase
	}

	.blockquote {
		margin-bottom: 1rem;
		font-size: 1.09375rem
	}

	.blockquote-footer {
		display: block;
		font-size: 85%;
		color: #b6c6e3
	}

	.blockquote-footer::before {
		content: "\2014\00A0"
	}

	.img-fluid {
		max-width: 100%;
		height: auto
	}

	.img-thumbnail {
		padding: .25rem;
		background-color: #f5f6fa;
		border: 1px solid #dee2e6;
		border-radius: 4px;
		max-width: 100%;
		height: auto
	}

	.figure {
		display: inline-block
	}

	.figure-img {
		margin-bottom: .5rem;
		line-height: 1
	}

	.figure-caption {
		font-size: 90%;
		color: #6c757d
	}

	code {
		font-size: 87.5%;
		color: #ff63a5;
		word-wrap: break-word
	}

	a>code {
		color: inherit
	}

	kbd {
		padding: .2rem .4rem;
		font-size: 87.5%;
		color: #fff;
		background-color: #212529;
		border-radius: 3px
	}

	kbd kbd {
		padding: 0;
		font-size: 100%;
		font-weight: 700
	}

	pre {
		display: block;
		font-size: 87.5%;
		color: #212529
	}

	pre code {
		font-size: inherit;
		color: inherit;
		word-break: normal
	}

	.pre-scrollable {
		max-height: 340px;
		overflow-y: scroll
	}

	.container,
	.container-fluid,
	.container-sm,
	.container-md,
	.container-lg,
	.container-xl,
	.container-xxl {
		width: 100%;
		padding-right: 14px;
		padding-left: 14px;
		margin-right: auto;
		margin-left: auto
	}

	@media (min-width: 576px) {

		.container,
		.container-sm {
			max-width: 540px
		}
	}

	@media (min-width: 768px) {

		.container,
		.container-sm,
		.container-md {
			max-width: 720px
		}
	}

	@media (min-width: 992px) {

		.container,
		.container-sm,
		.container-md,
		.container-lg {
			max-width: 960px
		}
	}

	@media (min-width: 1200px) {

		.container,
		.container-sm,
		.container-md,
		.container-lg,
		.container-xl {
			max-width: 1140px
		}
	}

	@media (min-width: 1540px) {

		.container,
		.container-sm,
		.container-md,
		.container-lg,
		.container-xl,
		.container-xxl {
			max-width: 1440px
		}
	}

	.row {
		display: flex;
		flex-wrap: wrap;
		margin-right: -14px;
		margin-left: -14px
	}

	.no-gutters {
		margin-right: 0;
		margin-left: 0
	}

	.no-gutters>.col,
	.no-gutters>[class*="col-"] {
		padding-right: 0;
		padding-left: 0
	}

	.col-1,
	.col-2,
	.col-3,
	.col-4,
	.col-5,
	.col-6,
	.col-7,
	.col-8,
	.col-9,
	.col-10,
	.col-11,
	.col-12,
	.col,
	.col-auto,
	.col-sm-1,
	.col-sm-2,
	.col-sm-3,
	.col-sm-4,
	.col-sm-5,
	.col-sm-6,
	.col-sm-7,
	.col-sm-8,
	.col-sm-9,
	.col-sm-10,
	.col-sm-11,
	.col-sm-12,
	.col-sm,
	.col-sm-auto,
	.col-md-1,
	.col-md-2,
	.col-md-3,
	.col-md-4,
	.col-md-5,
	.col-md-6,
	.col-md-7,
	.col-md-8,
	.col-md-9,
	.col-md-10,
	.col-md-11,
	.col-md-12,
	.col-md,
	.col-md-auto,
	.col-lg-1,
	.col-lg-2,
	.col-lg-3,
	.col-lg-4,
	.col-lg-5,
	.col-lg-6,
	.col-lg-7,
	.col-lg-8,
	.col-lg-9,
	.col-lg-10,
	.col-lg-11,
	.col-lg-12,
	.col-lg,
	.col-lg-auto,
	.col-xl-1,
	.col-xl-2,
	.col-xl-3,
	.col-xl-4,
	.col-xl-5,
	.col-xl-6,
	.col-xl-7,
	.col-xl-8,
	.col-xl-9,
	.col-xl-10,
	.col-xl-11,
	.col-xl-12,
	.col-xl,
	.col-xl-auto,
	.col-xxl-1,
	.col-xxl-2,
	.col-xxl-3,
	.col-xxl-4,
	.col-xxl-5,
	.col-xxl-6,
	.col-xxl-7,
	.col-xxl-8,
	.col-xxl-9,
	.col-xxl-10,
	.col-xxl-11,
	.col-xxl-12,
	.col-xxl,
	.col-xxl-auto {
		position: relative;
		width: 100%;
		padding-right: 14px;
		padding-left: 14px
	}

	.col {
		flex-basis: 0;
		flex-grow: 1;
		max-width: 100%
	}

	.row-cols-1>* {
		flex: 0 0 100%;
		max-width: 100%
	}

	.row-cols-2>* {
		flex: 0 0 50%;
		max-width: 50%
	}

	.row-cols-3>* {
		flex: 0 0 33.33333%;
		max-width: 33.33333%
	}

	.row-cols-4>* {
		flex: 0 0 25%;
		max-width: 25%
	}

	.row-cols-5>* {
		flex: 0 0 20%;
		max-width: 20%
	}

	.row-cols-6>* {
		flex: 0 0 16.66667%;
		max-width: 16.66667%
	}

	.col-auto {
		flex: 0 0 auto;
		width: auto;
		max-width: 100%
	}

	.col-1 {
		flex: 0 0 8.33333%;
		max-width: 8.33333%
	}

	.col-2 {
		flex: 0 0 16.66667%;
		max-width: 16.66667%
	}

	.col-3 {
		flex: 0 0 25%;
		max-width: 25%
	}

	.col-4 {
		flex: 0 0 33.33333%;
		max-width: 33.33333%
	}

	.col-5 {
		flex: 0 0 41.66667%;
		max-width: 41.66667%
	}

	.col-6 {
		flex: 0 0 50%;
		max-width: 50%
	}

	.col-7 {
		flex: 0 0 58.33333%;
		max-width: 58.33333%
	}

	.col-8 {
		flex: 0 0 66.66667%;
		max-width: 66.66667%
	}

	.col-9 {
		flex: 0 0 75%;
		max-width: 75%
	}

	.col-10 {
		flex: 0 0 83.33333%;
		max-width: 83.33333%
	}

	.col-11 {
		flex: 0 0 91.66667%;
		max-width: 91.66667%
	}

	.col-12 {
		flex: 0 0 100%;
		max-width: 100%
	}

	.order-first {
		order: -1
	}

	.order-last {
		order: 13
	}

	.order-0 {
		order: 0
	}

	.order-1 {
		order: 1
	}

	.order-2 {
		order: 2
	}

	.order-3 {
		order: 3
	}

	.order-4 {
		order: 4
	}

	.order-5 {
		order: 5
	}

	.order-6 {
		order: 6
	}

	.order-7 {
		order: 7
	}

	.order-8 {
		order: 8
	}

	.order-9 {
		order: 9
	}

	.order-10 {
		order: 10
	}

	.order-11 {
		order: 11
	}

	.order-12 {
		order: 12
	}

	.offset-1 {
		margin-left: 8.33333%
	}

	.offset-2 {
		margin-left: 16.66667%
	}

	.offset-3 {
		margin-left: 25%
	}

	.offset-4 {
		margin-left: 33.33333%
	}

	.offset-5 {
		margin-left: 41.66667%
	}

	.offset-6 {
		margin-left: 50%
	}

	.offset-7 {
		margin-left: 58.33333%
	}

	.offset-8 {
		margin-left: 66.66667%
	}

	.offset-9 {
		margin-left: 75%
	}

	.offset-10 {
		margin-left: 83.33333%
	}

	.offset-11 {
		margin-left: 91.66667%
	}

	@media (min-width: 576px) {
		.col-sm {
			flex-basis: 0;
			flex-grow: 1;
			max-width: 100%
		}

		.row-cols-sm-1>* {
			flex: 0 0 100%;
			max-width: 100%
		}

		.row-cols-sm-2>* {
			flex: 0 0 50%;
			max-width: 50%
		}

		.row-cols-sm-3>* {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.row-cols-sm-4>* {
			flex: 0 0 25%;
			max-width: 25%
		}

		.row-cols-sm-5>* {
			flex: 0 0 20%;
			max-width: 20%
		}

		.row-cols-sm-6>* {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-sm-auto {
			flex: 0 0 auto;
			width: auto;
			max-width: 100%
		}

		.col-sm-1 {
			flex: 0 0 8.33333%;
			max-width: 8.33333%
		}

		.col-sm-2 {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-sm-3 {
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-sm-4 {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.col-sm-5 {
			flex: 0 0 41.66667%;
			max-width: 41.66667%
		}

		.col-sm-6 {
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-sm-7 {
			flex: 0 0 58.33333%;
			max-width: 58.33333%
		}

		.col-sm-8 {
			flex: 0 0 66.66667%;
			max-width: 66.66667%
		}

		.col-sm-9 {
			flex: 0 0 75%;
			max-width: 75%
		}

		.col-sm-10 {
			flex: 0 0 83.33333%;
			max-width: 83.33333%
		}

		.col-sm-11 {
			flex: 0 0 91.66667%;
			max-width: 91.66667%
		}

		.col-sm-12 {
			flex: 0 0 100%;
			max-width: 100%
		}

		.order-sm-first {
			order: -1
		}

		.order-sm-last {
			order: 13
		}

		.order-sm-0 {
			order: 0
		}

		.order-sm-1 {
			order: 1
		}

		.order-sm-2 {
			order: 2
		}

		.order-sm-3 {
			order: 3
		}

		.order-sm-4 {
			order: 4
		}

		.order-sm-5 {
			order: 5
		}

		.order-sm-6 {
			order: 6
		}

		.order-sm-7 {
			order: 7
		}

		.order-sm-8 {
			order: 8
		}

		.order-sm-9 {
			order: 9
		}

		.order-sm-10 {
			order: 10
		}

		.order-sm-11 {
			order: 11
		}

		.order-sm-12 {
			order: 12
		}

		.offset-sm-0 {
			margin-left: 0
		}

		.offset-sm-1 {
			margin-left: 8.33333%
		}

		.offset-sm-2 {
			margin-left: 16.66667%
		}

		.offset-sm-3 {
			margin-left: 25%
		}

		.offset-sm-4 {
			margin-left: 33.33333%
		}

		.offset-sm-5 {
			margin-left: 41.66667%
		}

		.offset-sm-6 {
			margin-left: 50%
		}

		.offset-sm-7 {
			margin-left: 58.33333%
		}

		.offset-sm-8 {
			margin-left: 66.66667%
		}

		.offset-sm-9 {
			margin-left: 75%
		}

		.offset-sm-10 {
			margin-left: 83.33333%
		}

		.offset-sm-11 {
			margin-left: 91.66667%
		}
	}

	@media (min-width: 768px) {
		.col-md {
			flex-basis: 0;
			flex-grow: 1;
			max-width: 100%
		}

		.row-cols-md-1>* {
			flex: 0 0 100%;
			max-width: 100%
		}

		.row-cols-md-2>* {
			flex: 0 0 50%;
			max-width: 50%
		}

		.row-cols-md-3>* {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.row-cols-md-4>* {
			flex: 0 0 25%;
			max-width: 25%
		}

		.row-cols-md-5>* {
			flex: 0 0 20%;
			max-width: 20%
		}

		.row-cols-md-6>* {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-md-auto {
			flex: 0 0 auto;
			width: auto;
			max-width: 100%
		}

		.col-md-1 {
			flex: 0 0 8.33333%;
			max-width: 8.33333%
		}

		.col-md-2 {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-md-3 {
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-md-4 {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.col-md-5 {
			flex: 0 0 41.66667%;
			max-width: 41.66667%
		}

		.col-md-6 {
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-md-7 {
			flex: 0 0 58.33333%;
			max-width: 58.33333%
		}

		.col-md-8 {
			flex: 0 0 66.66667%;
			max-width: 66.66667%
		}

		.col-md-9 {
			flex: 0 0 75%;
			max-width: 75%
		}

		.col-md-10 {
			flex: 0 0 83.33333%;
			max-width: 83.33333%
		}

		.col-md-11 {
			flex: 0 0 91.66667%;
			max-width: 91.66667%
		}

		.col-md-12 {
			flex: 0 0 100%;
			max-width: 100%
		}

		.order-md-first {
			order: -1
		}

		.order-md-last {
			order: 13
		}

		.order-md-0 {
			order: 0
		}

		.order-md-1 {
			order: 1
		}

		.order-md-2 {
			order: 2
		}

		.order-md-3 {
			order: 3
		}

		.order-md-4 {
			order: 4
		}

		.order-md-5 {
			order: 5
		}

		.order-md-6 {
			order: 6
		}

		.order-md-7 {
			order: 7
		}

		.order-md-8 {
			order: 8
		}

		.order-md-9 {
			order: 9
		}

		.order-md-10 {
			order: 10
		}

		.order-md-11 {
			order: 11
		}

		.order-md-12 {
			order: 12
		}

		.offset-md-0 {
			margin-left: 0
		}

		.offset-md-1 {
			margin-left: 8.33333%
		}

		.offset-md-2 {
			margin-left: 16.66667%
		}

		.offset-md-3 {
			margin-left: 25%
		}

		.offset-md-4 {
			margin-left: 33.33333%
		}

		.offset-md-5 {
			margin-left: 41.66667%
		}

		.offset-md-6 {
			margin-left: 50%
		}

		.offset-md-7 {
			margin-left: 58.33333%
		}

		.offset-md-8 {
			margin-left: 66.66667%
		}

		.offset-md-9 {
			margin-left: 75%
		}

		.offset-md-10 {
			margin-left: 83.33333%
		}

		.offset-md-11 {
			margin-left: 91.66667%
		}
	}

	@media (min-width: 992px) {
		.col-lg {
			flex-basis: 0;
			flex-grow: 1;
			max-width: 100%
		}

		.row-cols-lg-1>* {
			flex: 0 0 100%;
			max-width: 100%
		}

		.row-cols-lg-2>* {
			flex: 0 0 50%;
			max-width: 50%
		}

		.row-cols-lg-3>* {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.row-cols-lg-4>* {
			flex: 0 0 25%;
			max-width: 25%
		}

		.row-cols-lg-5>* {
			flex: 0 0 20%;
			max-width: 20%
		}

		.row-cols-lg-6>* {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-lg-auto {
			flex: 0 0 auto;
			width: auto;
			max-width: 100%
		}

		.col-lg-1 {
			flex: 0 0 8.33333%;
			max-width: 8.33333%
		}

		.col-lg-2 {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-lg-3 {
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-lg-4 {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.col-lg-5 {
			flex: 0 0 41.66667%;
			max-width: 41.66667%
		}

		.col-lg-6 {
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-lg-7 {
			flex: 0 0 58.33333%;
			max-width: 58.33333%
		}

		.col-lg-8 {
			flex: 0 0 66.66667%;
			max-width: 66.66667%
		}

		.col-lg-9 {
			flex: 0 0 75%;
			max-width: 75%
		}

		.col-lg-10 {
			flex: 0 0 83.33333%;
			max-width: 83.33333%
		}

		.col-lg-11 {
			flex: 0 0 91.66667%;
			max-width: 91.66667%
		}

		.col-lg-12 {
			flex: 0 0 100%;
			max-width: 100%
		}

		.order-lg-first {
			order: -1
		}

		.order-lg-last {
			order: 13
		}

		.order-lg-0 {
			order: 0
		}

		.order-lg-1 {
			order: 1
		}

		.order-lg-2 {
			order: 2
		}

		.order-lg-3 {
			order: 3
		}

		.order-lg-4 {
			order: 4
		}

		.order-lg-5 {
			order: 5
		}

		.order-lg-6 {
			order: 6
		}

		.order-lg-7 {
			order: 7
		}

		.order-lg-8 {
			order: 8
		}

		.order-lg-9 {
			order: 9
		}

		.order-lg-10 {
			order: 10
		}

		.order-lg-11 {
			order: 11
		}

		.order-lg-12 {
			order: 12
		}

		.offset-lg-0 {
			margin-left: 0
		}

		.offset-lg-1 {
			margin-left: 8.33333%
		}

		.offset-lg-2 {
			margin-left: 16.66667%
		}

		.offset-lg-3 {
			margin-left: 25%
		}

		.offset-lg-4 {
			margin-left: 33.33333%
		}

		.offset-lg-5 {
			margin-left: 41.66667%
		}

		.offset-lg-6 {
			margin-left: 50%
		}

		.offset-lg-7 {
			margin-left: 58.33333%
		}

		.offset-lg-8 {
			margin-left: 66.66667%
		}

		.offset-lg-9 {
			margin-left: 75%
		}

		.offset-lg-10 {
			margin-left: 83.33333%
		}

		.offset-lg-11 {
			margin-left: 91.66667%
		}
	}

	@media (min-width: 1200px) {
		.col-xl {
			flex-basis: 0;
			flex-grow: 1;
			max-width: 100%
		}

		.row-cols-xl-1>* {
			flex: 0 0 100%;
			max-width: 100%
		}

		.row-cols-xl-2>* {
			flex: 0 0 50%;
			max-width: 50%
		}

		.row-cols-xl-3>* {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.row-cols-xl-4>* {
			flex: 0 0 25%;
			max-width: 25%
		}

		.row-cols-xl-5>* {
			flex: 0 0 20%;
			max-width: 20%
		}

		.row-cols-xl-6>* {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-xl-auto {
			flex: 0 0 auto;
			width: auto;
			max-width: 100%
		}

		.col-xl-1 {
			flex: 0 0 8.33333%;
			max-width: 8.33333%
		}

		.col-xl-2 {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-xl-3 {
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-xl-4 {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.col-xl-5 {
			flex: 0 0 41.66667%;
			max-width: 41.66667%
		}

		.col-xl-6 {
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-xl-7 {
			flex: 0 0 58.33333%;
			max-width: 58.33333%
		}

		.col-xl-8 {
			flex: 0 0 66.66667%;
			max-width: 66.66667%
		}

		.col-xl-9 {
			flex: 0 0 75%;
			max-width: 75%
		}

		.col-xl-10 {
			flex: 0 0 83.33333%;
			max-width: 83.33333%
		}

		.col-xl-11 {
			flex: 0 0 91.66667%;
			max-width: 91.66667%
		}

		.col-xl-12 {
			flex: 0 0 100%;
			max-width: 100%
		}

		.order-xl-first {
			order: -1
		}

		.order-xl-last {
			order: 13
		}

		.order-xl-0 {
			order: 0
		}

		.order-xl-1 {
			order: 1
		}

		.order-xl-2 {
			order: 2
		}

		.order-xl-3 {
			order: 3
		}

		.order-xl-4 {
			order: 4
		}

		.order-xl-5 {
			order: 5
		}

		.order-xl-6 {
			order: 6
		}

		.order-xl-7 {
			order: 7
		}

		.order-xl-8 {
			order: 8
		}

		.order-xl-9 {
			order: 9
		}

		.order-xl-10 {
			order: 10
		}

		.order-xl-11 {
			order: 11
		}

		.order-xl-12 {
			order: 12
		}

		.offset-xl-0 {
			margin-left: 0
		}

		.offset-xl-1 {
			margin-left: 8.33333%
		}

		.offset-xl-2 {
			margin-left: 16.66667%
		}

		.offset-xl-3 {
			margin-left: 25%
		}

		.offset-xl-4 {
			margin-left: 33.33333%
		}

		.offset-xl-5 {
			margin-left: 41.66667%
		}

		.offset-xl-6 {
			margin-left: 50%
		}

		.offset-xl-7 {
			margin-left: 58.33333%
		}

		.offset-xl-8 {
			margin-left: 66.66667%
		}

		.offset-xl-9 {
			margin-left: 75%
		}

		.offset-xl-10 {
			margin-left: 83.33333%
		}

		.offset-xl-11 {
			margin-left: 91.66667%
		}
	}

	@media (min-width: 1540px) {
		.col-xxl {
			flex-basis: 0;
			flex-grow: 1;
			max-width: 100%
		}

		.row-cols-xxl-1>* {
			flex: 0 0 100%;
			max-width: 100%
		}

		.row-cols-xxl-2>* {
			flex: 0 0 50%;
			max-width: 50%
		}

		.row-cols-xxl-3>* {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.row-cols-xxl-4>* {
			flex: 0 0 25%;
			max-width: 25%
		}

		.row-cols-xxl-5>* {
			flex: 0 0 20%;
			max-width: 20%
		}

		.row-cols-xxl-6>* {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-xxl-auto {
			flex: 0 0 auto;
			width: auto;
			max-width: 100%
		}

		.col-xxl-1 {
			flex: 0 0 8.33333%;
			max-width: 8.33333%
		}

		.col-xxl-2 {
			flex: 0 0 16.66667%;
			max-width: 16.66667%
		}

		.col-xxl-3 {
			flex: 0 0 25%;
			max-width: 25%
		}

		.col-xxl-4 {
			flex: 0 0 33.33333%;
			max-width: 33.33333%
		}

		.col-xxl-5 {
			flex: 0 0 41.66667%;
			max-width: 41.66667%
		}

		.col-xxl-6 {
			flex: 0 0 50%;
			max-width: 50%
		}

		.col-xxl-7 {
			flex: 0 0 58.33333%;
			max-width: 58.33333%
		}

		.col-xxl-8 {
			flex: 0 0 66.66667%;
			max-width: 66.66667%
		}

		.col-xxl-9 {
			flex: 0 0 75%;
			max-width: 75%
		}

		.col-xxl-10 {
			flex: 0 0 83.33333%;
			max-width: 83.33333%
		}

		.col-xxl-11 {
			flex: 0 0 91.66667%;
			max-width: 91.66667%
		}

		.col-xxl-12 {
			flex: 0 0 100%;
			max-width: 100%
		}

		.order-xxl-first {
			order: -1
		}

		.order-xxl-last {
			order: 13
		}

		.order-xxl-0 {
			order: 0
		}

		.order-xxl-1 {
			order: 1
		}

		.order-xxl-2 {
			order: 2
		}

		.order-xxl-3 {
			order: 3
		}

		.order-xxl-4 {
			order: 4
		}

		.order-xxl-5 {
			order: 5
		}

		.order-xxl-6 {
			order: 6
		}

		.order-xxl-7 {
			order: 7
		}

		.order-xxl-8 {
			order: 8
		}

		.order-xxl-9 {
			order: 9
		}

		.order-xxl-10 {
			order: 10
		}

		.order-xxl-11 {
			order: 11
		}

		.order-xxl-12 {
			order: 12
		}

		.offset-xxl-0 {
			margin-left: 0
		}

		.offset-xxl-1 {
			margin-left: 8.33333%
		}

		.offset-xxl-2 {
			margin-left: 16.66667%
		}

		.offset-xxl-3 {
			margin-left: 25%
		}

		.offset-xxl-4 {
			margin-left: 33.33333%
		}

		.offset-xxl-5 {
			margin-left: 41.66667%
		}

		.offset-xxl-6 {
			margin-left: 50%
		}

		.offset-xxl-7 {
			margin-left: 58.33333%
		}

		.offset-xxl-8 {
			margin-left: 66.66667%
		}

		.offset-xxl-9 {
			margin-left: 75%
		}

		.offset-xxl-10 {
			margin-left: 83.33333%
		}

		.offset-xxl-11 {
			margin-left: 91.66667%
		}
	}

	.table {
		width: 100%;
		margin-bottom: 1rem;
		color: #526484
	}

	.table th,
	.table td {
		padding: .5rem;
		vertical-align: top;
		border-top: 1px solid #dbdfea
	}

	.table thead th {
		vertical-align: bottom;
		border-bottom: 2px solid #dbdfea
	}

	.table tbody+tbody {
		border-top: 2px solid #dbdfea
	}

	.table-sm th,
	.table-sm td {
		padding: .25rem
	}

	.table-bordered {
		border: 1px solid #dbdfea
	}

	.table-bordered th,
	.table-bordered td {
		border: 1px solid #dbdfea
	}

	.table-bordered thead th,
	.table-bordered thead td {
		border-bottom-width: 2px
	}

	.table-borderless th,
	.table-borderless td,
	.table-borderless thead th,
	.table-borderless tbody+tbody {
		border: 0
	}

	.table-striped tbody tr:nth-of-type(odd) {
		background-color: #f5f6fa
	}

	.table-hover tbody tr:hover {
		color: #526484;
		background-color: #f5f6fa
	}

	.table-primary,
	.table-primary>th,
	.table-primary>td {
		background-color: #d4d9ff
	}

	.table-primary th,
	.table-primary td,
	.table-primary thead th,
	.table-primary tbody+tbody {
		border-color: #afb8ff
	}

	.table-hover .table-primary:hover {
		background-color: #bbc2ff
	}

	.table-hover .table-primary:hover>td,
	.table-hover .table-primary:hover>th {
		background-color: #bbc2ff
	}

	.table-secondary,
	.table-secondary>th,
	.table-secondary>td {
		background-color: #c7ccd3
	}

	.table-secondary th,
	.table-secondary td,
	.table-secondary thead th,
	.table-secondary tbody+tbody {
		border-color: #96a1ae
	}

	.table-hover .table-secondary:hover {
		background-color: #b9bfc8
	}

	.table-hover .table-secondary:hover>td,
	.table-hover .table-secondary:hover>th {
		background-color: #b9bfc8
	}

	.table-success,
	.table-success>th,
	.table-success>td {
		background-color: #c0f6e8
	}

	.table-success th,
	.table-success td,
	.table-success thead th,
	.table-success tbody+tbody {
		border-color: #8aefd4
	}

	.table-hover .table-success:hover {
		background-color: #aaf3e0
	}

	.table-hover .table-success:hover>td,
	.table-hover .table-success:hover>th {
		background-color: #aaf3e0
	}

	.table-info,
	.table-info>th,
	.table-info>td {
		background-color: #baeef6
	}

	.table-info th,
	.table-info td,
	.table-info thead th,
	.table-info tbody+tbody {
		border-color: #7fdfee
	}

	.table-hover .table-info:hover {
		background-color: #a3e8f3
	}

	.table-hover .table-info:hover>td,
	.table-hover .table-info:hover>th {
		background-color: #a3e8f3
	}

	.table-warning,
	.table-warning>th,
	.table-warning>td {
		background-color: #fcedbc
	}

	.table-warning th,
	.table-warning td,
	.table-warning thead th,
	.table-warning tbody+tbody {
		border-color: #f9dd82
	}

	.table-hover .table-warning:hover {
		background-color: #fbe6a4
	}

	.table-hover .table-warning:hover>td,
	.table-hover .table-warning:hover>th {
		background-color: #fbe6a4
	}

	.table-danger,
	.table-danger>th,
	.table-danger>td {
		background-color: #f9cfcb
	}

	.table-danger th,
	.table-danger td,
	.table-danger thead th,
	.table-danger tbody+tbody {
		border-color: #f3a69f
	}

	.table-hover .table-danger:hover {
		background-color: #f6bab4
	}

	.table-hover .table-danger:hover>td,
	.table-hover .table-danger:hover>th {
		background-color: #f6bab4
	}

	.table-dark,
	.table-dark>th,
	.table-dark>td {
		background-color: #bfc4cb
	}

	.table-dark th,
	.table-dark td,
	.table-dark thead th,
	.table-dark tbody+tbody {
		border-color: #89919f
	}

	.table-hover .table-dark:hover {
		background-color: #b1b7c0
	}

	.table-hover .table-dark:hover>td,
	.table-hover .table-dark:hover>th {
		background-color: #b1b7c0
	}

	.table-gray,
	.table-gray>th,
	.table-gray>td {
		background-color: #dbe0e6
	}

	.table-gray th,
	.table-gray td,
	.table-gray thead th,
	.table-gray tbody+tbody {
		border-color: #bdc6d1
	}

	.table-hover .table-gray:hover {
		background-color: #ccd3dc
	}

	.table-hover .table-gray:hover>td,
	.table-hover .table-gray:hover>th {
		background-color: #ccd3dc
	}

	.table-light,
	.table-light>th,
	.table-light>td {
		background-color: #f8f9fb
	}

	.table-light th,
	.table-light td,
	.table-light thead th,
	.table-light tbody+tbody {
		border-color: #f1f4f8
	}

	.table-hover .table-light:hover {
		background-color: #e8ebf2
	}

	.table-hover .table-light:hover>td,
	.table-hover .table-light:hover>th {
		background-color: #e8ebf2
	}

	.table-lighter,
	.table-lighter>th,
	.table-lighter>td {
		background-color: #fcfcfe
	}

	.table-lighter th,
	.table-lighter td,
	.table-lighter thead th,
	.table-lighter tbody+tbody {
		border-color: #fafafc
	}

	.table-hover .table-lighter:hover {
		background-color: #e9e9f8
	}

	.table-hover .table-lighter:hover>td,
	.table-hover .table-lighter:hover>th {
		background-color: #e9e9f8
	}

	.table-active,
	.table-active>th,
	.table-active>td {
		background-color: #f5f6fa
	}

	.table-hover .table-active:hover {
		background-color: #e4e7f2
	}

	.table-hover .table-active:hover>td,
	.table-hover .table-active:hover>th {
		background-color: #e4e7f2
	}

	.table .thead-dark th {
		color: #fff;
		background-color: #2b3748;
		border-color: #3c4d62
	}

	.table .thead-light th {
		color: #364a63;
		background-color: #f5f6fa;
		border-color: #dbdfea
	}

	.table-dark {
		color: #fff;
		background-color: #2b3748
	}

	.table-dark th,
	.table-dark td,
	.table-dark thead th {
		border-color: #3c4d62
	}

	.table-dark.table-bordered {
		border: 0
	}

	.table-dark.table-striped tbody tr:nth-of-type(odd) {
		background-color: #344357
	}

	.table-dark.table-hover tbody tr:hover {
		color: #fff;
		background-color: #344357
	}

	@media (max-width: 575.98px) {
		.table-responsive-sm {
			display: block;
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch
		}

		.table-responsive-sm>.table-bordered {
			border: 0
		}
	}

	@media (max-width: 767.98px) {
		.table-responsive-md {
			display: block;
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch
		}

		.table-responsive-md>.table-bordered {
			border: 0
		}
	}

	@media (max-width: 991.98px) {
		.table-responsive-lg {
			display: block;
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch
		}

		.table-responsive-lg>.table-bordered {
			border: 0
		}
	}

	@media (max-width: 1199.98px) {
		.table-responsive-xl {
			display: block;
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch
		}

		.table-responsive-xl>.table-bordered {
			border: 0
		}
	}

	@media (max-width: 1539.98px) {
		.table-responsive-xxl {
			display: block;
			width: 100%;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch
		}

		.table-responsive-xxl>.table-bordered {
			border: 0
		}
	}

	.table-responsive {
		display: block;
		width: 100%;
		overflow-x: auto;
		-webkit-overflow-scrolling: touch
	}

	.table-responsive>.table-bordered {
		border: 0
	}

	.form-control,
	div.dataTables_wrapper div.dataTables_filter input,
	.dual-listbox .dual-listbox__search {
		display: block;
		width: 100%;
		height: calc(2.125rem + 2px);
		padding: .4375rem 1rem;
		font-size: .8125rem;
		font-weight: 400;
		line-height: 1.25rem;
		color: #3c4d62;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #dbdfea;
		border-radius: 4px;
		transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
	}

	@media (prefers-reduced-motion: reduce) {

		.form-control,
		div.dataTables_wrapper div.dataTables_filter input,
		.dual-listbox .dual-listbox__search {
			transition: none
		}
	}

	.form-control::-ms-expand,
	div.dataTables_wrapper div.dataTables_filter input::-ms-expand,
	.dual-listbox .dual-listbox__search::-ms-expand {
		background-color: transparent;
		border: 0
	}

	.form-control:-moz-focusring,
	div.dataTables_wrapper div.dataTables_filter input:-moz-focusring,
	.dual-listbox .dual-listbox__search:-moz-focusring {
		color: transparent;
		text-shadow: 0 0 0 #3c4d62
	}

	.form-control:focus,
	div.dataTables_wrapper div.dataTables_filter input:focus,
	.dual-listbox .dual-listbox__search:focus {
		color: #3c4d62;
		background-color: #fff;
		border-color: #6576ff;
		outline: 0;
		box-shadow: 0 0 0 3px rgba(101, 118, 255, 0.1)
	}

	.form-control::placeholder,
	div.dataTables_wrapper div.dataTables_filter input::placeholder,
	.dual-listbox .dual-listbox__search::placeholder {
		color: #b6c6e3;
		opacity: 1
	}

	.form-control:disabled,
	div.dataTables_wrapper div.dataTables_filter input:disabled,
	.dual-listbox .dual-listbox__search:disabled,
	.form-control[readonly],
	div.dataTables_wrapper div.dataTables_filter input[readonly],
	.dual-listbox .dual-listbox__search[readonly] {
		background-color: #f5f6fa;
		opacity: 1
	}

	input[type="date"].form-control,
	div.dataTables_wrapper div.dataTables_filter input[type="date"],
	.dual-listbox input.dual-listbox__search[type="date"],
	input[type="time"].form-control,
	div.dataTables_wrapper div.dataTables_filter input[type="time"],
	.dual-listbox input.dual-listbox__search[type="time"],
	input[type="datetime-local"].form-control,
	div.dataTables_wrapper div.dataTables_filter input[type="datetime-local"],
	.dual-listbox input.dual-listbox__search[type="datetime-local"],
	input[type="month"].form-control,
	div.dataTables_wrapper div.dataTables_filter input[type="month"],
	.dual-listbox input.dual-listbox__search[type="month"] {
		appearance: none
	}

	select.form-control:focus::-ms-value,
	.dual-listbox select.dual-listbox__search:focus::-ms-value {
		color: #3c4d62;
		background-color: #fff
	}

	.form-control-file,
	.form-control-range {
		display: block;
		width: 100%
	}

	.col-form-label {
		padding-top: calc(.4375rem + 1px);
		padding-bottom: calc(.4375rem + 1px);
		margin-bottom: 0;
		font-size: inherit;
		line-height: 1.25rem
	}

	.col-form-label-lg {
		padding-top: calc(.6875rem + 1px);
		padding-bottom: calc(.6875rem + 1px);
		font-size: .9375rem;
		line-height: 1.25rem
	}

	.col-form-label-sm {
		padding-top: calc(.25rem + 1px);
		padding-bottom: calc(.25rem + 1px);
		font-size: .75rem;
		line-height: 1.25rem
	}

	.form-control-plaintext {
		display: block;
		width: 100%;
		padding: .4375rem 0;
		margin-bottom: 0;
		font-size: .8125rem;
		line-height: 1.25rem;
		color: #364a63;
		background-color: transparent;
		border: solid transparent;
		border-width: 1px 0
	}

	.form-control-plaintext.form-control-sm,
	.form-control-plaintext.form-control-lg {
		padding-right: 0;
		padding-left: 0
	}

	.form-control-sm {
		height: calc(1.75rem + 2px);
		padding: .25rem 1rem;
		font-size: .75rem;
		line-height: 1.25rem;
		border-radius: 3px
	}

	.form-control-lg {
		height: calc(2.625rem + 2px);
		padding: .6875rem 1rem;
		font-size: .9375rem;
		line-height: 1.25rem;
		border-radius: 5px
	}

	select.form-control[size],
	.dual-listbox select.dual-listbox__search[size],
	select.form-control[multiple],
	.dual-listbox select.dual-listbox__search[multiple] {
		height: auto
	}

	textarea.form-control,
	.dual-listbox textarea.dual-listbox__search {
		height: auto
	}

	.form-group {
		margin-bottom: 1rem
	}

	.form-text {
		display: block;
		margin-top: .25rem
	}

	.form-row {
		display: flex;
		flex-wrap: wrap;
		margin-right: -5px;
		margin-left: -5px
	}

	.form-row>.col,
	.form-row>[class*="col-"] {
		padding-right: 5px;
		padding-left: 5px
	}

	.form-check {
		position: relative;
		display: block;
		padding-left: 1.25rem
	}

	.form-check-input {
		position: absolute;
		margin-top: .3rem;
		margin-left: -1.25rem
	}

	.form-check-input[disabled]~.form-check-label,
	.form-check-input:disabled~.form-check-label {
		color: #8094ae
	}

	.form-check-label {
		margin-bottom: 0
	}

	.form-check-inline {
		display: inline-flex;
		align-items: center;
		padding-left: 0;
		margin-right: .75rem
	}

	.form-check-inline .form-check-input {
		position: static;
		margin-top: 0;
		margin-right: .3125rem;
		margin-left: 0
	}

	.valid-feedback {
		display: none;
		width: 100%;
		margin-top: .25rem;
		font-size: 80%;
		color: #1ee0ac
	}

	.valid-tooltip {
		position: absolute;
		top: 100%;
		left: 0;
		z-index: 5;
		display: none;
		max-width: 100%;
		padding: .25rem .75rem;
		margin-top: .1rem;
		font-size: .8125rem;
		line-height: 1.5;
		color: #fff;
		background-color: rgba(30, 224, 172, 0.9);
		border-radius: 3px
	}

	.form-row>.col>.valid-tooltip,
	.form-row>[class*="col-"]>.valid-tooltip {
		left: 5px
	}

	.was-validated :valid~.valid-feedback,
	.was-validated :valid~.valid-tooltip,
	.is-valid~.valid-feedback,
	.is-valid~.valid-tooltip {
		display: block
	}

	.was-validated .form-control:valid,
	.was-validated div.dataTables_wrapper div.dataTables_filter input:valid,
	div.dataTables_wrapper div.dataTables_filter .was-validated input:valid,
	.was-validated .dual-listbox .dual-listbox__search:valid,
	.dual-listbox .was-validated .dual-listbox__search:valid,
	.form-control.is-valid,
	div.dataTables_wrapper div.dataTables_filter input.is-valid,
	.dual-listbox .is-valid.dual-listbox__search {
		border-color: #1ee0ac;
		padding-right: 2.125rem;
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231ee0ac' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
		background-repeat: no-repeat;
		background-position: right add(.3125rem, .21875rem) center;
		background-size: add(.625rem, .4375rem) add(.625rem, .4375rem)
	}

	.was-validated .form-control:valid:focus,
	.was-validated div.dataTables_wrapper div.dataTables_filter input:valid:focus,
	div.dataTables_wrapper div.dataTables_filter .was-validated input:valid:focus,
	.was-validated .dual-listbox .dual-listbox__search:valid:focus,
	.dual-listbox .was-validated .dual-listbox__search:valid:focus,
	.form-control.is-valid:focus,
	div.dataTables_wrapper div.dataTables_filter input.is-valid:focus,
	.dual-listbox .is-valid.dual-listbox__search:focus {
		border-color: #1ee0ac;
		box-shadow: 0 0 0 .2rem rgba(30, 224, 172, 0.25)
	}

	.was-validated textarea.form-control:valid,
	.was-validated .dual-listbox textarea.dual-listbox__search:valid,
	.dual-listbox .was-validated textarea.dual-listbox__search:valid,
	textarea.form-control.is-valid,
	.dual-listbox textarea.is-valid.dual-listbox__search {
		padding-right: 2.125rem;
		background-position: top add(.3125rem, .21875rem) right add(.3125rem, .21875rem)
	}

	.was-validated .custom-select:valid,
	.was-validated div.dataTables_wrapper div.dataTables_length select:valid,
	div.dataTables_wrapper div.dataTables_length .was-validated select:valid,
	.custom-select.is-valid,
	div.dataTables_wrapper div.dataTables_length select.is-valid {
		border-color: #1ee0ac;
		padding-right: calc(.75em + 2.65625rem);
		background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 1rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231ee0ac' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") center right 2rem/add(.625rem, .4375rem) add(.625rem, .4375rem) no-repeat
	}

	.was-validated .custom-select:valid:focus,
	.was-validated div.dataTables_wrapper div.dataTables_length select:valid:focus,
	div.dataTables_wrapper div.dataTables_length .was-validated select:valid:focus,
	.custom-select.is-valid:focus,
	div.dataTables_wrapper div.dataTables_length select.is-valid:focus {
		border-color: #1ee0ac;
		box-shadow: 0 0 0 .2rem rgba(30, 224, 172, 0.25)
	}

	.was-validated .form-check-input:valid~.form-check-label,
	.form-check-input.is-valid~.form-check-label {
		color: #1ee0ac
	}

	.was-validated .form-check-input:valid~.valid-feedback,
	.was-validated .form-check-input:valid~.valid-tooltip,
	.form-check-input.is-valid~.valid-feedback,
	.form-check-input.is-valid~.valid-tooltip {
		display: block
	}

	.was-validated .custom-control-input:valid~.custom-control-label,
	.custom-control-input.is-valid~.custom-control-label {
		color: #1ee0ac
	}

	.was-validated .custom-control-input:valid~.custom-control-label::before,
	.custom-control-input.is-valid~.custom-control-label::before {
		border-color: #1ee0ac
	}

	.was-validated .custom-control-input:valid:checked~.custom-control-label::before,
	.custom-control-input.is-valid:checked~.custom-control-label::before {
		border-color: #4ae7bd;
		background-color: #4ae7bd
	}

	.was-validated .custom-control-input:valid:focus~.custom-control-label::before,
	.custom-control-input.is-valid:focus~.custom-control-label::before {
		box-shadow: 0 0 0 .2rem rgba(30, 224, 172, 0.25)
	}

	.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,
	.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {
		border-color: #1ee0ac
	}

	.was-validated .custom-file-input:valid~.custom-file-label,
	.custom-file-input.is-valid~.custom-file-label {
		border-color: #1ee0ac
	}

	.was-validated .custom-file-input:valid:focus~.custom-file-label,
	.custom-file-input.is-valid:focus~.custom-file-label {
		border-color: #1ee0ac;
		box-shadow: 0 0 0 .2rem rgba(30, 224, 172, 0.25)
	}

	.invalid-feedback {
		display: none;
		width: 100%;
		margin-top: .25rem;
		font-size: 80%;
		color: #e85347
	}

	.invalid-tooltip {
		position: absolute;
		top: 100%;
		left: 0;
		z-index: 5;
		display: none;
		max-width: 100%;
		padding: .25rem .75rem;
		margin-top: .1rem;
		font-size: .8125rem;
		line-height: 1.5;
		color: #fff;
		background-color: rgba(232, 83, 71, 0.9);
		border-radius: 3px
	}

	.form-row>.col>.invalid-tooltip,
	.form-row>[class*="col-"]>.invalid-tooltip {
		left: 5px
	}

	.was-validated :invalid~.invalid-feedback,
	.was-validated :invalid~.invalid-tooltip,
	.is-invalid~.invalid-feedback,
	.is-invalid~.invalid-tooltip {
		display: block
	}

	.was-validated .form-control:invalid,
	.was-validated div.dataTables_wrapper div.dataTables_filter input:invalid,
	div.dataTables_wrapper div.dataTables_filter .was-validated input:invalid,
	.was-validated .dual-listbox .dual-listbox__search:invalid,
	.dual-listbox .was-validated .dual-listbox__search:invalid,
	.form-control.is-invalid,
	div.dataTables_wrapper div.dataTables_filter input.is-invalid,
	.dual-listbox .is-invalid.dual-listbox__search {
		border-color: #e85347;
		padding-right: 2.125rem;
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23e85347' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e85347' stroke='none'/%3e%3c/svg%3e");
		background-repeat: no-repeat;
		background-position: right add(.3125rem, .21875rem) center;
		background-size: add(.625rem, .4375rem) add(.625rem, .4375rem)
	}

	.was-validated .form-control:invalid:focus,
	.was-validated div.dataTables_wrapper div.dataTables_filter input:invalid:focus,
	div.dataTables_wrapper div.dataTables_filter .was-validated input:invalid:focus,
	.was-validated .dual-listbox .dual-listbox__search:invalid:focus,
	.dual-listbox .was-validated .dual-listbox__search:invalid:focus,
	.form-control.is-invalid:focus,
	div.dataTables_wrapper div.dataTables_filter input.is-invalid:focus,
	.dual-listbox .is-invalid.dual-listbox__search:focus {
		border-color: #e85347;
		box-shadow: 0 0 0 .2rem rgba(232, 83, 71, 0.25)
	}

	.was-validated textarea.form-control:invalid,
	.was-validated .dual-listbox textarea.dual-listbox__search:invalid,
	.dual-listbox .was-validated textarea.dual-listbox__search:invalid,
	textarea.form-control.is-invalid,
	.dual-listbox textarea.is-invalid.dual-listbox__search {
		padding-right: 2.125rem;
		background-position: top add(.3125rem, .21875rem) right add(.3125rem, .21875rem)
	}

	.was-validated .custom-select:invalid,
	.was-validated div.dataTables_wrapper div.dataTables_length select:invalid,
	div.dataTables_wrapper div.dataTables_length .was-validated select:invalid,
	.custom-select.is-invalid,
	div.dataTables_wrapper div.dataTables_length select.is-invalid {
		border-color: #e85347;
		padding-right: calc(.75em + 2.65625rem);
		background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 1rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23e85347' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e85347' stroke='none'/%3e%3c/svg%3e") center right 2rem/add(.625rem, .4375rem) add(.625rem, .4375rem) no-repeat
	}

	.was-validated .custom-select:invalid:focus,
	.was-validated div.dataTables_wrapper div.dataTables_length select:invalid:focus,
	div.dataTables_wrapper div.dataTables_length .was-validated select:invalid:focus,
	.custom-select.is-invalid:focus,
	div.dataTables_wrapper div.dataTables_length select.is-invalid:focus {
		border-color: #e85347;
		box-shadow: 0 0 0 .2rem rgba(232, 83, 71, 0.25)
	}

	.was-validated .form-check-input:invalid~.form-check-label,
	.form-check-input.is-invalid~.form-check-label {
		color: #e85347
	}

	.was-validated .form-check-input:invalid~.invalid-feedback,
	.was-validated .form-check-input:invalid~.invalid-tooltip,
	.form-check-input.is-invalid~.invalid-feedback,
	.form-check-input.is-invalid~.invalid-tooltip {
		display: block
	}

	.was-validated .custom-control-input:invalid~.custom-control-label,
	.custom-control-input.is-invalid~.custom-control-label {
		color: #e85347
	}

	.was-validated .custom-control-input:invalid~.custom-control-label::before,
	.custom-control-input.is-invalid~.custom-control-label::before {
		border-color: #e85347
	}

	.was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
	.custom-control-input.is-invalid:checked~.custom-control-label::before {
		border-color: #ee7d74;
		background-color: #ee7d74
	}

	.was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
	.custom-control-input.is-invalid:focus~.custom-control-label::before {
		box-shadow: 0 0 0 .2rem rgba(232, 83, 71, 0.25)
	}

	.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,
	.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {
		border-color: #e85347
	}

	.was-validated .custom-file-input:invalid~.custom-file-label,
	.custom-file-input.is-invalid~.custom-file-label {
		border-color: #e85347
	}

	.was-validated .custom-file-input:invalid:focus~.custom-file-label,
	.custom-file-input.is-invalid:focus~.custom-file-label {
		border-color: #e85347;
		box-shadow: 0 0 0 .2rem rgba(232, 83, 71, 0.25)
	}

	.form-inline {
		display: flex;
		flex-flow: row wrap;
		align-items: center
	}

	.form-inline .form-check {
		width: 100%
	}

	@media (min-width: 576px) {
		.form-inline label {
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 0
		}

		.form-inline .form-group {
			display: flex;
			flex: 0 0 auto;
			flex-flow: row wrap;
			align-items: center;
			margin-bottom: 0
		}

		.form-inline .form-control,
		.form-inline div.dataTables_wrapper div.dataTables_filter input,
		div.dataTables_wrapper div.dataTables_filter .form-inline input,
		.form-inline .dual-listbox .dual-listbox__search,
		.dual-listbox .form-inline .dual-listbox__search {
			display: inline-block;
			width: auto;
			vertical-align: middle
		}

		.form-inline .form-control-plaintext {
			display: inline-block
		}

		.form-inline .input-group,
		.form-inline .custom-select,
		.form-inline div.dataTables_wrapper div.dataTables_length select,
		div.dataTables_wrapper div.dataTables_length .form-inline select {
			width: auto
		}

		.form-inline .form-check {
			display: flex;
			align-items: center;
			justify-content: center;
			width: auto;
			padding-left: 0
		}

		.form-inline .form-check-input {
			position: relative;
			flex-shrink: 0;
			margin-top: 0;
			margin-right: .25rem;
			margin-left: 0
		}

		.form-inline .custom-control {
			align-items: center;
			justify-content: center
		}

		.form-inline .custom-control-label {
			margin-bottom: 0
		}
	}

	.btn,
	.dual-listbox .dual-listbox__button {
		display: inline-block;
		font-family: Nunito, sans-serif;
		font-weight: 700;
		color: #526484;
		text-align: center;
		vertical-align: middle;
		user-select: none;
		background-color: transparent;
		border: 1px solid transparent;
		padding: .4375rem 1.125rem;
		font-size: .8125rem;
		line-height: 1.25rem;
		border-radius: 4px;
		transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
	}

	@media (prefers-reduced-motion: reduce) {

		.btn,
		.dual-listbox .dual-listbox__button {
			transition: none
		}
	}

	.btn:hover,
	.dual-listbox .dual-listbox__button:hover {
		color: #526484;
		text-decoration: none
	}

	.btn:focus,
	.dual-listbox .dual-listbox__button:focus,
	.btn.focus,
	.dual-listbox .focus.dual-listbox__button {
		outline: 0;
		box-shadow: 0 0 0 3px rgba(101, 118, 255, 0.1)
	}

	.btn.disabled,
	.dual-listbox .disabled.dual-listbox__button,
	.btn:disabled,
	.dual-listbox .dual-listbox__button:disabled {
		opacity: .5
	}

	.btn:not(:disabled):not(.disabled),
	.dual-listbox .dual-listbox__button:not(:disabled):not(.disabled) {
		cursor: pointer
	}

	a.btn.disabled,
	.dual-listbox a.disabled.dual-listbox__button,
	fieldset:disabled a.btn,
	fieldset:disabled .dual-listbox a.dual-listbox__button,
	.dual-listbox fieldset:disabled a.dual-listbox__button {
		pointer-events: none
	}

	.btn-primary {
		color: #fff;
		background-color: #6576ff;
		border-color: #6576ff
	}

	.btn-primary:hover {
		color: #fff;
		background-color: #3f54ff;
		border-color: #3249ff
	}

	.btn-primary:focus,
	.btn-primary.focus {
		color: #fff;
		background-color: #3f54ff;
		border-color: #3249ff;
		box-shadow: 0 0 0 .2rem rgba(124, 139, 255, 0.5)
	}

	.btn-primary.disabled,
	.btn-primary:disabled {
		color: #fff;
		background-color: #6576ff;
		border-color: #6576ff
	}

	.btn-primary:not(:disabled):not(.disabled):active,
	.btn-primary:not(:disabled):not(.disabled).active,
	.show>.btn-primary.dropdown-toggle {
		color: #fff;
		background-color: #3249ff;
		border-color: #253dff
	}

	.btn-primary:not(:disabled):not(.disabled):active:focus,
	.btn-primary:not(:disabled):not(.disabled).active:focus,
	.show>.btn-primary.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(124, 139, 255, 0.5)
	}

	.btn-secondary {
		color: #fff;
		background-color: #364a63;
		border-color: #364a63
	}

	.btn-secondary:hover {
		color: #fff;
		background-color: #29384a;
		border-color: #243142
	}

	.btn-secondary:focus,
	.btn-secondary.focus {
		color: #fff;
		background-color: #29384a;
		border-color: #243142;
		box-shadow: 0 0 0 .2rem rgba(84, 101, 122, 0.5)
	}

	.btn-secondary.disabled,
	.btn-secondary:disabled {
		color: #fff;
		background-color: #364a63;
		border-color: #364a63
	}

	.btn-secondary:not(:disabled):not(.disabled):active,
	.btn-secondary:not(:disabled):not(.disabled).active,
	.show>.btn-secondary.dropdown-toggle {
		color: #fff;
		background-color: #243142;
		border-color: #202b3a
	}

	.btn-secondary:not(:disabled):not(.disabled):active:focus,
	.btn-secondary:not(:disabled):not(.disabled).active:focus,
	.show>.btn-secondary.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(84, 101, 122, 0.5)
	}

	.btn-success {
		color: #fff;
		background-color: #1ee0ac;
		border-color: #1ee0ac
	}

	.btn-success:hover {
		color: #fff;
		background-color: #19be92;
		border-color: #18b389
	}

	.btn-success:focus,
	.btn-success.focus {
		color: #fff;
		background-color: #19be92;
		border-color: #18b389;
		box-shadow: 0 0 0 .2rem rgba(64, 229, 184, 0.5)
	}

	.btn-success.disabled,
	.btn-success:disabled {
		color: #fff;
		background-color: #1ee0ac;
		border-color: #1ee0ac
	}

	.btn-success:not(:disabled):not(.disabled):active,
	.btn-success:not(:disabled):not(.disabled).active,
	.show>.btn-success.dropdown-toggle {
		color: #fff;
		background-color: #18b389;
		border-color: #16a881
	}

	.btn-success:not(:disabled):not(.disabled):active:focus,
	.btn-success:not(:disabled):not(.disabled).active:focus,
	.show>.btn-success.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(64, 229, 184, 0.5)
	}

	.btn-info {
		color: #fff;
		background-color: #09c2de;
		border-color: #09c2de
	}

	.btn-info:hover {
		color: #fff;
		background-color: #08a2b9;
		border-color: #0797ad
	}

	.btn-info:focus,
	.btn-info.focus {
		color: #fff;
		background-color: #08a2b9;
		border-color: #0797ad;
		box-shadow: 0 0 0 .2rem rgba(46, 203, 227, 0.5)
	}

	.btn-info.disabled,
	.btn-info:disabled {
		color: #fff;
		background-color: #09c2de;
		border-color: #09c2de
	}

	.btn-info:not(:disabled):not(.disabled):active,
	.btn-info:not(:disabled):not(.disabled).active,
	.show>.btn-info.dropdown-toggle {
		color: #fff;
		background-color: #0797ad;
		border-color: #078ca1
	}

	.btn-info:not(:disabled):not(.disabled):active:focus,
	.btn-info:not(:disabled):not(.disabled).active:focus,
	.show>.btn-info.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(46, 203, 227, 0.5)
	}

	.btn-warning {
		color: #fff;
		background-color: #f4bd0e;
		border-color: #f4bd0e
	}

	.btn-warning:hover {
		color: #fff;
		background-color: #d2a20a;
		border-color: #c69909
	}

	.btn-warning:focus,
	.btn-warning.focus {
		color: #fff;
		background-color: #d2a20a;
		border-color: #c69909;
		box-shadow: 0 0 0 .2rem rgba(246, 199, 50, 0.5)
	}

	.btn-warning.disabled,
	.btn-warning:disabled {
		color: #fff;
		background-color: #f4bd0e;
		border-color: #f4bd0e
	}

	.btn-warning:not(:disabled):not(.disabled):active,
	.btn-warning:not(:disabled):not(.disabled).active,
	.show>.btn-warning.dropdown-toggle {
		color: #fff;
		background-color: #c69909;
		border-color: #ba8f08
	}

	.btn-warning:not(:disabled):not(.disabled):active:focus,
	.btn-warning:not(:disabled):not(.disabled).active:focus,
	.show>.btn-warning.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(246, 199, 50, 0.5)
	}

	.btn-danger {
		color: #fff;
		background-color: #e85347;
		border-color: #e85347
	}

	.btn-danger:hover {
		color: #fff;
		background-color: #e43325;
		border-color: #e02b1c
	}

	.btn-danger:focus,
	.btn-danger.focus {
		color: #fff;
		background-color: #e43325;
		border-color: #e02b1c;
		box-shadow: 0 0 0 .2rem rgba(235, 109, 99, 0.5)
	}

	.btn-danger.disabled,
	.btn-danger:disabled {
		color: #fff;
		background-color: #e85347;
		border-color: #e85347
	}

	.btn-danger:not(:disabled):not(.disabled):active,
	.btn-danger:not(:disabled):not(.disabled).active,
	.show>.btn-danger.dropdown-toggle {
		color: #fff;
		background-color: #e02b1c;
		border-color: #d5281b
	}

	.btn-danger:not(:disabled):not(.disabled):active:focus,
	.btn-danger:not(:disabled):not(.disabled).active:focus,
	.show>.btn-danger.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(235, 109, 99, 0.5)
	}

	.btn-dark {
		color: #fff;
		background-color: #1c2b46;
		border-color: #1c2b46
	}

	.btn-dark:hover {
		color: #fff;
		background-color: #111a2b;
		border-color: #0d1522
	}

	.btn-dark:focus,
	.btn-dark.focus {
		color: #fff;
		background-color: #111a2b;
		border-color: #0d1522;
		box-shadow: 0 0 0 .2rem rgba(62, 75, 98, 0.5)
	}

	.btn-dark.disabled,
	.btn-dark:disabled {
		color: #fff;
		background-color: #1c2b46;
		border-color: #1c2b46
	}

	.btn-dark:not(:disabled):not(.disabled):active,
	.btn-dark:not(:disabled):not(.disabled).active,
	.show>.btn-dark.dropdown-toggle {
		color: #fff;
		background-color: #0d1522;
		border-color: #0a0f18
	}

	.btn-dark:not(:disabled):not(.disabled):active:focus,
	.btn-dark:not(:disabled):not(.disabled).active:focus,
	.show>.btn-dark.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(62, 75, 98, 0.5)
	}

	.btn-gray {
		color: #fff;
		background-color: #8091a7;
		border-color: #8091a7
	}

	.btn-gray:hover {
		color: #fff;
		background-color: #697d97;
		border-color: #647790
	}

	.btn-gray:focus,
	.btn-gray.focus {
		color: #fff;
		background-color: #697d97;
		border-color: #647790;
		box-shadow: 0 0 0 .2rem rgba(147, 162, 180, 0.5)
	}

	.btn-gray.disabled,
	.btn-gray:disabled {
		color: #fff;
		background-color: #8091a7;
		border-color: #8091a7
	}

	.btn-gray:not(:disabled):not(.disabled):active,
	.btn-gray:not(:disabled):not(.disabled).active,
	.show>.btn-gray.dropdown-toggle {
		color: #fff;
		background-color: #647790;
		border-color: #5f7189
	}

	.btn-gray:not(:disabled):not(.disabled):active:focus,
	.btn-gray:not(:disabled):not(.disabled).active:focus,
	.show>.btn-gray.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(147, 162, 180, 0.5)
	}

	.btn-light,
	.dual-listbox .dual-listbox__button {
		color: #101924;
		background-color: #e5e9f2;
		border-color: #e5e9f2
	}

	.btn-light:hover,
	.dual-listbox .dual-listbox__button:hover {
		color: #101924;
		background-color: #ccd3e5;
		border-color: #c3cce1
	}

	.btn-light:focus,
	.dual-listbox .dual-listbox__button:focus,
	.btn-light.focus,
	.dual-listbox .focus.dual-listbox__button {
		color: #101924;
		background-color: #ccd3e5;
		border-color: #c3cce1;
		box-shadow: 0 0 0 .2rem rgba(197, 202, 211, 0.5)
	}

	.btn-light.disabled,
	.dual-listbox .disabled.dual-listbox__button,
	.btn-light:disabled,
	.dual-listbox .dual-listbox__button:disabled {
		color: #101924;
		background-color: #e5e9f2;
		border-color: #e5e9f2
	}

	.btn-light:not(:disabled):not(.disabled):active,
	.dual-listbox .dual-listbox__button:not(:disabled):not(.disabled):active,
	.btn-light:not(:disabled):not(.disabled).active,
	.dual-listbox .dual-listbox__button:not(:disabled):not(.disabled).active,
	.show>.btn-light.dropdown-toggle,
	.dual-listbox .show>.dropdown-toggle.dual-listbox__button {
		color: #101924;
		background-color: #c3cce1;
		border-color: #bbc5dd
	}

	.btn-light:not(:disabled):not(.disabled):active:focus,
	.dual-listbox .dual-listbox__button:not(:disabled):not(.disabled):active:focus,
	.btn-light:not(:disabled):not(.disabled).active:focus,
	.dual-listbox .dual-listbox__button:not(:disabled):not(.disabled).active:focus,
	.show>.btn-light.dropdown-toggle:focus,
	.dual-listbox .show>.dropdown-toggle.dual-listbox__button:focus {
		box-shadow: 0 0 0 .2rem rgba(197, 202, 211, 0.5)
	}

	.btn-lighter {
		color: #101924;
		background-color: #f5f6fa;
		border-color: #f5f6fa
	}

	.btn-lighter:hover {
		color: #101924;
		background-color: #dcdfed;
		border-color: #d3d7e9
	}

	.btn-lighter:focus,
	.btn-lighter.focus {
		color: #101924;
		background-color: #dcdfed;
		border-color: #d3d7e9;
		box-shadow: 0 0 0 .2rem rgba(211, 213, 218, 0.5)
	}

	.btn-lighter.disabled,
	.btn-lighter:disabled {
		color: #101924;
		background-color: #f5f6fa;
		border-color: #f5f6fa
	}

	.btn-lighter:not(:disabled):not(.disabled):active,
	.btn-lighter:not(:disabled):not(.disabled).active,
	.show>.btn-lighter.dropdown-toggle {
		color: #101924;
		background-color: #d3d7e9;
		border-color: #cbd0e5
	}

	.btn-lighter:not(:disabled):not(.disabled):active:focus,
	.btn-lighter:not(:disabled):not(.disabled).active:focus,
	.show>.btn-lighter.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(211, 213, 218, 0.5)
	}

	.btn-outline-primary {
		color: #6576ff;
		border-color: #6576ff
	}

	.btn-outline-primary:hover {
		color: #fff;
		background-color: #6576ff;
		border-color: #6576ff
	}

	.btn-outline-primary:focus,
	.btn-outline-primary.focus {
		box-shadow: 0 0 0 .2rem rgba(101, 118, 255, 0.5)
	}

	.btn-outline-primary.disabled,
	.btn-outline-primary:disabled {
		color: #6576ff;
		background-color: transparent
	}

	.btn-outline-primary:not(:disabled):not(.disabled):active,
	.btn-outline-primary:not(:disabled):not(.disabled).active,
	.show>.btn-outline-primary.dropdown-toggle {
		color: #fff;
		background-color: #6576ff;
		border-color: #6576ff
	}

	.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
	.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-primary.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(101, 118, 255, 0.5)
	}

	.btn-outline-secondary {
		color: #364a63;
		border-color: #364a63
	}

	.btn-outline-secondary:hover {
		color: #fff;
		background-color: #364a63;
		border-color: #364a63
	}

	.btn-outline-secondary:focus,
	.btn-outline-secondary.focus {
		box-shadow: 0 0 0 .2rem rgba(54, 74, 99, 0.5)
	}

	.btn-outline-secondary.disabled,
	.btn-outline-secondary:disabled {
		color: #364a63;
		background-color: transparent
	}

	.btn-outline-secondary:not(:disabled):not(.disabled):active,
	.btn-outline-secondary:not(:disabled):not(.disabled).active,
	.show>.btn-outline-secondary.dropdown-toggle {
		color: #fff;
		background-color: #364a63;
		border-color: #364a63
	}

	.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
	.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-secondary.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(54, 74, 99, 0.5)
	}

	.btn-outline-success {
		color: #1ee0ac;
		border-color: #1ee0ac
	}

	.btn-outline-success:hover {
		color: #fff;
		background-color: #1ee0ac;
		border-color: #1ee0ac
	}

	.btn-outline-success:focus,
	.btn-outline-success.focus {
		box-shadow: 0 0 0 .2rem rgba(30, 224, 172, 0.5)
	}

	.btn-outline-success.disabled,
	.btn-outline-success:disabled {
		color: #1ee0ac;
		background-color: transparent
	}

	.btn-outline-success:not(:disabled):not(.disabled):active,
	.btn-outline-success:not(:disabled):not(.disabled).active,
	.show>.btn-outline-success.dropdown-toggle {
		color: #fff;
		background-color: #1ee0ac;
		border-color: #1ee0ac
	}

	.btn-outline-success:not(:disabled):not(.disabled):active:focus,
	.btn-outline-success:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-success.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(30, 224, 172, 0.5)
	}

	.btn-outline-info {
		color: #09c2de;
		border-color: #09c2de
	}

	.btn-outline-info:hover {
		color: #fff;
		background-color: #09c2de;
		border-color: #09c2de
	}

	.btn-outline-info:focus,
	.btn-outline-info.focus {
		box-shadow: 0 0 0 .2rem rgba(9, 194, 222, 0.5)
	}

	.btn-outline-info.disabled,
	.btn-outline-info:disabled {
		color: #09c2de;
		background-color: transparent
	}

	.btn-outline-info:not(:disabled):not(.disabled):active,
	.btn-outline-info:not(:disabled):not(.disabled).active,
	.show>.btn-outline-info.dropdown-toggle {
		color: #fff;
		background-color: #09c2de;
		border-color: #09c2de
	}

	.btn-outline-info:not(:disabled):not(.disabled):active:focus,
	.btn-outline-info:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-info.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(9, 194, 222, 0.5)
	}

	.btn-outline-warning {
		color: #f4bd0e;
		border-color: #f4bd0e
	}

	.btn-outline-warning:hover {
		color: #fff;
		background-color: #f4bd0e;
		border-color: #f4bd0e
	}

	.btn-outline-warning:focus,
	.btn-outline-warning.focus {
		box-shadow: 0 0 0 .2rem rgba(244, 189, 14, 0.5)
	}

	.btn-outline-warning.disabled,
	.btn-outline-warning:disabled {
		color: #f4bd0e;
		background-color: transparent
	}

	.btn-outline-warning:not(:disabled):not(.disabled):active,
	.btn-outline-warning:not(:disabled):not(.disabled).active,
	.show>.btn-outline-warning.dropdown-toggle {
		color: #fff;
		background-color: #f4bd0e;
		border-color: #f4bd0e
	}

	.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
	.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-warning.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(244, 189, 14, 0.5)
	}

	.btn-outline-danger {
		color: #e85347;
		border-color: #e85347
	}

	.btn-outline-danger:hover {
		color: #fff;
		background-color: #e85347;
		border-color: #e85347
	}

	.btn-outline-danger:focus,
	.btn-outline-danger.focus {
		box-shadow: 0 0 0 .2rem rgba(232, 83, 71, 0.5)
	}

	.btn-outline-danger.disabled,
	.btn-outline-danger:disabled {
		color: #e85347;
		background-color: transparent
	}

	.btn-outline-danger:not(:disabled):not(.disabled):active,
	.btn-outline-danger:not(:disabled):not(.disabled).active,
	.show>.btn-outline-danger.dropdown-toggle {
		color: #fff;
		background-color: #e85347;
		border-color: #e85347
	}

	.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
	.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-danger.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(232, 83, 71, 0.5)
	}

	.btn-outline-dark {
		color: #1c2b46;
		border-color: #1c2b46
	}

	.btn-outline-dark:hover {
		color: #fff;
		background-color: #1c2b46;
		border-color: #1c2b46
	}

	.btn-outline-dark:focus,
	.btn-outline-dark.focus {
		box-shadow: 0 0 0 .2rem rgba(28, 43, 70, 0.5)
	}

	.btn-outline-dark.disabled,
	.btn-outline-dark:disabled {
		color: #1c2b46;
		background-color: transparent
	}

	.btn-outline-dark:not(:disabled):not(.disabled):active,
	.btn-outline-dark:not(:disabled):not(.disabled).active,
	.show>.btn-outline-dark.dropdown-toggle {
		color: #fff;
		background-color: #1c2b46;
		border-color: #1c2b46
	}

	.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
	.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-dark.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(28, 43, 70, 0.5)
	}

	.btn-outline-gray {
		color: #8091a7;
		border-color: #8091a7
	}

	.btn-outline-gray:hover {
		color: #fff;
		background-color: #8091a7;
		border-color: #8091a7
	}

	.btn-outline-gray:focus,
	.btn-outline-gray.focus {
		box-shadow: 0 0 0 .2rem rgba(128, 145, 167, 0.5)
	}

	.btn-outline-gray.disabled,
	.btn-outline-gray:disabled {
		color: #8091a7;
		background-color: transparent
	}

	.btn-outline-gray:not(:disabled):not(.disabled):active,
	.btn-outline-gray:not(:disabled):not(.disabled).active,
	.show>.btn-outline-gray.dropdown-toggle {
		color: #fff;
		background-color: #8091a7;
		border-color: #8091a7
	}

	.btn-outline-gray:not(:disabled):not(.disabled):active:focus,
	.btn-outline-gray:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-gray.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(128, 145, 167, 0.5)
	}

	.btn-outline-light,
	.dt-buttons .btn-secondary {
		color: #e5e9f2;
		border-color: #e5e9f2
	}

	.btn-outline-light:hover,
	.dt-buttons .btn-secondary:hover {
		color: #101924;
		background-color: #e5e9f2;
		border-color: #e5e9f2
	}

	.btn-outline-light:focus,
	.dt-buttons .btn-secondary:focus,
	.btn-outline-light.focus,
	.dt-buttons .focus.btn-secondary {
		box-shadow: 0 0 0 .2rem rgba(229, 233, 242, 0.5)
	}

	.btn-outline-light.disabled,
	.dt-buttons .disabled.btn-secondary,
	.btn-outline-light:disabled,
	.dt-buttons .btn-secondary:disabled {
		color: #e5e9f2;
		background-color: transparent
	}

	.btn-outline-light:not(:disabled):not(.disabled):active,
	.dt-buttons .btn-secondary:not(:disabled):not(.disabled):active,
	.btn-outline-light:not(:disabled):not(.disabled).active,
	.dt-buttons .btn-secondary:not(:disabled):not(.disabled).active,
	.show>.btn-outline-light.dropdown-toggle,
	.dt-buttons .show>.dropdown-toggle.btn-secondary {
		color: #101924;
		background-color: #e5e9f2;
		border-color: #e5e9f2
	}

	.btn-outline-light:not(:disabled):not(.disabled):active:focus,
	.dt-buttons .btn-secondary:not(:disabled):not(.disabled):active:focus,
	.btn-outline-light:not(:disabled):not(.disabled).active:focus,
	.dt-buttons .btn-secondary:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-light.dropdown-toggle:focus,
	.dt-buttons .show>.dropdown-toggle.btn-secondary:focus {
		box-shadow: 0 0 0 .2rem rgba(229, 233, 242, 0.5)
	}

	.btn-outline-lighter {
		color: #f5f6fa;
		border-color: #f5f6fa
	}

	.btn-outline-lighter:hover {
		color: #101924;
		background-color: #f5f6fa;
		border-color: #f5f6fa
	}

	.btn-outline-lighter:focus,
	.btn-outline-lighter.focus {
		box-shadow: 0 0 0 .2rem rgba(245, 246, 250, 0.5)
	}

	.btn-outline-lighter.disabled,
	.btn-outline-lighter:disabled {
		color: #f5f6fa;
		background-color: transparent
	}

	.btn-outline-lighter:not(:disabled):not(.disabled):active,
	.btn-outline-lighter:not(:disabled):not(.disabled).active,
	.show>.btn-outline-lighter.dropdown-toggle {
		color: #101924;
		background-color: #f5f6fa;
		border-color: #f5f6fa
	}

	.btn-outline-lighter:not(:disabled):not(.disabled):active:focus,
	.btn-outline-lighter:not(:disabled):not(.disabled).active:focus,
	.show>.btn-outline-lighter.dropdown-toggle:focus {
		box-shadow: 0 0 0 .2rem rgba(245, 246, 250, 0.5)
	}

	.btn-link {
		font-weight: 400;
		color: #798bff;
		text-decoration: none
	}

	.btn-link:hover {
		color: #465fff;
		text-decoration: underline
	}

	.btn-link:focus,
	.btn-link.focus {
		text-decoration: underline
	}

	.btn-link:disabled,
	.btn-link.disabled {
		color: #f5f6fa;
		pointer-events: none
	}

	.btn-lg,
	.btn-group-lg>.btn,
	.dual-listbox .btn-group-lg>.dual-listbox__button {
		padding: .6875rem 1.5rem;
		font-size: .9375rem;
		line-height: 1.25rem;
		border-radius: 5px
	}

	.btn-sm,
	.btn-group-sm>.btn,
	.dual-listbox .btn-group-sm>.dual-listbox__button {
		padding: .25rem .75rem;
		font-size: .75rem;
		line-height: 1.25rem;
		border-radius: 3px
	}

	.btn-block {
		display: block;
		width: 100%
	}

	.btn-block+.btn-block {
		margin-top: .5rem
	}

	input[type="submit"].btn-block,
	input[type="reset"].btn-block,
	input[type="button"].btn-block {
		width: 100%
	}

	.fade {
		transition: opacity 0.15s linear
	}

	@media (prefers-reduced-motion: reduce) {
		.fade {
			transition: none
		}
	}

	.fade:not(.show) {
		opacity: 0
	}

	.collapse:not(.show) {
		display: none
	}

	.collapsing {
		position: relative;
		height: 0;
		overflow: hidden;
		transition: height 0.35s ease
	}

	@media (prefers-reduced-motion: reduce) {
		.collapsing {
			transition: none
		}
	}

	.dropup,
	.dropright,
	.dropdown,
	.dropleft {
		position: relative
	}

	.dropdown-toggle {
		white-space: nowrap
	}

	.dropdown-toggle::after {
		display: inline-block;
		margin-left: .255em;
		vertical-align: .255em;
		content: "";
		border-top: .3em solid;
		border-right: .3em solid transparent;
		border-bottom: 0;
		border-left: .3em solid transparent
	}

	.dropdown-toggle:empty::after {
		margin-left: 0
	}

	.dropdown-menu {
		position: absolute;
		top: 100%;
		left: 0;
		z-index: 1000;
		display: none;
		float: left;
		text-align: left;
		min-width: 180px;
		padding: 0 0;
		margin: .125rem 0 0;
		font-size: .8125rem;
		color: #526484;
		list-style: none;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #e5e9f2;
		border-radius: 4px
	}

	.dropdown-menu-left {
		right: auto;
		left: 0
	}

	.dropdown-menu-right {
		right: 0;
		left: auto
	}

	@media (min-width: 576px) {
		.dropdown-menu-sm-left {
			right: auto;
			left: 0
		}

		.dropdown-menu-sm-right {
			right: 0;
			left: auto
		}
	}

	@media (min-width: 768px) {
		.dropdown-menu-md-left {
			right: auto;
			left: 0
		}

		.dropdown-menu-md-right {
			right: 0;
			left: auto
		}
	}

	@media (min-width: 992px) {
		.dropdown-menu-lg-left {
			right: auto;
			left: 0
		}

		.dropdown-menu-lg-right {
			right: 0;
			left: auto
		}
	}

	@media (min-width: 1200px) {
		.dropdown-menu-xl-left {
			right: auto;
			left: 0
		}

		.dropdown-menu-xl-right {
			right: 0;
			left: auto
		}
	}

	@media (min-width: 1540px) {
		.dropdown-menu-xxl-left {
			right: auto;
			left: 0
		}

		.dropdown-menu-xxl-right {
			right: 0;
			left: auto
		}
	}

	.dropup .dropdown-menu {
		top: auto;
		bottom: 100%;
		margin-top: 0;
		margin-bottom: .125rem
	}

	.dropup .dropdown-toggle::after {
		display: inline-block;
		margin-left: .255em;
		vertical-align: .255em;
		content: "";
		border-top: 0;
		border-right: .3em solid transparent;
		border-bottom: .3em solid;
		border-left: .3em solid transparent
	}

	.dropup .dropdown-toggle:empty::after {
		margin-left: 0
	}

	.dropright .dropdown-menu {
		top: 0;
		margin-top: 0;
		right: auto;
		left: 100%;
		margin-left: .125rem
	}

	.dropright .dropdown-toggle::after {
		display: inline-block;
		margin-left: .255em;
		vertical-align: .255em;
		content: "";
		border-top: .3em solid transparent;
		border-right: 0;
		border-bottom: .3em solid transparent;
		border-left: .3em solid
	}

	.dropright .dropdown-toggle:empty::after {
		margin-left: 0
	}

	.dropright .dropdown-toggle::after {
		vertical-align: 0
	}

	.dropleft .dropdown-menu {
		top: 0;
		margin-top: 0;
		right: 100%;
		left: auto;
		margin-right: .125rem
	}

	.dropleft .dropdown-toggle::after {
		display: inline-block;
		margin-left: .255em;
		vertical-align: .255em;
		content: ""
	}

	.dropleft .dropdown-toggle::after {
		display: none
	}

	.dropleft .dropdown-toggle::before {
		display: inline-block;
		margin-right: .255em;
		vertical-align: .255em;
		content: "";
		border-top: .3em solid transparent;
		border-right: .3em solid;
		border-bottom: .3em solid transparent
	}

	.dropleft .dropdown-toggle:empty::after {
		margin-left: 0
	}

	.dropleft .dropdown-toggle::before {
		vertical-align: 0
	}

	.dropdown-menu[x-placement^="top"],
	.dropdown-menu[x-placement^="right"],
	.dropdown-menu[x-placement^="bottom"],
	.dropdown-menu[x-placement^="left"] {
		right: auto;
		bottom: auto
	}

	.dropdown-divider {
		height: 0;
		margin: 12px 0;
		overflow: hidden;
		border-top: 1px solid #e5e9f2
	}

	.dropdown-item {
		display: block;
		width: 100%;
		padding: 8px 14px;
		clear: both;
		font-weight: 400;
		color: #364a63;
		text-align: inherit;
		white-space: nowrap;
		background-color: transparent;
		border: 0
	}

	.dropdown-item:first-child {
		border-top-left-radius: calc(4px - 1px);
		border-top-right-radius: calc(4px - 1px)
	}

	.dropdown-item:last-child {
		border-bottom-right-radius: calc(4px - 1px);
		border-bottom-left-radius: calc(4px - 1px)
	}

	.dropdown-item:hover,
	.dropdown-item:focus {
		color: #6576ff;
		text-decoration: none;
		background-color: #ebeef2
	}

	.dropdown-item.active,
	.dropdown-item:active {
		color: #6576ff;
		text-decoration: none;
		background-color: #dbdfea
	}

	.dropdown-item.disabled,
	.dropdown-item:disabled {
		color: #ebeef2;
		pointer-events: none;
		background-color: transparent
	}

	.dropdown-menu.show {
		display: block
	}

	.dropdown-header {
		display: block;
		padding: 0 14px;
		margin-bottom: 0;
		font-size: .75rem;
		color: #8091a7;
		white-space: nowrap
	}

	.dropdown-item-text {
		display: block;
		padding: 8px 14px;
		color: #364a63
	}

	.btn-group,
	.btn-group-vertical {
		position: relative;
		display: inline-flex;
		vertical-align: middle
	}

	.btn-group>.btn,
	.dual-listbox .btn-group>.dual-listbox__button,
	.btn-group-vertical>.btn,
	.dual-listbox .btn-group-vertical>.dual-listbox__button {
		position: relative;
		flex: 1 1 auto
	}

	.btn-group>.btn:hover,
	.dual-listbox .btn-group>.dual-listbox__button:hover,
	.btn-group-vertical>.btn:hover,
	.dual-listbox .btn-group-vertical>.dual-listbox__button:hover {
		z-index: 1
	}

	.btn-group>.btn:focus,
	.dual-listbox .btn-group>.dual-listbox__button:focus,
	.btn-group>.btn:active,
	.dual-listbox .btn-group>.dual-listbox__button:active,
	.btn-group>.btn.active,
	.dual-listbox .btn-group>.active.dual-listbox__button,
	.btn-group-vertical>.btn:focus,
	.dual-listbox .btn-group-vertical>.dual-listbox__button:focus,
	.btn-group-vertical>.btn:active,
	.dual-listbox .btn-group-vertical>.dual-listbox__button:active,
	.btn-group-vertical>.btn.active,
	.dual-listbox .btn-group-vertical>.active.dual-listbox__button {
		z-index: 1
	}

	.btn-toolbar {
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-start
	}

	.btn-toolbar .input-group {
		width: auto
	}

	.btn-group>.btn:not(:first-child),
	.dual-listbox .btn-group>.dual-listbox__button:not(:first-child),
	.btn-group>.btn-group:not(:first-child) {
		margin-left: -1px
	}

	.btn-group>.btn:not(:last-child):not(.dropdown-toggle),
	.dual-listbox .btn-group>.dual-listbox__button:not(:last-child):not(.dropdown-toggle),
	.btn-group>.btn-group:not(:last-child)>.btn,
	.dual-listbox .btn-group>.btn-group:not(:last-child)>.dual-listbox__button {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.btn-group>.btn:not(:first-child),
	.dual-listbox .btn-group>.dual-listbox__button:not(:first-child),
	.btn-group>.btn-group:not(:first-child)>.btn,
	.dual-listbox .btn-group>.btn-group:not(:first-child)>.dual-listbox__button {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.dropdown-toggle-split {
		padding-right: .84375rem;
		padding-left: .84375rem
	}

	.dropdown-toggle-split::after,
	.dropup .dropdown-toggle-split::after,
	.dropright .dropdown-toggle-split::after {
		margin-left: 0
	}

	.dropleft .dropdown-toggle-split::before {
		margin-right: 0
	}

	.btn-sm+.dropdown-toggle-split,
	.btn-group-sm>.btn+.dropdown-toggle-split,
	.dual-listbox .btn-group-sm>.dual-listbox__button+.dropdown-toggle-split {
		padding-right: .5625rem;
		padding-left: .5625rem
	}

	.btn-lg+.dropdown-toggle-split,
	.btn-group-lg>.btn+.dropdown-toggle-split,
	.dual-listbox .btn-group-lg>.dual-listbox__button+.dropdown-toggle-split {
		padding-right: 1.125rem;
		padding-left: 1.125rem
	}

	.btn-group-vertical {
		flex-direction: column;
		align-items: flex-start;
		justify-content: center
	}

	.btn-group-vertical>.btn,
	.dual-listbox .btn-group-vertical>.dual-listbox__button,
	.btn-group-vertical>.btn-group {
		width: 100%
	}

	.btn-group-vertical>.btn:not(:first-child),
	.dual-listbox .btn-group-vertical>.dual-listbox__button:not(:first-child),
	.btn-group-vertical>.btn-group:not(:first-child) {
		margin-top: -1px
	}

	.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
	.dual-listbox .btn-group-vertical>.dual-listbox__button:not(:last-child):not(.dropdown-toggle),
	.btn-group-vertical>.btn-group:not(:last-child)>.btn,
	.dual-listbox .btn-group-vertical>.btn-group:not(:last-child)>.dual-listbox__button {
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0
	}

	.btn-group-vertical>.btn:not(:first-child),
	.dual-listbox .btn-group-vertical>.dual-listbox__button:not(:first-child),
	.btn-group-vertical>.btn-group:not(:first-child)>.btn,
	.dual-listbox .btn-group-vertical>.btn-group:not(:first-child)>.dual-listbox__button {
		border-top-left-radius: 0;
		border-top-right-radius: 0
	}

	.btn-group-toggle>.btn,
	.dual-listbox .btn-group-toggle>.dual-listbox__button,
	.btn-group-toggle>.btn-group>.btn,
	.dual-listbox .btn-group-toggle>.btn-group>.dual-listbox__button {
		margin-bottom: 0
	}

	.btn-group-toggle>.btn input[type="radio"],
	.dual-listbox .btn-group-toggle>.dual-listbox__button input[type="radio"],
	.btn-group-toggle>.btn input[type="checkbox"],
	.dual-listbox .btn-group-toggle>.dual-listbox__button input[type="checkbox"],
	.btn-group-toggle>.btn-group>.btn input[type="radio"],
	.dual-listbox .btn-group-toggle>.btn-group>.dual-listbox__button input[type="radio"],
	.btn-group-toggle>.btn-group>.btn input[type="checkbox"],
	.dual-listbox .btn-group-toggle>.btn-group>.dual-listbox__button input[type="checkbox"] {
		position: absolute;
		clip: rect(0, 0, 0, 0);
		pointer-events: none
	}

	.input-group {
		position: relative;
		display: flex;
		flex-wrap: wrap;
		align-items: stretch;
		width: 100%
	}

	.input-group>.form-control,
	div.dataTables_wrapper div.dataTables_filter .input-group>input,
	.dual-listbox .input-group>.dual-listbox__search,
	.input-group>.form-control-plaintext,
	.input-group>.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group>select,
	.input-group>.custom-file {
		position: relative;
		flex: 1 1 auto;
		width: 1%;
		min-width: 0;
		margin-bottom: 0
	}

	.input-group>.form-control+.form-control,
	div.dataTables_wrapper div.dataTables_filter .input-group>input+.form-control,
	.dual-listbox .input-group>.dual-listbox__search+.form-control,
	div.dataTables_wrapper div.dataTables_filter .input-group>.form-control+input,
	div.dataTables_wrapper div.dataTables_filter .input-group>input+input,
	.dual-listbox div.dataTables_wrapper div.dataTables_filter .input-group>.dual-listbox__search+input,
	div.dataTables_wrapper div.dataTables_filter .dual-listbox .input-group>.dual-listbox__search+input,
	.dual-listbox .input-group>.form-control+.dual-listbox__search,
	div.dataTables_wrapper div.dataTables_filter .dual-listbox .input-group>input+.dual-listbox__search,
	.dual-listbox div.dataTables_wrapper div.dataTables_filter .input-group>input+.dual-listbox__search,
	.dual-listbox .input-group>.dual-listbox__search+.dual-listbox__search,
	.input-group>.form-control+.custom-select,
	div.dataTables_wrapper div.dataTables_filter .input-group>input+.custom-select,
	.dual-listbox .input-group>.dual-listbox__search+.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group>.form-control+select,
	div.dataTables_wrapper div.dataTables_filter div.dataTables_length .input-group>input+select,
	div.dataTables_wrapper div.dataTables_length div.dataTables_filter .input-group>input+select,
	.dual-listbox div.dataTables_wrapper div.dataTables_length .input-group>.dual-listbox__search+select,
	div.dataTables_wrapper div.dataTables_length .dual-listbox .input-group>.dual-listbox__search+select,
	.input-group>.form-control+.custom-file,
	div.dataTables_wrapper div.dataTables_filter .input-group>input+.custom-file,
	.dual-listbox .input-group>.dual-listbox__search+.custom-file,
	.input-group>.form-control-plaintext+.form-control,
	div.dataTables_wrapper div.dataTables_filter .input-group>.form-control-plaintext+input,
	.dual-listbox .input-group>.form-control-plaintext+.dual-listbox__search,
	.input-group>.form-control-plaintext+.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group>.form-control-plaintext+select,
	.input-group>.form-control-plaintext+.custom-file,
	.input-group>.custom-select+.form-control,
	div.dataTables_wrapper div.dataTables_length .input-group>select+.form-control,
	div.dataTables_wrapper div.dataTables_filter .input-group>.custom-select+input,
	div.dataTables_wrapper div.dataTables_length div.dataTables_filter .input-group>select+input,
	div.dataTables_wrapper div.dataTables_filter div.dataTables_length .input-group>select+input,
	.dual-listbox .input-group>.custom-select+.dual-listbox__search,
	div.dataTables_wrapper div.dataTables_length .dual-listbox .input-group>select+.dual-listbox__search,
	.dual-listbox div.dataTables_wrapper div.dataTables_length .input-group>select+.dual-listbox__search,
	.input-group>.custom-select+.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group>select+.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group>.custom-select+select,
	div.dataTables_wrapper div.dataTables_length .input-group>select+select,
	.input-group>.custom-select+.custom-file,
	div.dataTables_wrapper div.dataTables_length .input-group>select+.custom-file,
	.input-group>.custom-file+.form-control,
	div.dataTables_wrapper div.dataTables_filter .input-group>.custom-file+input,
	.dual-listbox .input-group>.custom-file+.dual-listbox__search,
	.input-group>.custom-file+.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group>.custom-file+select,
	.input-group>.custom-file+.custom-file {
		margin-left: -1px
	}

	.input-group>.form-control:focus,
	div.dataTables_wrapper div.dataTables_filter .input-group>input:focus,
	.dual-listbox .input-group>.dual-listbox__search:focus,
	.input-group>.custom-select:focus,
	div.dataTables_wrapper div.dataTables_length .input-group>select:focus,
	.input-group>.custom-file .custom-file-input:focus~.custom-file-label {
		z-index: 3
	}

	.input-group>.custom-file .custom-file-input:focus {
		z-index: 4
	}

	.input-group>.form-control:not(:last-child),
	div.dataTables_wrapper div.dataTables_filter .input-group>input:not(:last-child),
	.dual-listbox .input-group>.dual-listbox__search:not(:last-child),
	.input-group>.custom-select:not(:last-child),
	div.dataTables_wrapper div.dataTables_length .input-group>select:not(:last-child) {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.input-group>.form-control:not(:first-child),
	div.dataTables_wrapper div.dataTables_filter .input-group>input:not(:first-child),
	.dual-listbox .input-group>.dual-listbox__search:not(:first-child),
	.input-group>.custom-select:not(:first-child),
	div.dataTables_wrapper div.dataTables_length .input-group>select:not(:first-child) {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.input-group>.custom-file {
		display: flex;
		align-items: center
	}

	.input-group>.custom-file:not(:last-child) .custom-file-label,
	.input-group>.custom-file:not(:last-child) .custom-file-label::after {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.input-group>.custom-file:not(:first-child) .custom-file-label {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.input-group-prepend,
	.input-group-append {
		display: flex
	}

	.input-group-prepend .btn,
	.input-group-prepend .dual-listbox .dual-listbox__button,
	.dual-listbox .input-group-prepend .dual-listbox__button,
	.input-group-append .btn,
	.input-group-append .dual-listbox .dual-listbox__button,
	.dual-listbox .input-group-append .dual-listbox__button {
		position: relative;
		z-index: 2
	}

	.input-group-prepend .btn:focus,
	.input-group-prepend .dual-listbox .dual-listbox__button:focus,
	.dual-listbox .input-group-prepend .dual-listbox__button:focus,
	.input-group-append .btn:focus,
	.input-group-append .dual-listbox .dual-listbox__button:focus,
	.dual-listbox .input-group-append .dual-listbox__button:focus {
		z-index: 3
	}

	.input-group-prepend .btn+.btn,
	.input-group-prepend .dual-listbox .dual-listbox__button+.btn,
	.dual-listbox .input-group-prepend .dual-listbox__button+.btn,
	.input-group-prepend .dual-listbox .btn+.dual-listbox__button,
	.dual-listbox .input-group-prepend .btn+.dual-listbox__button,
	.input-group-prepend .dual-listbox .dual-listbox__button+.dual-listbox__button,
	.dual-listbox .input-group-prepend .dual-listbox__button+.dual-listbox__button,
	.input-group-prepend .btn+.input-group-text,
	.input-group-prepend .dual-listbox .dual-listbox__button+.input-group-text,
	.dual-listbox .input-group-prepend .dual-listbox__button+.input-group-text,
	.input-group-prepend .input-group-text+.input-group-text,
	.input-group-prepend .input-group-text+.btn,
	.input-group-prepend .dual-listbox .input-group-text+.dual-listbox__button,
	.dual-listbox .input-group-prepend .input-group-text+.dual-listbox__button,
	.input-group-append .btn+.btn,
	.input-group-append .dual-listbox .dual-listbox__button+.btn,
	.dual-listbox .input-group-append .dual-listbox__button+.btn,
	.input-group-append .dual-listbox .btn+.dual-listbox__button,
	.dual-listbox .input-group-append .btn+.dual-listbox__button,
	.input-group-append .dual-listbox .dual-listbox__button+.dual-listbox__button,
	.dual-listbox .input-group-append .dual-listbox__button+.dual-listbox__button,
	.input-group-append .btn+.input-group-text,
	.input-group-append .dual-listbox .dual-listbox__button+.input-group-text,
	.dual-listbox .input-group-append .dual-listbox__button+.input-group-text,
	.input-group-append .input-group-text+.input-group-text,
	.input-group-append .input-group-text+.btn,
	.input-group-append .dual-listbox .input-group-text+.dual-listbox__button,
	.dual-listbox .input-group-append .input-group-text+.dual-listbox__button {
		margin-left: -1px
	}

	.input-group-prepend {
		margin-right: -1px
	}

	.input-group-append {
		margin-left: -1px
	}

	.input-group-text {
		display: flex;
		align-items: center;
		padding: .4375rem 1rem;
		margin-bottom: 0;
		font-size: .8125rem;
		font-weight: 400;
		line-height: 1.25rem;
		color: #3c4d62;
		text-align: center;
		white-space: nowrap;
		background-color: #ebeef2;
		border: 1px solid #dbdfea;
		border-radius: 4px
	}

	.input-group-text input[type="radio"],
	.input-group-text input[type="checkbox"] {
		margin-top: 0
	}

	.input-group-lg>.form-control:not(textarea),
	div.dataTables_wrapper div.dataTables_filter .input-group-lg>input:not(textarea),
	.dual-listbox .input-group-lg>.dual-listbox__search:not(textarea),
	.input-group-lg>.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group-lg>select {
		height: calc(2.625rem + 2px)
	}

	.input-group-lg>.form-control,
	div.dataTables_wrapper div.dataTables_filter .input-group-lg>input,
	.dual-listbox .input-group-lg>.dual-listbox__search,
	.input-group-lg>.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group-lg>select,
	.input-group-lg>.input-group-prepend>.input-group-text,
	.input-group-lg>.input-group-append>.input-group-text,
	.input-group-lg>.input-group-prepend>.btn,
	.dual-listbox .input-group-lg>.input-group-prepend>.dual-listbox__button,
	.input-group-lg>.input-group-append>.btn,
	.dual-listbox .input-group-lg>.input-group-append>.dual-listbox__button {
		padding: .6875rem 1rem;
		font-size: .9375rem;
		line-height: 1.25rem;
		border-radius: 5px
	}

	.input-group-sm>.form-control:not(textarea),
	div.dataTables_wrapper div.dataTables_filter .input-group-sm>input:not(textarea),
	.dual-listbox .input-group-sm>.dual-listbox__search:not(textarea),
	.input-group-sm>.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group-sm>select {
		height: calc(1.75rem + 2px)
	}

	.input-group-sm>.form-control,
	div.dataTables_wrapper div.dataTables_filter .input-group-sm>input,
	.dual-listbox .input-group-sm>.dual-listbox__search,
	.input-group-sm>.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group-sm>select,
	.input-group-sm>.input-group-prepend>.input-group-text,
	.input-group-sm>.input-group-append>.input-group-text,
	.input-group-sm>.input-group-prepend>.btn,
	.dual-listbox .input-group-sm>.input-group-prepend>.dual-listbox__button,
	.input-group-sm>.input-group-append>.btn,
	.dual-listbox .input-group-sm>.input-group-append>.dual-listbox__button {
		padding: .25rem 1rem;
		font-size: .75rem;
		line-height: 1.25rem;
		border-radius: 3px
	}

	.input-group-lg>.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group-lg>select,
	.input-group-sm>.custom-select,
	div.dataTables_wrapper div.dataTables_length .input-group-sm>select {
		padding-right: 2rem
	}

	.input-group>.input-group-prepend>.btn,
	.dual-listbox .input-group>.input-group-prepend>.dual-listbox__button,
	.input-group>.input-group-prepend>.input-group-text,
	.input-group>.input-group-append:not(:last-child)>.btn,
	.dual-listbox .input-group>.input-group-append:not(:last-child)>.dual-listbox__button,
	.input-group>.input-group-append:not(:last-child)>.input-group-text,
	.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
	.dual-listbox .input-group>.input-group-append:last-child>.dual-listbox__button:not(:last-child):not(.dropdown-toggle),
	.input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.input-group>.input-group-append>.btn,
	.dual-listbox .input-group>.input-group-append>.dual-listbox__button,
	.input-group>.input-group-append>.input-group-text,
	.input-group>.input-group-prepend:not(:first-child)>.btn,
	.dual-listbox .input-group>.input-group-prepend:not(:first-child)>.dual-listbox__button,
	.input-group>.input-group-prepend:not(:first-child)>.input-group-text,
	.input-group>.input-group-prepend:first-child>.btn:not(:first-child),
	.dual-listbox .input-group>.input-group-prepend:first-child>.dual-listbox__button:not(:first-child),
	.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.custom-control {
		position: relative;
		z-index: 1;
		display: block;
		min-height: 1.44375rem;
		padding-left: 2.25rem
	}

	.custom-control-inline {
		display: inline-flex;
		margin-right: 1rem
	}

	.custom-control-input {
		position: absolute;
		left: 0;
		z-index: -1;
		width: 1.5rem;
		height: 1.47187rem;
		opacity: 0
	}

	.custom-control-input:checked~.custom-control-label::before {
		color: #fff;
		border-color: #6576ff;
		background-color: #6576ff
	}

	.custom-control-input:focus~.custom-control-label::before {
		box-shadow: 0 0 0 3px rgba(101, 118, 255, 0.1)
	}

	.custom-control-input:focus:not(:checked)~.custom-control-label::before {
		border-color: #6576ff
	}

	.custom-control-input:not(:disabled):active~.custom-control-label::before {
		color: #fff;
		background-color: #6576ff;
		border-color: #6576ff
	}

	.custom-control-input[disabled]~.custom-control-label,
	.custom-control-input:disabled~.custom-control-label {
		color: #6c757d
	}

	.custom-control-input[disabled]~.custom-control-label::before,
	.custom-control-input:disabled~.custom-control-label::before {
		background-color: #f5f6fa
	}

	.custom-control-label {
		position: relative;
		margin-bottom: 0;
		vertical-align: top
	}

	.custom-control-label:before,
	.custom-control-label:after {
		z-index: 1
	}

	.custom-control-label::before {
		position: absolute;
		top: -.02813rem;
		left: -2.25rem;
		display: block;
		width: 1.5rem;
		height: 1.5rem;
		pointer-events: none;
		content: "";
		background-color: #fff;
		border: #dbdfea solid 2px
	}

	.custom-control-label::after {
		position: absolute;
		top: -.02813rem;
		left: -2.25rem;
		display: block;
		width: 1.5rem;
		height: 1.5rem;
		content: "";
		background: no-repeat 50% / 50% 50%
	}

	.custom-checkbox .custom-control-label::before {
		border-radius: 4px
	}

	.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e")
	}

	.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
		border-color: #559bfb;
		background-color: #559bfb
	}

	.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")
	}

	.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
		background-color: rgba(101, 118, 255, 0.8)
	}

	.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
		background-color: rgba(101, 118, 255, 0.8)
	}

	.custom-radio .custom-control-label::before {
		border-radius: 50%
	}

	.custom-radio .custom-control-input:checked~.custom-control-label::after {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
	}

	.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
		background-color: rgba(101, 118, 255, 0.8)
	}

	.custom-switch {
		padding-left: 3.75rem
	}

	.custom-switch .custom-control-label::before {
		left: -3.75rem;
		width: 3rem;
		pointer-events: all;
		border-radius: 1.5rem
	}

	.custom-switch .custom-control-label::after {
		top: calc(-.02813rem + 4px);
		left: calc(-3.75rem + 4px);
		width: 1rem;
		height: 1rem;
		background-color: #dbdfea;
		border-radius: 1.5rem;
		transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
	}

	@media (prefers-reduced-motion: reduce) {
		.custom-switch .custom-control-label::after {
			transition: none
		}
	}

	.custom-switch .custom-control-input:checked~.custom-control-label::after {
		background-color: #fff;
		transform: translateX(1.5rem)
	}

	.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
		background-color: rgba(101, 118, 255, 0.8)
	}

	.custom-select,
	div.dataTables_wrapper div.dataTables_length select {
		display: inline-block;
		width: 100%;
		height: calc(2.125rem + 2px);
		padding: .4375rem 2rem .4375rem 1rem;
		font-size: .8125rem;
		font-weight: 400;
		line-height: 1.25rem;
		color: #3c4d62;
		vertical-align: middle;
		background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 1rem center/8px 10px no-repeat;
		border: 1px solid #dbdfea;
		border-radius: 4px;
		appearance: none
	}

	.custom-select:focus,
	div.dataTables_wrapper div.dataTables_length select:focus {
		border-color: #6576ff;
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(85, 155, 251, 0.25)
	}

	.custom-select:focus::-ms-value,
	div.dataTables_wrapper div.dataTables_length select:focus::-ms-value {
		color: #3c4d62;
		background-color: #fff
	}

	.custom-select[multiple],
	div.dataTables_wrapper div.dataTables_length select[multiple],
	.custom-select[size]:not([size="1"]),
	div.dataTables_wrapper div.dataTables_length select[size]:not([size="1"]) {
		height: auto;
		padding-right: 1rem;
		background-image: none
	}

	.custom-select:disabled,
	div.dataTables_wrapper div.dataTables_length select:disabled {
		color: #6c757d;
		background-color: #e9ecef
	}

	.custom-select::-ms-expand,
	div.dataTables_wrapper div.dataTables_length select::-ms-expand {
		display: none
	}

	.custom-select:-moz-focusring,
	div.dataTables_wrapper div.dataTables_length select:-moz-focusring {
		color: transparent;
		text-shadow: 0 0 0 #3c4d62
	}

	.custom-select-sm {
		height: calc(1.75rem + 2px);
		padding-top: .25rem;
		padding-bottom: .25rem;
		padding-left: 1rem;
		font-size: .75rem
	}

	.custom-select-lg {
		height: calc(2.625rem + 2px);
		padding-top: .6875rem;
		padding-bottom: .6875rem;
		padding-left: 1rem;
		font-size: .9375rem
	}

	.custom-file {
		position: relative;
		display: inline-block;
		width: 100%;
		height: calc(2.125rem + 2px);
		margin-bottom: 0
	}

	.custom-file-input {
		position: relative;
		z-index: 2;
		width: 100%;
		height: calc(2.125rem + 2px);
		margin: 0;
		opacity: 0
	}

	.custom-file-input:focus~.custom-file-label {
		border-color: #6576ff;
		box-shadow: 0 0 0 3px rgba(101, 118, 255, 0.1)
	}

	.custom-file-input[disabled]~.custom-file-label,
	.custom-file-input:disabled~.custom-file-label {
		background-color: #f5f6fa
	}

	.custom-file-input:lang(en)~.custom-file-label::after {
		content: "Browse"
	}

	.custom-file-input~.custom-file-label[data-browse]::after {
		content: attr(data-browse)
	}

	.custom-file-label {
		position: absolute;
		top: 0;
		right: 0;
		left: 0;
		z-index: 1;
		height: calc(2.125rem + 2px);
		padding: .4375rem 1rem;
		font-weight: 400;
		line-height: 1.25rem;
		color: #3c4d62;
		background-color: #fff;
		border: 1px solid #dbdfea;
		border-radius: 4px
	}

	.custom-file-label::after {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		z-index: 3;
		display: block;
		height: 2.125rem;
		padding: .4375rem 1rem;
		line-height: 1.25rem;
		color: #3c4d62;
		content: "Browse";
		background-color: #ebeef2;
		border-left: inherit;
		border-radius: 0 4px 4px 0
	}

	.custom-range {
		width: 100%;
		height: 1.4rem;
		padding: 0;
		background-color: transparent;
		appearance: none
	}

	.custom-range:focus {
		outline: none
	}

	.custom-range:focus::-webkit-slider-thumb {
		box-shadow: 0 0 0 1px #f5f6fa, 0 0 0 3px rgba(101, 118, 255, 0.1)
	}

	.custom-range:focus::-moz-range-thumb {
		box-shadow: 0 0 0 1px #f5f6fa, 0 0 0 3px rgba(101, 118, 255, 0.1)
	}

	.custom-range:focus::-ms-thumb {
		box-shadow: 0 0 0 1px #f5f6fa, 0 0 0 3px rgba(101, 118, 255, 0.1)
	}

	.custom-range::-moz-focus-outer {
		border: 0
	}

	.custom-range::-webkit-slider-thumb {
		width: 1rem;
		height: 1rem;
		margin-top: -.25rem;
		background-color: #559bfb;
		border: 0;
		border-radius: 1rem;
		transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		appearance: none
	}

	@media (prefers-reduced-motion: reduce) {
		.custom-range::-webkit-slider-thumb {
			transition: none
		}
	}

	.custom-range::-webkit-slider-thumb:active {
		background-color: #fff
	}

	.custom-range::-webkit-slider-runnable-track {
		width: 100%;
		height: .5rem;
		color: transparent;
		cursor: pointer;
		background-color: #dee2e6;
		border-color: transparent;
		border-radius: 1rem
	}

	.custom-range::-moz-range-thumb {
		width: 1rem;
		height: 1rem;
		background-color: #559bfb;
		border: 0;
		border-radius: 1rem;
		transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		appearance: none
	}

	@media (prefers-reduced-motion: reduce) {
		.custom-range::-moz-range-thumb {
			transition: none
		}
	}

	.custom-range::-moz-range-thumb:active {
		background-color: #fff
	}

	.custom-range::-moz-range-track {
		width: 100%;
		height: .5rem;
		color: transparent;
		cursor: pointer;
		background-color: #dee2e6;
		border-color: transparent;
		border-radius: 1rem
	}

	.custom-range::-ms-thumb {
		width: 1rem;
		height: 1rem;
		margin-top: 0;
		margin-right: .2rem;
		margin-left: .2rem;
		background-color: #559bfb;
		border: 0;
		border-radius: 1rem;
		transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		appearance: none
	}

	@media (prefers-reduced-motion: reduce) {
		.custom-range::-ms-thumb {
			transition: none
		}
	}

	.custom-range::-ms-thumb:active {
		background-color: #fff
	}

	.custom-range::-ms-track {
		width: 100%;
		height: .5rem;
		color: transparent;
		cursor: pointer;
		background-color: transparent;
		border-color: transparent;
		border-width: .5rem
	}

	.custom-range::-ms-fill-lower {
		background-color: #dee2e6;
		border-radius: 1rem
	}

	.custom-range::-ms-fill-upper {
		margin-right: 15px;
		background-color: #dee2e6;
		border-radius: 1rem
	}

	.custom-range:disabled::-webkit-slider-thumb {
		background-color: #adb5bd
	}

	.custom-range:disabled::-webkit-slider-runnable-track {
		cursor: default
	}

	.custom-range:disabled::-moz-range-thumb {
		background-color: #adb5bd
	}

	.custom-range:disabled::-moz-range-track {
		cursor: default
	}

	.custom-range:disabled::-ms-thumb {
		background-color: #adb5bd
	}

	.custom-control-label::before,
	.custom-file-label,
	.custom-select,
	div.dataTables_wrapper div.dataTables_length select {
		transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
	}

	@media (prefers-reduced-motion: reduce) {

		.custom-control-label::before,
		.custom-file-label,
		.custom-select,
		div.dataTables_wrapper div.dataTables_length select {
			transition: none
		}
	}

	.image-control.custom-control {
		padding-left: 0
	}

	.image-control .custom-control-input:checked~.custom-control-label:before {
		border-color: #fff
	}

	.image-control .custom-control-input:checked~.custom-control-label img {
		opacity: .8
	}

	.image-control .custom-control-label {
		padding-top: 0;
		border-radius: 4px;
		overflow: hidden;
		background-color: #1f2b3a
	}

	.image-control .custom-control-label img {
		transition: opacity .3s ease
	}

	.image-control .custom-control-label:before,
	.image-control .custom-control-label:after {
		z-index: 9
	}

	.image-control .custom-control-label::before {
		border-width: 1px;
		top: 1rem;
		left: 1rem
	}

	.image-control .custom-control-label::after {
		top: 1rem;
		left: 1rem
	}

	.image-control:hover .custom-control-label img {
		opacity: .8
	}

	.custom-control-pro {
		padding-left: 0;
		position: relative
	}

	.custom-control-pro.no-control.checked {
		z-index: 3
	}

	.custom-control-pro.no-control.focused {
		z-index: 2
	}

	.custom-control-pro.no-control .custom-control-label {
		padding: .375rem 1.125rem;
		border-width: 2px
	}

	.custom-control-pro.no-control .custom-control-input:checked~.custom-control-label {
		border-color: #6576ff;
		z-index: 2
	}

	.custom-control-pro.no-control .custom-control-input:not(:disabled):active~.custom-control-label {
		border-color: #6576ff
	}

	.custom-control-pro.no-control .custom-control-input[disabled]~.custom-control-label,
	.custom-control-pro.no-control .custom-control-input:disabled~.custom-control-label {
		color: #6c757d
	}

	.custom-control-pro-block.custom-control {
		display: flex
	}

	.custom-control-pro-block .custom-control-label {
		width: 100%
	}

	.custom-control-pro .custom-control-label {
		border: 1px solid #e5e9f2;
		padding: 1.125rem 1.125rem 1.125rem 3.375rem;
		font-size: 13px;
		line-height: 1.25rem;
		border-radius: 4px;
		transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		display: inline-flex;
		align-items: center;
		background-color: #fff
	}

	@media (prefers-reduced-motion: reduce) {
		.custom-control-pro .custom-control-label {
			transition: none
		}
	}

	.custom-control-pro .custom-control-label::before,
	.custom-control-pro .custom-control-label::after {
		top: 50%;
		transform: translateY(-50%);
		left: 1.125rem
	}

	.custom-control-pro .custom-control-label .icon {
		font-size: 1.4em;
		line-height: inherit
	}

	.custom-control-pro .custom-control-label .icon-lg {
		font-size: 2.2em
	}

	.custom-control-pro .custom-control-label>span {
		white-space: nowrap
	}

	.custom-control-pro .custom-control-label>span:only-child {
		width: 100%
	}

	.custom-control-pro .custom-control-label .icon+span,
	.custom-control-pro .custom-control-label span+.icon {
		padding-left: 8px
	}

	.custom-control-pro.custom-control-sm {
		padding-left: 0
	}

	.custom-control-pro.custom-control-sm .custom-control-label {
		padding: 0.6875rem 1.125rem 0.6875rem 3rem;
		font-size: 13px;
		line-height: 1.25rem;
		border-radius: 4px
	}

	.custom-control-pro.custom-control-sm .custom-control-label::before,
	.custom-control-pro.custom-control-sm .custom-control-label::after {
		top: 50%;
		transform: translateY(-50%);
		left: 1.125rem
	}

	.custom-control-pro-icon.custom-control-pro .custom-control-label {
		padding-left: 0;
		padding-right: 0
	}

	.custom-control-pro-icon.custom-control-pro .custom-control-label .icon {
		text-align: center;
		width: 2.125rem
	}

	.custom-control.color-control {
		padding: 4px !important
	}

	.custom-control.color-control .custom-control-label::before {
		opacity: 0;
		display: block;
		left: -4px;
		right: -4px;
		top: -4px;
		bottom: -4px;
		border-radius: 50%;
		border: 2px solid #6576ff !important;
		background: transparent !important;
		transition: .3s ease
	}

	.custom-control.color-control .custom-control-label::after {
		display: none
	}

	.custom-control.color-control .custom-control-input:checked~.custom-control-label::before {
		opacity: 1
	}

	.no-control {
		padding-left: 0
	}

	.no-control .custom-control-label::before,
	.no-control .custom-control-label::after {
		display: none
	}

	.form-control-slider {
		margin-top: 0.25rem;
		margin-bottom: 0.25rem
	}

	.custom-control-group {
		display: inline-flex;
		align-items: center;
		flex-wrap: wrap;
		margin: -.375rem
	}

	.custom-control-group>* {
		padding: .375rem
	}

	.custom-control-stacked {
		margin: 0
	}

	.custom-control-stacked>* {
		padding: 0;
		margin: -1px
	}

	.custom-control-stacked:not(.custom-control-vertical)>*:not(:first-child) .custom-control-label {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.custom-control-stacked:not(.custom-control-vertical)>*:not(:last-child) .custom-control-label {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.custom-control-vertical {
		flex-direction: column;
		align-items: start
	}

	.custom-control-vertical>* {
		width: 100%
	}

	.custom-control-vertical .custom-control {
		display: flex
	}

	.custom-control-vertical .custom-control .custom-control-label {
		width: 100%
	}

	.custom-control-vertical.custom-control-stacked>*:not(:first-child) .custom-control-label {
		border-top-left-radius: 0;
		border-top-right-radius: 0
	}

	.custom-control-vertical.custom-control-stacked>*:not(:last-child) .custom-control-label {
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0
	}

	.nav {
		display: flex;
		flex-wrap: wrap;
		padding-left: 0;
		margin-bottom: 0;
		list-style: none
	}

	.nav-link {
		display: block;
		padding: .5rem 1rem
	}

	.nav-link:hover,
	.nav-link:focus {
		text-decoration: none
	}

	.nav-link.disabled {
		color: #6c757d;
		pointer-events: none;
		cursor: default
	}

	.nav-tabs {
		border-bottom: 1px solid #dee2e6
	}

	.nav-tabs .nav-link {
		margin-bottom: -1px;
		border: 1px solid transparent;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px
	}

	.nav-tabs .nav-link:hover,
	.nav-tabs .nav-link:focus {
		border-color: #e9ecef #e9ecef #dee2e6
	}

	.nav-tabs .nav-link.disabled {
		color: #6c757d;
		background-color: transparent;
		border-color: transparent
	}

	.nav-tabs .nav-link.active,
	.nav-tabs .nav-item.show .nav-link {
		color: #495057;
		background-color: #f5f6fa;
		border-color: #dee2e6 #dee2e6 #f5f6fa
	}

	.nav-tabs .dropdown-menu {
		margin-top: -1px;
		border-top-left-radius: 0;
		border-top-right-radius: 0
	}

	.nav-pills .nav-link {
		border-radius: 4px
	}

	.nav-pills .nav-link.active,
	.nav-pills .show>.nav-link {
		color: #fff;
		background-color: #559bfb
	}

	.nav-fill>.nav-link,
	.nav-fill .nav-item {
		flex: 1 1 auto;
		text-align: center
	}

	.nav-justified>.nav-link,
	.nav-justified .nav-item {
		flex-basis: 0;
		flex-grow: 1;
		text-align: center
	}

	.tab-content>.tab-pane {
		display: none
	}

	.tab-content>.active {
		display: block
	}

	.navbar {
		position: relative;
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		justify-content: space-between;
		padding: .5rem 1rem
	}

	.navbar .container,
	.navbar .container-fluid,
	.navbar .container-sm,
	.navbar .container-md,
	.navbar .container-lg,
	.navbar .container-xl,
	.navbar .container-xxl {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		justify-content: space-between
	}

	.navbar-brand {
		display: inline-block;
		padding-top: .3125rem;
		padding-bottom: .3125rem;
		margin-right: 1rem;
		font-size: 1.25rem;
		line-height: inherit;
		white-space: nowrap
	}

	.navbar-brand:hover,
	.navbar-brand:focus {
		text-decoration: none
	}

	.navbar-nav {
		display: flex;
		flex-direction: column;
		padding-left: 0;
		margin-bottom: 0;
		list-style: none
	}

	.navbar-nav .nav-link {
		padding-right: 0;
		padding-left: 0
	}

	.navbar-nav .dropdown-menu {
		position: static;
		float: none
	}

	.navbar-text {
		display: inline-block;
		padding-top: .5rem;
		padding-bottom: .5rem
	}

	.navbar-collapse {
		flex-basis: 100%;
		flex-grow: 1;
		align-items: center
	}

	.navbar-toggler {
		padding: .25rem .75rem;
		font-size: 1.25rem;
		line-height: 1;
		background-color: transparent;
		border: 1px solid transparent;
		border-radius: 4px
	}

	.navbar-toggler:hover,
	.navbar-toggler:focus {
		text-decoration: none
	}

	.navbar-toggler-icon {
		display: inline-block;
		width: 1.5em;
		height: 1.5em;
		vertical-align: middle;
		content: "";
		background: no-repeat center center;
		background-size: 100% 100%
	}

	@media (max-width: 575.98px) {

		.navbar-expand-sm>.container,
		.navbar-expand-sm>.container-fluid,
		.navbar-expand-sm>.container-sm,
		.navbar-expand-sm>.container-md,
		.navbar-expand-sm>.container-lg,
		.navbar-expand-sm>.container-xl,
		.navbar-expand-sm>.container-xxl {
			padding-right: 0;
			padding-left: 0
		}
	}

	@media (min-width: 576px) {
		.navbar-expand-sm {
			flex-flow: row nowrap;
			justify-content: flex-start
		}

		.navbar-expand-sm .navbar-nav {
			flex-direction: row
		}

		.navbar-expand-sm .navbar-nav .dropdown-menu {
			position: absolute
		}

		.navbar-expand-sm .navbar-nav .nav-link {
			padding-right: .5rem;
			padding-left: .5rem
		}

		.navbar-expand-sm>.container,
		.navbar-expand-sm>.container-fluid,
		.navbar-expand-sm>.container-sm,
		.navbar-expand-sm>.container-md,
		.navbar-expand-sm>.container-lg,
		.navbar-expand-sm>.container-xl,
		.navbar-expand-sm>.container-xxl {
			flex-wrap: nowrap
		}

		.navbar-expand-sm .navbar-collapse {
			display: flex !important;
			flex-basis: auto
		}

		.navbar-expand-sm .navbar-toggler {
			display: none
		}
	}

	@media (max-width: 767.98px) {

		.navbar-expand-md>.container,
		.navbar-expand-md>.container-fluid,
		.navbar-expand-md>.container-sm,
		.navbar-expand-md>.container-md,
		.navbar-expand-md>.container-lg,
		.navbar-expand-md>.container-xl,
		.navbar-expand-md>.container-xxl {
			padding-right: 0;
			padding-left: 0
		}
	}

	@media (min-width: 768px) {
		.navbar-expand-md {
			flex-flow: row nowrap;
			justify-content: flex-start
		}

		.navbar-expand-md .navbar-nav {
			flex-direction: row
		}

		.navbar-expand-md .navbar-nav .dropdown-menu {
			position: absolute
		}

		.navbar-expand-md .navbar-nav .nav-link {
			padding-right: .5rem;
			padding-left: .5rem
		}

		.navbar-expand-md>.container,
		.navbar-expand-md>.container-fluid,
		.navbar-expand-md>.container-sm,
		.navbar-expand-md>.container-md,
		.navbar-expand-md>.container-lg,
		.navbar-expand-md>.container-xl,
		.navbar-expand-md>.container-xxl {
			flex-wrap: nowrap
		}

		.navbar-expand-md .navbar-collapse {
			display: flex !important;
			flex-basis: auto
		}

		.navbar-expand-md .navbar-toggler {
			display: none
		}
	}

	@media (max-width: 991.98px) {

		.navbar-expand-lg>.container,
		.navbar-expand-lg>.container-fluid,
		.navbar-expand-lg>.container-sm,
		.navbar-expand-lg>.container-md,
		.navbar-expand-lg>.container-lg,
		.navbar-expand-lg>.container-xl,
		.navbar-expand-lg>.container-xxl {
			padding-right: 0;
			padding-left: 0
		}
	}

	@media (min-width: 992px) {
		.navbar-expand-lg {
			flex-flow: row nowrap;
			justify-content: flex-start
		}

		.navbar-expand-lg .navbar-nav {
			flex-direction: row
		}

		.navbar-expand-lg .navbar-nav .dropdown-menu {
			position: absolute
		}

		.navbar-expand-lg .navbar-nav .nav-link {
			padding-right: .5rem;
			padding-left: .5rem
		}

		.navbar-expand-lg>.container,
		.navbar-expand-lg>.container-fluid,
		.navbar-expand-lg>.container-sm,
		.navbar-expand-lg>.container-md,
		.navbar-expand-lg>.container-lg,
		.navbar-expand-lg>.container-xl,
		.navbar-expand-lg>.container-xxl {
			flex-wrap: nowrap
		}

		.navbar-expand-lg .navbar-collapse {
			display: flex !important;
			flex-basis: auto
		}

		.navbar-expand-lg .navbar-toggler {
			display: none
		}
	}

	@media (max-width: 1199.98px) {

		.navbar-expand-xl>.container,
		.navbar-expand-xl>.container-fluid,
		.navbar-expand-xl>.container-sm,
		.navbar-expand-xl>.container-md,
		.navbar-expand-xl>.container-lg,
		.navbar-expand-xl>.container-xl,
		.navbar-expand-xl>.container-xxl {
			padding-right: 0;
			padding-left: 0
		}
	}

	@media (min-width: 1200px) {
		.navbar-expand-xl {
			flex-flow: row nowrap;
			justify-content: flex-start
		}

		.navbar-expand-xl .navbar-nav {
			flex-direction: row
		}

		.navbar-expand-xl .navbar-nav .dropdown-menu {
			position: absolute
		}

		.navbar-expand-xl .navbar-nav .nav-link {
			padding-right: .5rem;
			padding-left: .5rem
		}

		.navbar-expand-xl>.container,
		.navbar-expand-xl>.container-fluid,
		.navbar-expand-xl>.container-sm,
		.navbar-expand-xl>.container-md,
		.navbar-expand-xl>.container-lg,
		.navbar-expand-xl>.container-xl,
		.navbar-expand-xl>.container-xxl {
			flex-wrap: nowrap
		}

		.navbar-expand-xl .navbar-collapse {
			display: flex !important;
			flex-basis: auto
		}

		.navbar-expand-xl .navbar-toggler {
			display: none
		}
	}

	@media (max-width: 1539.98px) {

		.navbar-expand-xxl>.container,
		.navbar-expand-xxl>.container-fluid,
		.navbar-expand-xxl>.container-sm,
		.navbar-expand-xxl>.container-md,
		.navbar-expand-xxl>.container-lg,
		.navbar-expand-xxl>.container-xl,
		.navbar-expand-xxl>.container-xxl {
			padding-right: 0;
			padding-left: 0
		}
	}

	@media (min-width: 1540px) {
		.navbar-expand-xxl {
			flex-flow: row nowrap;
			justify-content: flex-start
		}

		.navbar-expand-xxl .navbar-nav {
			flex-direction: row
		}

		.navbar-expand-xxl .navbar-nav .dropdown-menu {
			position: absolute
		}

		.navbar-expand-xxl .navbar-nav .nav-link {
			padding-right: .5rem;
			padding-left: .5rem
		}

		.navbar-expand-xxl>.container,
		.navbar-expand-xxl>.container-fluid,
		.navbar-expand-xxl>.container-sm,
		.navbar-expand-xxl>.container-md,
		.navbar-expand-xxl>.container-lg,
		.navbar-expand-xxl>.container-xl,
		.navbar-expand-xxl>.container-xxl {
			flex-wrap: nowrap
		}

		.navbar-expand-xxl .navbar-collapse {
			display: flex !important;
			flex-basis: auto
		}

		.navbar-expand-xxl .navbar-toggler {
			display: none
		}
	}

	.navbar-expand {
		flex-flow: row nowrap;
		justify-content: flex-start
	}

	.navbar-expand>.container,
	.navbar-expand>.container-fluid,
	.navbar-expand>.container-sm,
	.navbar-expand>.container-md,
	.navbar-expand>.container-lg,
	.navbar-expand>.container-xl,
	.navbar-expand>.container-xxl {
		padding-right: 0;
		padding-left: 0
	}

	.navbar-expand .navbar-nav {
		flex-direction: row
	}

	.navbar-expand .navbar-nav .dropdown-menu {
		position: absolute
	}

	.navbar-expand .navbar-nav .nav-link {
		padding-right: .5rem;
		padding-left: .5rem
	}

	.navbar-expand>.container,
	.navbar-expand>.container-fluid,
	.navbar-expand>.container-sm,
	.navbar-expand>.container-md,
	.navbar-expand>.container-lg,
	.navbar-expand>.container-xl,
	.navbar-expand>.container-xxl {
		flex-wrap: nowrap
	}

	.navbar-expand .navbar-collapse {
		display: flex !important;
		flex-basis: auto
	}

	.navbar-expand .navbar-toggler {
		display: none
	}

	.navbar-light .navbar-brand {
		color: rgba(0, 0, 0, 0.9)
	}

	.navbar-light .navbar-brand:hover,
	.navbar-light .navbar-brand:focus {
		color: rgba(0, 0, 0, 0.9)
	}

	.navbar-light .navbar-nav .nav-link {
		color: rgba(0, 0, 0, 0.5)
	}

	.navbar-light .navbar-nav .nav-link:hover,
	.navbar-light .navbar-nav .nav-link:focus {
		color: rgba(0, 0, 0, 0.7)
	}

	.navbar-light .navbar-nav .nav-link.disabled {
		color: rgba(0, 0, 0, 0.3)
	}

	.navbar-light .navbar-nav .show>.nav-link,
	.navbar-light .navbar-nav .active>.nav-link,
	.navbar-light .navbar-nav .nav-link.show,
	.navbar-light .navbar-nav .nav-link.active {
		color: rgba(0, 0, 0, 0.9)
	}

	.navbar-light .navbar-toggler {
		color: rgba(0, 0, 0, 0.5);
		border-color: rgba(0, 0, 0, 0.1)
	}

	.navbar-light .navbar-toggler-icon {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280,0,0,0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
	}

	.navbar-light .navbar-text {
		color: rgba(0, 0, 0, 0.5)
	}

	.navbar-light .navbar-text a {
		color: rgba(0, 0, 0, 0.9)
	}

	.navbar-light .navbar-text a:hover,
	.navbar-light .navbar-text a:focus {
		color: rgba(0, 0, 0, 0.9)
	}

	.navbar-dark .navbar-brand {
		color: #fff
	}

	.navbar-dark .navbar-brand:hover,
	.navbar-dark .navbar-brand:focus {
		color: #fff
	}

	.navbar-dark .navbar-nav .nav-link {
		color: rgba(255, 255, 255, 0.5)
	}

	.navbar-dark .navbar-nav .nav-link:hover,
	.navbar-dark .navbar-nav .nav-link:focus {
		color: rgba(255, 255, 255, 0.75)
	}

	.navbar-dark .navbar-nav .nav-link.disabled {
		color: rgba(255, 255, 255, 0.25)
	}

	.navbar-dark .navbar-nav .show>.nav-link,
	.navbar-dark .navbar-nav .active>.nav-link,
	.navbar-dark .navbar-nav .nav-link.show,
	.navbar-dark .navbar-nav .nav-link.active {
		color: #fff
	}

	.navbar-dark .navbar-toggler {
		color: rgba(255, 255, 255, 0.5);
		border-color: rgba(255, 255, 255, 0.1)
	}

	.navbar-dark .navbar-toggler-icon {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255,255,255,0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
	}

	.navbar-dark .navbar-text {
		color: rgba(255, 255, 255, 0.5)
	}

	.navbar-dark .navbar-text a {
		color: #fff
	}

	.navbar-dark .navbar-text a:hover,
	.navbar-dark .navbar-text a:focus {
		color: #fff
	}

	.card {
		position: relative;
		display: flex;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: 0 solid rgba(0, 0, 0, 0.125);
		border-radius: 4px
	}

	.card>hr {
		margin-right: 0;
		margin-left: 0
	}

	.card>.list-group {
		border-top: inherit;
		border-bottom: inherit
	}

	.card>.list-group:first-child {
		border-top-width: 0;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px
	}

	.card>.list-group:last-child {
		border-bottom-width: 0;
		border-bottom-right-radius: 3px;
		border-bottom-left-radius: 3px
	}

	.card>.card-header+.list-group,
	.card>.list-group+.card-footer {
		border-top: 0
	}

	.card-body {
		flex: 1 1 auto;
		min-height: 1px;
		padding: 1.25rem
	}

	.card-title {
		margin-bottom: .75rem
	}

	.card-subtitle {
		margin-top: -.375rem;
		margin-bottom: 0
	}

	.card-text:last-child {
		margin-bottom: 0
	}

	.card-link:hover {
		text-decoration: none
	}

	.card-link+.card-link {
		margin-left: 1.25rem
	}

	.card-header {
		padding: .75rem 1.25rem;
		margin-bottom: 0;
		background-color: rgba(0, 0, 0, 0.07);
		border-bottom: 0 solid rgba(0, 0, 0, 0.125)
	}

	.card-header:first-child {
		border-radius: 3px 3px 0 0
	}

	.card-footer {
		padding: .75rem 1.25rem;
		background-color: rgba(0, 0, 0, 0.07);
		border-top: 0 solid rgba(0, 0, 0, 0.125)
	}

	.card-footer:last-child {
		border-radius: 0 0 3px 3px
	}

	.card-header-tabs {
		margin-right: -.625rem;
		margin-bottom: -.75rem;
		margin-left: -.625rem;
		border-bottom: 0
	}

	.card-header-pills {
		margin-right: -.625rem;
		margin-left: -.625rem
	}

	.card-img-overlay {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		padding: 1.25rem;
		border-radius: 3px
	}

	.card-img,
	.card-img-top,
	.card-img-bottom {
		flex-shrink: 0;
		width: 100%
	}

	.card-img,
	.card-img-top {
		border-top-left-radius: 3px;
		border-top-right-radius: 3px
	}

	.card-img,
	.card-img-bottom {
		border-bottom-right-radius: 3px;
		border-bottom-left-radius: 3px
	}

	.card-deck .card {
		margin-bottom: 14px
	}

	@media (min-width: 576px) {
		.card-deck {
			display: flex;
			flex-flow: row wrap;
			margin-right: -14px;
			margin-left: -14px
		}

		.card-deck .card {
			flex: 1 0 0%;
			margin-right: 14px;
			margin-bottom: 0;
			margin-left: 14px
		}
	}

	.card-group>.card {
		margin-bottom: 14px
	}

	@media (min-width: 576px) {
		.card-group {
			display: flex;
			flex-flow: row wrap
		}

		.card-group>.card {
			flex: 1 0 0%;
			margin-bottom: 0
		}

		.card-group>.card+.card {
			margin-left: 0;
			border-left: 0
		}

		.card-group>.card:not(:last-child) {
			border-top-right-radius: 0;
			border-bottom-right-radius: 0
		}

		.card-group>.card:not(:last-child) .card-img-top,
		.card-group>.card:not(:last-child) .card-header {
			border-top-right-radius: 0
		}

		.card-group>.card:not(:last-child) .card-img-bottom,
		.card-group>.card:not(:last-child) .card-footer {
			border-bottom-right-radius: 0
		}

		.card-group>.card:not(:first-child) {
			border-top-left-radius: 0;
			border-bottom-left-radius: 0
		}

		.card-group>.card:not(:first-child) .card-img-top,
		.card-group>.card:not(:first-child) .card-header {
			border-top-left-radius: 0
		}

		.card-group>.card:not(:first-child) .card-img-bottom,
		.card-group>.card:not(:first-child) .card-footer {
			border-bottom-left-radius: 0
		}
	}

	.card-columns .card {
		margin-bottom: .75rem
	}

	@media (min-width: 576px) {
		.card-columns {
			column-count: 3;
			column-gap: 1.25rem;
			orphans: 1;
			widows: 1
		}

		.card-columns .card {
			display: inline-block;
			width: 100%
		}
	}

	.accordion {
		overflow-anchor: none
	}

	.accordion>.card {
		overflow: hidden
	}

	.accordion>.card:not(:last-of-type) {
		border-bottom: 0;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0
	}

	.accordion>.card:not(:first-of-type) {
		border-top-left-radius: 0;
		border-top-right-radius: 0
	}

	.accordion>.card>.card-header {
		border-radius: 0;
		margin-bottom: 0
	}

	.breadcrumb {
		display: flex;
		flex-wrap: wrap;
		padding: .25rem 0;
		margin-bottom: 0;
		font-size: .6875rem;
		list-style: none;
		background-color: rgba(0, 0, 0, 0);
		border-radius: 4px
	}

	.breadcrumb-item {
		display: flex
	}

	.breadcrumb-item+.breadcrumb-item {
		padding-left: .5rem
	}

	.breadcrumb-item+.breadcrumb-item::before {
		display: inline-block;
		padding-right: .5rem;
		color: #8091a7;
		content: "/"
	}

	.breadcrumb-item+.breadcrumb-item:hover::before {
		text-decoration: underline
	}

	.breadcrumb-item+.breadcrumb-item:hover::before {
		text-decoration: none
	}

	.breadcrumb-item.active {
		color: #b7c2d0
	}

	.pagination {
		display: flex;
		padding-left: 0;
		list-style: none;
		border-radius: 4px
	}

	.page-link {
		position: relative;
		display: block;
		padding: .5625rem .625rem;
		margin-left: -1px;
		line-height: 1rem;
		color: #526484;
		background-color: #fff;
		border: 1px solid #e5e9f2
	}

	.page-link:hover {
		z-index: 2;
		color: #465fff;
		text-decoration: none;
		background-color: #ebeef2;
		border-color: #e5e9f2
	}

	.page-link:focus {
		z-index: 3;
		outline: 0;
		box-shadow: none
	}

	.page-item:first-child .page-link {
		margin-left: 0;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px
	}

	.page-item:last-child .page-link {
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px
	}

	.page-item.active .page-link {
		z-index: 3;
		color: #fff;
		background-color: #6576ff;
		border-color: #6576ff
	}

	.page-item.disabled .page-link {
		color: #dbdfea;
		pointer-events: none;
		cursor: auto;
		background-color: #fff;
		border-color: #e5e9f2
	}

	.pagination-lg .page-link {
		padding: .5625rem .75rem;
		font-size: 1.25rem;
		line-height: 1.5
	}

	.pagination-lg .page-item:first-child .page-link {
		border-top-left-radius: 5px;
		border-bottom-left-radius: 5px
	}

	.pagination-lg .page-item:last-child .page-link {
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px
	}

	.pagination-sm .page-link {
		padding: .4375rem .5rem;
		font-size: .75rem;
		line-height: 1.5
	}

	.pagination-sm .page-item:first-child .page-link {
		border-top-left-radius: 3px;
		border-bottom-left-radius: 3px
	}

	.pagination-sm .page-item:last-child .page-link {
		border-top-right-radius: 3px;
		border-bottom-right-radius: 3px
	}

	.badge {
		display: inline-block;
		padding: 0 .375rem;
		font-size: .675rem;
		font-weight: 500;
		line-height: 1;
		text-align: center;
		white-space: nowrap;
		vertical-align: baseline;
		border-radius: 3px;
		transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
	}

	@media (prefers-reduced-motion: reduce) {
		.badge {
			transition: none
		}
	}

	a.badge:hover,
	a.badge:focus {
		text-decoration: none
	}

	.badge:empty {
		display: none
	}

	.btn .badge,
	.dual-listbox .dual-listbox__button .badge {
		position: relative;
		top: -1px
	}

	.badge-pill {
		padding-right: .5rem;
		padding-left: .5rem;
		border-radius: 10rem
	}

	.badge-primary {
		color: #fff;
		background-color: #6576ff
	}

	a.badge-primary:hover,
	a.badge-primary:focus {
		color: #fff;
		background-color: #3249ff
	}

	a.badge-primary:focus,
	a.badge-primary.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(101, 118, 255, 0.5)
	}

	.badge-secondary {
		color: #fff;
		background-color: #364a63
	}

	a.badge-secondary:hover,
	a.badge-secondary:focus {
		color: #fff;
		background-color: #243142
	}

	a.badge-secondary:focus,
	a.badge-secondary.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(54, 74, 99, 0.5)
	}

	.badge-success {
		color: #fff;
		background-color: #1ee0ac
	}

	a.badge-success:hover,
	a.badge-success:focus {
		color: #fff;
		background-color: #18b389
	}

	a.badge-success:focus,
	a.badge-success.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(30, 224, 172, 0.5)
	}

	.badge-info {
		color: #fff;
		background-color: #09c2de
	}

	a.badge-info:hover,
	a.badge-info:focus {
		color: #fff;
		background-color: #0797ad
	}

	a.badge-info:focus,
	a.badge-info.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(9, 194, 222, 0.5)
	}

	.badge-warning {
		color: #fff;
		background-color: #f4bd0e
	}

	a.badge-warning:hover,
	a.badge-warning:focus {
		color: #fff;
		background-color: #c69909
	}

	a.badge-warning:focus,
	a.badge-warning.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(244, 189, 14, 0.5)
	}

	.badge-danger {
		color: #fff;
		background-color: #e85347
	}

	a.badge-danger:hover,
	a.badge-danger:focus {
		color: #fff;
		background-color: #e02b1c
	}

	a.badge-danger:focus,
	a.badge-danger.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(232, 83, 71, 0.5)
	}

	.badge-dark {
		color: #fff;
		background-color: #1c2b46
	}

	a.badge-dark:hover,
	a.badge-dark:focus {
		color: #fff;
		background-color: #0d1522
	}

	a.badge-dark:focus,
	a.badge-dark.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(28, 43, 70, 0.5)
	}

	.badge-gray {
		color: #fff;
		background-color: #8091a7
	}

	a.badge-gray:hover,
	a.badge-gray:focus {
		color: #fff;
		background-color: #647790
	}

	a.badge-gray:focus,
	a.badge-gray.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(128, 145, 167, 0.5)
	}

	.badge-light {
		color: #101924;
		background-color: #e5e9f2
	}

	a.badge-light:hover,
	a.badge-light:focus {
		color: #101924;
		background-color: #c3cce1
	}

	a.badge-light:focus,
	a.badge-light.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(229, 233, 242, 0.5)
	}

	.badge-lighter {
		color: #101924;
		background-color: #f5f6fa
	}

	a.badge-lighter:hover,
	a.badge-lighter:focus {
		color: #101924;
		background-color: #d3d7e9
	}

	a.badge-lighter:focus,
	a.badge-lighter.focus {
		outline: 0;
		box-shadow: 0 0 0 .2rem rgba(245, 246, 250, 0.5)
	}

	.jumbotron {
		padding: 2rem 1rem;
		margin-bottom: 2rem;
		background-color: #e9ecef;
		border-radius: 5px
	}

	@media (min-width: 576px) {
		.jumbotron {
			padding: 4rem 2rem
		}
	}

	.jumbotron-fluid {
		padding-right: 0;
		padding-left: 0;
		border-radius: 0
	}

	.alert {
		position: relative;
		padding: 1rem 1.25rem;
		margin-bottom: 2rem;
		border: 1px solid transparent;
		border-radius: 4px
	}

	.alert-heading {
		color: inherit
	}

	.alert-link {
		font-weight: 700
	}

	.alert-dismissible {
		padding-right: 4rem
	}

	.alert-dismissible .close {
		position: absolute;
		top: 0;
		right: 0;
		padding: 1rem 1.25rem;
		color: inherit
	}

	.alert-primary {
		color: #5563d6;
		background-color: #edefff;
		border-color: #c8ceff
	}

	.alert-primary hr {
		border-top-color: #afb7ff
	}

	.alert-primary .alert-link {
		color: #3041c8
	}

	.alert-secondary {
		color: #2d3e53;
		background-color: #e7e9ec;
		border-color: #b7bec7
	}

	.alert-secondary hr {
		border-top-color: #a9b1bc
	}

	.alert-secondary .alert-link {
		color: #1b2532
	}

	.alert-success {
		color: #19bc90;
		background-color: #e4fbf5;
		border-color: #aef4e1
	}

	.alert-success hr {
		border-top-color: #98f1d9
	}

	.alert-success .alert-link {
		color: #138f6e
	}

	.alert-info {
		color: #08a3ba;
		background-color: #e1f8fb;
		border-color: #a6e9f3
	}

	.alert-info hr {
		border-top-color: #90e3f0
	}

	.alert-info .alert-link {
		color: #067889
	}

	.alert-warning {
		color: #cd9f0c;
		background-color: #fef7e2;
		border-color: #fbe7a8
	}

	.alert-warning hr {
		border-top-color: #fae090
	}

	.alert-warning .alert-link {
		color: #9d7a09
	}

	.alert-danger {
		color: #c3463c;
		background-color: #fceae9;
		border-color: #f7c1bd
	}

	.alert-danger hr {
		border-top-color: #f4aca6
	}

	.alert-danger .alert-link {
		color: #9c3830
	}

	.alert-dark {
		color: #18243b;
		background-color: #e4e6e9;
		border-color: #adb3bc
	}

	.alert-dark hr {
		border-top-color: #9fa6b1
	}

	.alert-dark .alert-link {
		color: #090e17
	}

	.alert-gray {
		color: #6c7a8c;
		background-color: #f0f2f4;
		border-color: #d1d7df
	}

	.alert-gray hr {
		border-top-color: #c2cad5
	}

	.alert-gray .alert-link {
		color: #56616f
	}

	.alert-light {
		color: #c0c4cb;
		background-color: #fcfcfd;
		border-color: #f6f7fa
	}

	.alert-light hr {
		border-top-color: #e6e8f1
	}

	.alert-light .alert-link {
		color: #a4aab4
	}

	.alert-lighter {
		color: #cecfd2;
		background-color: #fefefe;
		border-color: #fbfcfd
	}

	.alert-lighter hr {
		border-top-color: #eaeff5
	}

	.alert-lighter .alert-link {
		color: #b3b5ba
	}

	@keyframes progress-bar-stripes {
		from {
			background-position: .5rem 0
		}

		to {
			background-position: 0 0
		}
	}

	.progress {
		display: flex;
		height: .5rem;
		overflow: hidden;
		line-height: 0;
		font-size: .75rem;
		background-color: #f5f6fa;
		border-radius: 2px
	}

	.progress-bar {
		display: flex;
		flex-direction: column;
		justify-content: center;
		overflow: hidden;
		color: #fff;
		text-align: center;
		white-space: nowrap;
		background-color: #6576ff;
		transition: width 0.6s ease
	}

	@media (prefers-reduced-motion: reduce) {
		.progress-bar {
			transition: none
		}
	}

	.progress-bar-striped {
		background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
		background-size: .5rem .5rem
	}

	.progress-bar-animated {
		animation: 1s linear infinite progress-bar-stripes
	}

	@media (prefers-reduced-motion: reduce) {
		.progress-bar-animated {
			animation: none
		}
	}

	.media {
		display: flex;
		align-items: flex-start
	}

	.media-body {
		flex: 1
	}

	.list-group {
		display: flex;
		flex-direction: column;
		padding-left: 0;
		margin-bottom: 0;
		border-radius: 4px
	}

	.list-group-item-action {
		width: 100%;
		color: #495057;
		text-align: inherit
	}

	.list-group-item-action:hover,
	.list-group-item-action:focus {
		z-index: 1;
		color: #495057;
		text-decoration: none;
		background-color: #f8f9fa
	}

	.list-group-item-action:active {
		color: #526484;
		background-color: #e9ecef
	}

	.list-group-item {
		position: relative;
		display: block;
		padding: .75rem 1.25rem;
		background-color: #fff;
		border: 1px solid rgba(0, 0, 0, 0.125)
	}

	.list-group-item:first-child {
		border-top-left-radius: inherit;
		border-top-right-radius: inherit
	}

	.list-group-item:last-child {
		border-bottom-right-radius: inherit;
		border-bottom-left-radius: inherit
	}

	.list-group-item.disabled,
	.list-group-item:disabled {
		color: #6c757d;
		pointer-events: none;
		background-color: #fff
	}

	.list-group-item.active {
		z-index: 2;
		color: #fff;
		background-color: #559bfb;
		border-color: #559bfb
	}

	.list-group-item+.list-group-item {
		border-top-width: 0
	}

	.list-group-item+.list-group-item.active {
		margin-top: -1px;
		border-top-width: 1px
	}

	.list-group-horizontal {
		flex-direction: row
	}

	.list-group-horizontal>.list-group-item:first-child {
		border-bottom-left-radius: 4px;
		border-top-right-radius: 0
	}

	.list-group-horizontal>.list-group-item:last-child {
		border-top-right-radius: 4px;
		border-bottom-left-radius: 0
	}

	.list-group-horizontal>.list-group-item.active {
		margin-top: 0
	}

	.list-group-horizontal>.list-group-item+.list-group-item {
		border-top-width: 1px;
		border-left-width: 0
	}

	.list-group-horizontal>.list-group-item+.list-group-item.active {
		margin-left: -1px;
		border-left-width: 1px
	}

	@media (min-width: 576px) {
		.list-group-horizontal-sm {
			flex-direction: row
		}

		.list-group-horizontal-sm>.list-group-item:first-child {
			border-bottom-left-radius: 4px;
			border-top-right-radius: 0
		}

		.list-group-horizontal-sm>.list-group-item:last-child {
			border-top-right-radius: 4px;
			border-bottom-left-radius: 0
		}

		.list-group-horizontal-sm>.list-group-item.active {
			margin-top: 0
		}

		.list-group-horizontal-sm>.list-group-item+.list-group-item {
			border-top-width: 1px;
			border-left-width: 0
		}

		.list-group-horizontal-sm>.list-group-item+.list-group-item.active {
			margin-left: -1px;
			border-left-width: 1px
		}
	}

	@media (min-width: 768px) {
		.list-group-horizontal-md {
			flex-direction: row
		}

		.list-group-horizontal-md>.list-group-item:first-child {
			border-bottom-left-radius: 4px;
			border-top-right-radius: 0
		}

		.list-group-horizontal-md>.list-group-item:last-child {
			border-top-right-radius: 4px;
			border-bottom-left-radius: 0
		}

		.list-group-horizontal-md>.list-group-item.active {
			margin-top: 0
		}

		.list-group-horizontal-md>.list-group-item+.list-group-item {
			border-top-width: 1px;
			border-left-width: 0
		}

		.list-group-horizontal-md>.list-group-item+.list-group-item.active {
			margin-left: -1px;
			border-left-width: 1px
		}
	}

	@media (min-width: 992px) {
		.list-group-horizontal-lg {
			flex-direction: row
		}

		.list-group-horizontal-lg>.list-group-item:first-child {
			border-bottom-left-radius: 4px;
			border-top-right-radius: 0
		}

		.list-group-horizontal-lg>.list-group-item:last-child {
			border-top-right-radius: 4px;
			border-bottom-left-radius: 0
		}

		.list-group-horizontal-lg>.list-group-item.active {
			margin-top: 0
		}

		.list-group-horizontal-lg>.list-group-item+.list-group-item {
			border-top-width: 1px;
			border-left-width: 0
		}

		.list-group-horizontal-lg>.list-group-item+.list-group-item.active {
			margin-left: -1px;
			border-left-width: 1px
		}
	}

	@media (min-width: 1200px) {
		.list-group-horizontal-xl {
			flex-direction: row
		}

		.list-group-horizontal-xl>.list-group-item:first-child {
			border-bottom-left-radius: 4px;
			border-top-right-radius: 0
		}

		.list-group-horizontal-xl>.list-group-item:last-child {
			border-top-right-radius: 4px;
			border-bottom-left-radius: 0
		}

		.list-group-horizontal-xl>.list-group-item.active {
			margin-top: 0
		}

		.list-group-horizontal-xl>.list-group-item+.list-group-item {
			border-top-width: 1px;
			border-left-width: 0
		}

		.list-group-horizontal-xl>.list-group-item+.list-group-item.active {
			margin-left: -1px;
			border-left-width: 1px
		}
	}

	@media (min-width: 1540px) {
		.list-group-horizontal-xxl {
			flex-direction: row
		}

		.list-group-horizontal-xxl>.list-group-item:first-child {
			border-bottom-left-radius: 4px;
			border-top-right-radius: 0
		}

		.list-group-horizontal-xxl>.list-group-item:last-child {
			border-top-right-radius: 4px;
			border-bottom-left-radius: 0
		}

		.list-group-horizontal-xxl>.list-group-item.active {
			margin-top: 0
		}

		.list-group-horizontal-xxl>.list-group-item+.list-group-item {
			border-top-width: 1px;
			border-left-width: 0
		}

		.list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
			margin-left: -1px;
			border-left-width: 1px
		}
	}

	.list-group-flush {
		border-radius: 0
	}

	.list-group-flush>.list-group-item {
		border-width: 0 0 1px
	}

	.list-group-flush>.list-group-item:last-child {
		border-bottom-width: 0
	}

	.list-group-item-primary {
		color: #353d85;
		background-color: #d4d9ff
	}

	.list-group-item-primary.list-group-item-action:hover,
	.list-group-item-primary.list-group-item-action:focus {
		color: #353d85;
		background-color: #bbc2ff
	}

	.list-group-item-primary.list-group-item-action.active {
		color: #fff;
		background-color: #353d85;
		border-color: #353d85
	}

	.list-group-item-secondary {
		color: #1c2633;
		background-color: #c7ccd3
	}

	.list-group-item-secondary.list-group-item-action:hover,
	.list-group-item-secondary.list-group-item-action:focus {
		color: #1c2633;
		background-color: #b9bfc8
	}

	.list-group-item-secondary.list-group-item-action.active {
		color: #fff;
		background-color: #1c2633;
		border-color: #1c2633
	}

	.list-group-item-success {
		color: #107459;
		background-color: #c0f6e8
	}

	.list-group-item-success.list-group-item-action:hover,
	.list-group-item-success.list-group-item-action:focus {
		color: #107459;
		background-color: #aaf3e0
	}

	.list-group-item-success.list-group-item-action.active {
		color: #fff;
		background-color: #107459;
		border-color: #107459
	}

	.list-group-item-info {
		color: #056573;
		background-color: #baeef6
	}

	.list-group-item-info.list-group-item-action:hover,
	.list-group-item-info.list-group-item-action:focus {
		color: #056573;
		background-color: #a3e8f3
	}

	.list-group-item-info.list-group-item-action.active {
		color: #fff;
		background-color: #056573;
		border-color: #056573
	}

	.list-group-item-warning {
		color: #7f6207;
		background-color: #fcedbc
	}

	.list-group-item-warning.list-group-item-action:hover,
	.list-group-item-warning.list-group-item-action:focus {
		color: #7f6207;
		background-color: #fbe6a4
	}

	.list-group-item-warning.list-group-item-action.active {
		color: #fff;
		background-color: #7f6207;
		border-color: #7f6207
	}

	.list-group-item-danger {
		color: #792b25;
		background-color: #f9cfcb
	}

	.list-group-item-danger.list-group-item-action:hover,
	.list-group-item-danger.list-group-item-action:focus {
		color: #792b25;
		background-color: #f6bab4
	}

	.list-group-item-danger.list-group-item-action.active {
		color: #fff;
		background-color: #792b25;
		border-color: #792b25
	}

	.list-group-item-dark {
		color: #0f1624;
		background-color: #bfc4cb
	}

	.list-group-item-dark.list-group-item-action:hover,
	.list-group-item-dark.list-group-item-action:focus {
		color: #0f1624;
		background-color: #b1b7c0
	}

	.list-group-item-dark.list-group-item-action.active {
		color: #fff;
		background-color: #0f1624;
		border-color: #0f1624
	}

	.list-group-item-gray {
		color: #434b57;
		background-color: #dbe0e6
	}

	.list-group-item-gray.list-group-item-action:hover,
	.list-group-item-gray.list-group-item-action:focus {
		color: #434b57;
		background-color: #ccd3dc
	}

	.list-group-item-gray.list-group-item-action.active {
		color: #fff;
		background-color: #434b57;
		border-color: #434b57
	}

	.list-group-item-light {
		color: #77797e;
		background-color: #f8f9fb
	}

	.list-group-item-light.list-group-item-action:hover,
	.list-group-item-light.list-group-item-action:focus {
		color: #77797e;
		background-color: #e8ebf2
	}

	.list-group-item-light.list-group-item-action.active {
		color: #fff;
		background-color: #77797e;
		border-color: #77797e
	}

	.list-group-item-lighter {
		color: #7f8082;
		background-color: #fcfcfe
	}

	.list-group-item-lighter.list-group-item-action:hover,
	.list-group-item-lighter.list-group-item-action:focus {
		color: #7f8082;
		background-color: #e9e9f8
	}

	.list-group-item-lighter.list-group-item-action.active {
		color: #fff;
		background-color: #7f8082;
		border-color: #7f8082
	}

	.close {
		float: right;
		font-size: 1.5rem;
		font-weight: 700;
		line-height: 1;
		color: #000;
		text-shadow: 0 1px 0 #fff;
		opacity: .5
	}

	.close:hover {
		color: #000;
		text-decoration: none
	}

	.close:not(:disabled):not(.disabled):hover,
	.close:not(:disabled):not(.disabled):focus {
		opacity: .75
	}

	button.close {
		padding: 0;
		background-color: transparent;
		border: 0
	}

	a.close.disabled {
		pointer-events: none
	}

	.toast {
		flex-basis: 350px;
		max-width: 350px;
		font-size: .875rem;
		background-color: rgba(255, 255, 255, 0.85);
		background-clip: padding-box;
		border: 1px solid rgba(0, 0, 0, 0.1);
		box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
		opacity: 0;
		border-radius: .25rem
	}

	.toast:not(:last-child) {
		margin-bottom: .75rem
	}

	.toast.showing {
		opacity: 1
	}

	.toast.show {
		display: block;
		opacity: 1
	}

	.toast.hide {
		display: none
	}

	.toast-header {
		display: flex;
		align-items: center;
		padding: .25rem .75rem;
		color: #6c757d;
		background-color: rgba(255, 255, 255, 0.85);
		background-clip: padding-box;
		border-bottom: 1px solid rgba(0, 0, 0, 0.05);
		border-top-left-radius: calc(.25rem - 1px);
		border-top-right-radius: calc(.25rem - 1px)
	}

	.toast-body {
		padding: .75rem
	}

	.modal-open {
		overflow: hidden
	}

	.modal-open .modal {
		overflow-x: hidden;
		overflow-y: auto
	}

	.modal {
		position: fixed;
		top: 0;
		left: 0;
		z-index: 1050;
		display: none;
		width: 100%;
		height: 100%;
		overflow: hidden;
		outline: 0
	}

	.modal-dialog {
		position: relative;
		width: auto;
		margin: .5rem;
		pointer-events: none
	}

	.modal.fade .modal-dialog {
		transition: transform 0.3s ease-out;
		transform: translate(0, -30px)
	}

	@media (prefers-reduced-motion: reduce) {
		.modal.fade .modal-dialog {
			transition: none
		}
	}

	.modal.show .modal-dialog {
		transform: none !important
	}

	.modal.modal-static .modal-dialog {
		transform: scale(0.95)
	}

	.modal-dialog-scrollable {
		display: flex;
		max-height: calc(100% - 1rem)
	}

	.modal-dialog-scrollable .modal-content {
		max-height: calc(100vh - 1rem);
		overflow: hidden
	}

	.modal-dialog-scrollable .modal-header,
	.modal-dialog-scrollable .modal-footer {
		flex-shrink: 0
	}

	.modal-dialog-scrollable .modal-body {
		overflow-y: auto
	}

	.modal-dialog-centered {
		display: flex;
		align-items: center;
		min-height: calc(100% - 1rem)
	}

	.modal-dialog-centered::before {
		display: block;
		height: calc(100vh - 1rem);
		height: min-content;
		content: ""
	}

	.modal-dialog-centered.modal-dialog-scrollable {
		flex-direction: column;
		justify-content: center;
		height: 100%
	}

	.modal-dialog-centered.modal-dialog-scrollable .modal-content {
		max-height: none
	}

	.modal-dialog-centered.modal-dialog-scrollable::before {
		content: none
	}

	.modal-content {
		position: relative;
		display: flex;
		flex-direction: column;
		width: 100%;
		pointer-events: auto;
		background-color: #fff;
		background-clip: padding-box;
		border: 0 solid rgba(0, 0, 0, 0);
		border-radius: 5px;
		outline: 0
	}

	.modal-backdrop {
		position: fixed;
		top: 0;
		left: 0;
		z-index: 1040;
		width: 100vw;
		height: 100vh;
		background-color: #364a63
	}

	.modal-backdrop.fade {
		opacity: 0
	}

	.modal-backdrop.show {
		opacity: .5
	}

	.modal-header {
		display: flex;
		align-items: flex-start;
		justify-content: space-between;
		padding: 1rem 1.25rem;
		border-bottom: 1px solid #dbdfea;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px
	}

	.modal-header .close {
		padding: 1rem 1.25rem;
		margin: -1rem -1.25rem -1rem auto
	}

	.modal-title {
		margin-bottom: 0;
		line-height: 1.5
	}

	.modal-body {
		position: relative;
		flex: 1 1 auto;
		padding: 1.25rem
	}

	.modal-footer {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		justify-content: flex-end;
		padding: 1rem;
		border-top: 1px solid #dbdfea;
		border-bottom-right-radius: 4px;
		border-bottom-left-radius: 4px
	}

	.modal-footer>* {
		margin: .25rem
	}

	.modal-scrollbar-measure {
		position: absolute;
		top: -9999px;
		width: 50px;
		height: 50px;
		overflow: scroll
	}

	@media (min-width: 576px) {
		.modal-dialog {
			max-width: 520px;
			margin: 1.75rem auto
		}

		.modal-dialog-scrollable {
			max-height: calc(100% - 3.5rem)
		}

		.modal-dialog-scrollable .modal-content {
			max-height: calc(100vh - 3.5rem)
		}

		.modal-dialog-centered {
			min-height: calc(100% - 3.5rem)
		}

		.modal-dialog-centered::before {
			height: calc(100vh - 3.5rem);
			height: min-content
		}

		.modal-sm {
			max-width: 360px
		}
	}

	@media (min-width: 992px) {

		.modal-lg,
		.modal-xl {
			max-width: 720px
		}
	}

	@media (min-width: 1200px) {
		.modal-xl {
			max-width: 980px
		}
	}

	.tooltip {
		position: absolute;
		z-index: 1070;
		display: block;
		margin: 0;
		font-family: Roboto, sans-serif, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
		font-style: normal;
		font-weight: 400;
		line-height: 1.65;
		text-align: left;
		text-align: start;
		text-decoration: none;
		text-shadow: none;
		text-transform: none;
		letter-spacing: normal;
		word-break: normal;
		word-spacing: normal;
		white-space: normal;
		line-break: auto;
		font-size: .8125rem;
		word-wrap: break-word;
		opacity: 0
	}

	.tooltip.show {
		opacity: .9
	}

	.tooltip .arrow {
		position: absolute;
		display: block;
		width: .8rem;
		height: .4rem
	}

	.tooltip .arrow::before {
		position: absolute;
		content: "";
		border-color: transparent;
		border-style: solid
	}

	.bs-tooltip-top,
	.bs-tooltip-auto[x-placement^="top"] {
		padding: .4rem 0
	}

	.bs-tooltip-top .arrow,
	.bs-tooltip-auto[x-placement^="top"] .arrow {
		bottom: 0
	}

	.bs-tooltip-top .arrow::before,
	.bs-tooltip-auto[x-placement^="top"] .arrow::before {
		top: 0;
		border-width: .4rem .4rem 0;
		border-top-color: #1f2b3a
	}

	.bs-tooltip-right,
	.bs-tooltip-auto[x-placement^="right"] {
		padding: 0 .4rem
	}

	.bs-tooltip-right .arrow,
	.bs-tooltip-auto[x-placement^="right"] .arrow {
		left: 0;
		width: .4rem;
		height: .8rem
	}

	.bs-tooltip-right .arrow::before,
	.bs-tooltip-auto[x-placement^="right"] .arrow::before {
		right: 0;
		border-width: .4rem .4rem .4rem 0;
		border-right-color: #1f2b3a
	}

	.bs-tooltip-bottom,
	.bs-tooltip-auto[x-placement^="bottom"] {
		padding: .4rem 0
	}

	.bs-tooltip-bottom .arrow,
	.bs-tooltip-auto[x-placement^="bottom"] .arrow {
		top: 0
	}

	.bs-tooltip-bottom .arrow::before,
	.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
		bottom: 0;
		border-width: 0 .4rem .4rem;
		border-bottom-color: #1f2b3a
	}

	.bs-tooltip-left,
	.bs-tooltip-auto[x-placement^="left"] {
		padding: 0 .4rem
	}

	.bs-tooltip-left .arrow,
	.bs-tooltip-auto[x-placement^="left"] .arrow {
		right: 0;
		width: .4rem;
		height: .8rem
	}

	.bs-tooltip-left .arrow::before,
	.bs-tooltip-auto[x-placement^="left"] .arrow::before {
		left: 0;
		border-width: .4rem 0 .4rem .4rem;
		border-left-color: #1f2b3a
	}

	.tooltip-inner {
		max-width: 200px;
		padding: .25rem .75rem;
		color: #fff;
		text-align: center;
		background-color: #1f2b3a;
		border-radius: 3px
	}

	.popover {
		position: absolute;
		top: 0;
		left: 0;
		z-index: 1060;
		display: block;
		max-width: 276px;
		font-family: Roboto, sans-serif, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
		font-style: normal;
		font-weight: 400;
		line-height: 1.65;
		text-align: left;
		text-align: start;
		text-decoration: none;
		text-shadow: none;
		text-transform: none;
		letter-spacing: normal;
		word-break: normal;
		word-spacing: normal;
		white-space: normal;
		line-break: auto;
		font-size: .875rem;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid rgba(0, 0, 0, 0.2);
		border-radius: 5px
	}

	.popover .arrow {
		position: absolute;
		display: block;
		width: 1rem;
		height: .5rem;
		margin: 0 5px
	}

	.popover .arrow::before,
	.popover .arrow::after {
		position: absolute;
		display: block;
		content: "";
		border-color: transparent;
		border-style: solid
	}

	.bs-popover-top,
	.bs-popover-auto[x-placement^="top"] {
		margin-bottom: .5rem
	}

	.bs-popover-top>.arrow,
	.bs-popover-auto[x-placement^="top"]>.arrow {
		bottom: calc(-.5rem - 1px)
	}

	.bs-popover-top>.arrow::before,
	.bs-popover-auto[x-placement^="top"]>.arrow::before {
		bottom: 0;
		border-width: .5rem .5rem 0;
		border-top-color: rgba(0, 0, 0, 0.25)
	}

	.bs-popover-top>.arrow::after,
	.bs-popover-auto[x-placement^="top"]>.arrow::after {
		bottom: 1px;
		border-width: .5rem .5rem 0;
		border-top-color: #fff
	}

	.bs-popover-right,
	.bs-popover-auto[x-placement^="right"] {
		margin-left: .5rem
	}

	.bs-popover-right>.arrow,
	.bs-popover-auto[x-placement^="right"]>.arrow {
		left: calc(-.5rem - 1px);
		width: .5rem;
		height: 1rem;
		margin: 5px 0
	}

	.bs-popover-right>.arrow::before,
	.bs-popover-auto[x-placement^="right"]>.arrow::before {
		left: 0;
		border-width: .5rem .5rem .5rem 0;
		border-right-color: rgba(0, 0, 0, 0.25)
	}

	.bs-popover-right>.arrow::after,
	.bs-popover-auto[x-placement^="right"]>.arrow::after {
		left: 1px;
		border-width: .5rem .5rem .5rem 0;
		border-right-color: #fff
	}

	.bs-popover-bottom,
	.bs-popover-auto[x-placement^="bottom"] {
		margin-top: .5rem
	}

	.bs-popover-bottom>.arrow,
	.bs-popover-auto[x-placement^="bottom"]>.arrow {
		top: calc(-.5rem - 1px)
	}

	.bs-popover-bottom>.arrow::before,
	.bs-popover-auto[x-placement^="bottom"]>.arrow::before {
		top: 0;
		border-width: 0 .5rem .5rem .5rem;
		border-bottom-color: rgba(0, 0, 0, 0.25)
	}

	.bs-popover-bottom>.arrow::after,
	.bs-popover-auto[x-placement^="bottom"]>.arrow::after {
		top: 1px;
		border-width: 0 .5rem .5rem .5rem;
		border-bottom-color: #fff
	}

	.bs-popover-bottom .popover-header::before,
	.bs-popover-auto[x-placement^="bottom"] .popover-header::before {
		position: absolute;
		top: 0;
		left: 50%;
		display: block;
		width: 1rem;
		margin-left: -.5rem;
		content: "";
		border-bottom: 1px solid #f7f7f7
	}

	.bs-popover-left,
	.bs-popover-auto[x-placement^="left"] {
		margin-right: .5rem
	}

	.bs-popover-left>.arrow,
	.bs-popover-auto[x-placement^="left"]>.arrow {
		right: calc(-.5rem - 1px);
		width: .5rem;
		height: 1rem;
		margin: 5px 0
	}

	.bs-popover-left>.arrow::before,
	.bs-popover-auto[x-placement^="left"]>.arrow::before {
		right: 0;
		border-width: .5rem 0 .5rem .5rem;
		border-left-color: rgba(0, 0, 0, 0.25)
	}

	.bs-popover-left>.arrow::after,
	.bs-popover-auto[x-placement^="left"]>.arrow::after {
		right: 1px;
		border-width: .5rem 0 .5rem .5rem;
		border-left-color: #fff
	}

	.popover-header {
		padding: .5rem .75rem;
		margin-bottom: 0;
		font-size: .875rem;
		background-color: #f7f7f7;
		border-bottom: 1px solid #ebebeb;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px
	}

	.popover-header:empty {
		display: none
	}

	.popover-body {
		padding: .5rem .75rem;
		color: #526484
	}

	.carousel {
		position: relative
	}

	.carousel.pointer-event {
		touch-action: pan-y
	}

	.carousel-inner {
		position: relative;
		width: 100%;
		overflow: hidden
	}

	.carousel-inner::after {
		display: block;
		clear: both;
		content: ""
	}

	.carousel-item {
		position: relative;
		display: none;
		float: left;
		width: 100%;
		margin-right: -100%;
		backface-visibility: hidden;
		transition: transform .6s ease-in-out
	}

	@media (prefers-reduced-motion: reduce) {
		.carousel-item {
			transition: none
		}
	}

	.carousel-item.active,
	.carousel-item-next,
	.carousel-item-prev {
		display: block
	}

	.carousel-item-next:not(.carousel-item-left),
	.active.carousel-item-right {
		transform: translateX(100%)
	}

	.carousel-item-prev:not(.carousel-item-right),
	.active.carousel-item-left {
		transform: translateX(-100%)
	}

	.carousel-fade .carousel-item {
		opacity: 0;
		transition-property: opacity;
		transform: none
	}

	.carousel-fade .carousel-item.active,
	.carousel-fade .carousel-item-next.carousel-item-left,
	.carousel-fade .carousel-item-prev.carousel-item-right {
		z-index: 1;
		opacity: 1
	}

	.carousel-fade .active.carousel-item-left,
	.carousel-fade .active.carousel-item-right {
		z-index: 0;
		opacity: 0;
		transition: opacity 0s .6s
	}

	@media (prefers-reduced-motion: reduce) {

		.carousel-fade .active.carousel-item-left,
		.carousel-fade .active.carousel-item-right {
			transition: none
		}
	}

	.carousel-control-prev,
	.carousel-control-next {
		position: absolute;
		top: 0;
		bottom: 0;
		z-index: 1;
		display: flex;
		align-items: center;
		justify-content: center;
		width: 15%;
		color: #fff;
		text-align: center;
		opacity: .5;
		transition: opacity 0.15s ease
	}

	@media (prefers-reduced-motion: reduce) {

		.carousel-control-prev,
		.carousel-control-next {
			transition: none
		}
	}

	.carousel-control-prev:hover,
	.carousel-control-prev:focus,
	.carousel-control-next:hover,
	.carousel-control-next:focus {
		color: #fff;
		text-decoration: none;
		outline: 0;
		opacity: .9
	}

	.carousel-control-prev {
		left: 0
	}

	.carousel-control-next {
		right: 0
	}

	.carousel-control-prev-icon,
	.carousel-control-next-icon {
		display: inline-block;
		width: 20px;
		height: 20px;
		background: 50% / 100% 100% no-repeat
	}

	.carousel-control-prev-icon {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e")
	}

	.carousel-control-next-icon {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e")
	}

	.carousel-indicators {
		position: absolute;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 15;
		display: flex;
		justify-content: center;
		padding-left: 0;
		margin-right: 15%;
		margin-left: 15%;
		list-style: none
	}

	.carousel-indicators li {
		box-sizing: content-box;
		flex: 0 1 auto;
		width: 30px;
		height: 3px;
		margin-right: 3px;
		margin-left: 3px;
		text-indent: -999px;
		cursor: pointer;
		background-color: #fff;
		background-clip: padding-box;
		border-top: 10px solid transparent;
		border-bottom: 10px solid transparent;
		opacity: .5;
		transition: opacity 0.6s ease
	}

	@media (prefers-reduced-motion: reduce) {
		.carousel-indicators li {
			transition: none
		}
	}

	.carousel-indicators .active {
		opacity: 1
	}

	.carousel-caption {
		position: absolute;
		right: 15%;
		bottom: 20px;
		left: 15%;
		z-index: 10;
		padding-top: 20px;
		padding-bottom: 20px;
		color: #fff;
		text-align: center
	}

	@keyframes spinner-border {
		to {
			transform: rotate(360deg)
		}
	}

	.spinner-border {
		display: inline-block;
		width: 2rem;
		height: 2rem;
		vertical-align: text-bottom;
		border: .25em solid currentColor;
		border-right-color: transparent;
		border-radius: 50%;
		animation: .75s linear infinite spinner-border
	}

	.spinner-border-sm {
		width: 1rem;
		height: 1rem;
		border-width: .2em
	}

	@keyframes spinner-grow {
		0% {
			transform: scale(0)
		}

		50% {
			opacity: 1;
			transform: none
		}
	}

	.spinner-grow {
		display: inline-block;
		width: 2rem;
		height: 2rem;
		vertical-align: text-bottom;
		background-color: currentColor;
		border-radius: 50%;
		opacity: 0;
		animation: .75s linear infinite spinner-grow
	}

	.spinner-grow-sm {
		width: 1rem;
		height: 1rem
	}

	@media (prefers-reduced-motion: reduce) {

		.spinner-border,
		.spinner-grow {
			animation-duration: 1.5s
		}
	}

	.align-baseline {
		vertical-align: baseline !important
	}

	.align-top {
		vertical-align: top !important
	}

	.align-middle {
		vertical-align: middle !important
	}

	.align-bottom {
		vertical-align: bottom !important
	}

	.align-text-bottom {
		vertical-align: text-bottom !important
	}

	.align-text-top {
		vertical-align: text-top !important
	}

	.bg-primary {
		background-color: #6576ff !important
	}

	a.bg-primary:hover,
	a.bg-primary:focus,
	button.bg-primary:hover,
	button.bg-primary:focus {
		background-color: #3249ff !important
	}

	.bg-secondary {
		background-color: #364a63 !important
	}

	a.bg-secondary:hover,
	a.bg-secondary:focus,
	button.bg-secondary:hover,
	button.bg-secondary:focus {
		background-color: #243142 !important
	}

	.bg-success {
		background-color: #1ee0ac !important
	}

	a.bg-success:hover,
	a.bg-success:focus,
	button.bg-success:hover,
	button.bg-success:focus {
		background-color: #18b389 !important
	}

	.bg-info {
		background-color: #09c2de !important
	}

	a.bg-info:hover,
	a.bg-info:focus,
	button.bg-info:hover,
	button.bg-info:focus {
		background-color: #0797ad !important
	}

	.bg-warning {
		background-color: #f4bd0e !important
	}

	a.bg-warning:hover,
	a.bg-warning:focus,
	button.bg-warning:hover,
	button.bg-warning:focus {
		background-color: #c69909 !important
	}

	.bg-danger {
		background-color: #e85347 !important
	}

	a.bg-danger:hover,
	a.bg-danger:focus,
	button.bg-danger:hover,
	button.bg-danger:focus {
		background-color: #e02b1c !important
	}

	.bg-dark {
		background-color: #1c2b46 !important
	}

	a.bg-dark:hover,
	a.bg-dark:focus,
	button.bg-dark:hover,
	button.bg-dark:focus {
		background-color: #0d1522 !important
	}

	.bg-gray {
		background-color: #8091a7 !important
	}

	a.bg-gray:hover,
	a.bg-gray:focus,
	button.bg-gray:hover,
	button.bg-gray:focus {
		background-color: #647790 !important
	}

	.bg-light {
		background-color: #e5e9f2 !important
	}

	a.bg-light:hover,
	a.bg-light:focus,
	button.bg-light:hover,
	button.bg-light:focus {
		background-color: #c3cce1 !important
	}

	.bg-lighter,
	.dual-listbox .dual-listbox__item:hover {
		background-color: #f5f6fa !important
	}

	a.bg-lighter:hover,
	.dual-listbox a.dual-listbox__item:hover,
	a.bg-lighter:focus,
	.dual-listbox a.dual-listbox__item:focus:hover,
	button.bg-lighter:hover,
	.dual-listbox button.dual-listbox__item:hover,
	button.bg-lighter:focus,
	.dual-listbox button.dual-listbox__item:focus:hover {
		background-color: #d3d7e9 !important
	}

	.bg-white {
		background-color: #fff !important
	}

	.bg-transparent {
		background-color: transparent !important
	}

	.border {
		border: 1px solid #dbdfea !important
	}

	.border-top {
		border-top: 1px solid #dbdfea !important
	}

	.border-right {
		border-right: 1px solid #dbdfea !important
	}

	.border-bottom {
		border-bottom: 1px solid #dbdfea !important
	}

	.border-left {
		border-left: 1px solid #dbdfea !important
	}

	.border-0,
	.no-bdr {
		border: 0 !important
	}

	.border-top-0,
	.no-bdr-t,
	.no-bdr-y {
		border-top: 0 !important
	}

	.border-right-0,
	.no-bdr-r,
	.no-bdr-x {
		border-right: 0 !important
	}

	.border-bottom-0,
	.no-bdr-b,
	.no-bdr-y {
		border-bottom: 0 !important
	}

	.border-left-0,
	.no-bdr-l,
	.no-bdr-x {
		border-left: 0 !important
	}

	.border-primary {
		border-color: #6576ff !important
	}

	.border-secondary {
		border-color: #364a63 !important
	}

	.border-success {
		border-color: #1ee0ac !important
	}

	.border-info {
		border-color: #09c2de !important
	}

	.border-warning {
		border-color: #f4bd0e !important
	}

	.border-danger {
		border-color: #e85347 !important
	}

	.border-dark {
		border-color: #1c2b46 !important
	}

	.border-gray {
		border-color: #8091a7 !important
	}

	.border-light {
		border-color: #e5e9f2 !important
	}

	.border-lighter {
		border-color: #f5f6fa !important
	}

	.border-white {
		border-color: #fff !important
	}

	.rounded-sm {
		border-radius: 3px !important
	}

	.rounded {
		border-radius: 4px !important
	}

	.rounded-top {
		border-top-left-radius: 4px !important;
		border-top-right-radius: 4px !important
	}

	.rounded-right {
		border-top-right-radius: 4px !important;
		border-bottom-right-radius: 4px !important
	}

	.rounded-bottom {
		border-bottom-right-radius: 4px !important;
		border-bottom-left-radius: 4px !important
	}

	.rounded-left {
		border-top-left-radius: 4px !important;
		border-bottom-left-radius: 4px !important
	}

	.rounded-lg {
		border-radius: 5px !important
	}

	.rounded-circle {
		border-radius: 50% !important
	}

	.rounded-pill {
		border-radius: 1.5rem !important
	}

	.rounded-0 {
		border-radius: 0 !important
	}

	.clearfix::after {
		display: block;
		clear: both;
		content: ""
	}

	.d-none {
		display: none !important
	}

	.d-inline {
		display: inline !important
	}

	.d-inline-block {
		display: inline-block !important
	}

	.d-block {
		display: block !important
	}

	.d-table {
		display: table !important
	}

	.d-table-row {
		display: table-row !important
	}

	.d-table-cell {
		display: table-cell !important
	}

	.d-flex,
	.align-start,
	.align-end,
	.align-center,
	.justify-start,
	.justify-end,
	.justify-center,
	.justify-between,
	.justify-around,
	.between-start,
	.between-center,
	.center,
	.stretch {
		display: flex !important
	}

	.d-inline-flex {
		display: inline-flex !important
	}

	@media (min-width: 576px) {
		.d-sm-none {
			display: none !important
		}

		.d-sm-inline {
			display: inline !important
		}

		.d-sm-inline-block {
			display: inline-block !important
		}

		.d-sm-block {
			display: block !important
		}

		.d-sm-table {
			display: table !important
		}

		.d-sm-table-row {
			display: table-row !important
		}

		.d-sm-table-cell {
			display: table-cell !important
		}

		.d-sm-flex {
			display: flex !important
		}

		.d-sm-inline-flex {
			display: inline-flex !important
		}
	}

	@media (min-width: 768px) {
		.d-md-none {
			display: none !important
		}

		.d-md-inline {
			display: inline !important
		}

		.d-md-inline-block {
			display: inline-block !important
		}

		.d-md-block {
			display: block !important
		}

		.d-md-table {
			display: table !important
		}

		.d-md-table-row {
			display: table-row !important
		}

		.d-md-table-cell {
			display: table-cell !important
		}

		.d-md-flex {
			display: flex !important
		}

		.d-md-inline-flex {
			display: inline-flex !important
		}
	}

	@media (min-width: 992px) {
		.d-lg-none {
			display: none !important
		}

		.d-lg-inline {
			display: inline !important
		}

		.d-lg-inline-block {
			display: inline-block !important
		}

		.d-lg-block {
			display: block !important
		}

		.d-lg-table {
			display: table !important
		}

		.d-lg-table-row {
			display: table-row !important
		}

		.d-lg-table-cell {
			display: table-cell !important
		}

		.d-lg-flex {
			display: flex !important
		}

		.d-lg-inline-flex {
			display: inline-flex !important
		}
	}

	@media (min-width: 1200px) {
		.d-xl-none {
			display: none !important
		}

		.d-xl-inline {
			display: inline !important
		}

		.d-xl-inline-block {
			display: inline-block !important
		}

		.d-xl-block {
			display: block !important
		}

		.d-xl-table {
			display: table !important
		}

		.d-xl-table-row {
			display: table-row !important
		}

		.d-xl-table-cell {
			display: table-cell !important
		}

		.d-xl-flex {
			display: flex !important
		}

		.d-xl-inline-flex {
			display: inline-flex !important
		}
	}

	@media (min-width: 1540px) {
		.d-xxl-none {
			display: none !important
		}

		.d-xxl-inline {
			display: inline !important
		}

		.d-xxl-inline-block {
			display: inline-block !important
		}

		.d-xxl-block {
			display: block !important
		}

		.d-xxl-table {
			display: table !important
		}

		.d-xxl-table-row {
			display: table-row !important
		}

		.d-xxl-table-cell {
			display: table-cell !important
		}

		.d-xxl-flex {
			display: flex !important
		}

		.d-xxl-inline-flex {
			display: inline-flex !important
		}
	}

	@media print {
		.d-print-none {
			display: none !important
		}

		.d-print-inline {
			display: inline !important
		}

		.d-print-inline-block {
			display: inline-block !important
		}

		.d-print-block {
			display: block !important
		}

		.d-print-table {
			display: table !important
		}

		.d-print-table-row {
			display: table-row !important
		}

		.d-print-table-cell {
			display: table-cell !important
		}

		.d-print-flex {
			display: flex !important
		}

		.d-print-inline-flex {
			display: inline-flex !important
		}
	}

	.embed-responsive {
		position: relative;
		display: block;
		width: 100%;
		padding: 0;
		overflow: hidden
	}

	.embed-responsive::before {
		display: block;
		content: ""
	}

	.embed-responsive .embed-responsive-item,
	.embed-responsive iframe,
	.embed-responsive embed,
	.embed-responsive object,
	.embed-responsive video {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border: 0
	}

	.embed-responsive-21by9::before {
		padding-top: 42.85714%
	}

	.embed-responsive-16by9::before {
		padding-top: 56.25%
	}

	.embed-responsive-4by3::before {
		padding-top: 75%
	}

	.embed-responsive-1by1::before {
		padding-top: 100%
	}

	.flex-row {
		flex-direction: row !important
	}

	.flex-column {
		flex-direction: column !important
	}

	.flex-row-reverse {
		flex-direction: row-reverse !important
	}

	.flex-column-reverse {
		flex-direction: column-reverse !important
	}

	.flex-wrap {
		flex-wrap: wrap !important
	}

	.flex-nowrap {
		flex-wrap: nowrap !important
	}

	.flex-wrap-reverse {
		flex-wrap: wrap-reverse !important
	}

	.flex-fill {
		flex: 1 1 auto !important
	}

	.flex-grow-0 {
		flex-grow: 0 !important
	}

	.flex-grow-1 {
		flex-grow: 1 !important
	}

	.flex-shrink-0 {
		flex-shrink: 0 !important
	}

	.flex-shrink-1 {
		flex-shrink: 1 !important
	}

	.justify-content-start,
	.justify-start {
		justify-content: flex-start !important
	}

	.justify-content-end,
	.justify-end {
		justify-content: flex-end !important
	}

	.justify-content-center,
	.justify-center,
	.center {
		justify-content: center !important
	}

	.justify-content-between,
	.justify-between,
	.between-start,
	.between-center {
		justify-content: space-between !important
	}

	.justify-content-around,
	.justify-around {
		justify-content: space-around !important
	}

	.align-items-start,
	.align-start,
	.between-start {
		align-items: flex-start !important
	}

	.align-items-end,
	.align-end {
		align-items: flex-end !important
	}

	.align-items-center,
	.align-center,
	.between-center,
	.center {
		align-items: center !important
	}

	.align-items-baseline {
		align-items: baseline !important
	}

	.align-items-stretch,
	.stretch {
		align-items: stretch !important
	}

	.align-content-start {
		align-content: flex-start !important
	}

	.align-content-end {
		align-content: flex-end !important
	}

	.align-content-center {
		align-content: center !important
	}

	.align-content-between {
		align-content: space-between !important
	}

	.align-content-around {
		align-content: space-around !important
	}

	.align-content-stretch {
		align-content: stretch !important
	}

	.align-self-auto {
		align-self: auto !important
	}

	.align-self-start {
		align-self: flex-start !important
	}

	.align-self-end {
		align-self: flex-end !important
	}

	.align-self-center {
		align-self: center !important
	}

	.align-self-baseline {
		align-self: baseline !important
	}

	.align-self-stretch {
		align-self: stretch !important
	}

	@media (min-width: 576px) {
		.flex-sm-row {
			flex-direction: row !important
		}

		.flex-sm-column {
			flex-direction: column !important
		}

		.flex-sm-row-reverse {
			flex-direction: row-reverse !important
		}

		.flex-sm-column-reverse {
			flex-direction: column-reverse !important
		}

		.flex-sm-wrap {
			flex-wrap: wrap !important
		}

		.flex-sm-nowrap {
			flex-wrap: nowrap !important
		}

		.flex-sm-wrap-reverse {
			flex-wrap: wrap-reverse !important
		}

		.flex-sm-fill {
			flex: 1 1 auto !important
		}

		.flex-sm-grow-0 {
			flex-grow: 0 !important
		}

		.flex-sm-grow-1 {
			flex-grow: 1 !important
		}

		.flex-sm-shrink-0 {
			flex-shrink: 0 !important
		}

		.flex-sm-shrink-1 {
			flex-shrink: 1 !important
		}

		.justify-content-sm-start {
			justify-content: flex-start !important
		}

		.justify-content-sm-end {
			justify-content: flex-end !important
		}

		.justify-content-sm-center {
			justify-content: center !important
		}

		.justify-content-sm-between {
			justify-content: space-between !important
		}

		.justify-content-sm-around {
			justify-content: space-around !important
		}

		.align-items-sm-start {
			align-items: flex-start !important
		}

		.align-items-sm-end {
			align-items: flex-end !important
		}

		.align-items-sm-center {
			align-items: center !important
		}

		.align-items-sm-baseline {
			align-items: baseline !important
		}

		.align-items-sm-stretch {
			align-items: stretch !important
		}

		.align-content-sm-start {
			align-content: flex-start !important
		}

		.align-content-sm-end {
			align-content: flex-end !important
		}

		.align-content-sm-center {
			align-content: center !important
		}

		.align-content-sm-between {
			align-content: space-between !important
		}

		.align-content-sm-around {
			align-content: space-around !important
		}

		.align-content-sm-stretch {
			align-content: stretch !important
		}

		.align-self-sm-auto {
			align-self: auto !important
		}

		.align-self-sm-start {
			align-self: flex-start !important
		}

		.align-self-sm-end {
			align-self: flex-end !important
		}

		.align-self-sm-center {
			align-self: center !important
		}

		.align-self-sm-baseline {
			align-self: baseline !important
		}

		.align-self-sm-stretch {
			align-self: stretch !important
		}
	}

	@media (min-width: 768px) {
		.flex-md-row {
			flex-direction: row !important
		}

		.flex-md-column {
			flex-direction: column !important
		}

		.flex-md-row-reverse {
			flex-direction: row-reverse !important
		}

		.flex-md-column-reverse {
			flex-direction: column-reverse !important
		}

		.flex-md-wrap {
			flex-wrap: wrap !important
		}

		.flex-md-nowrap {
			flex-wrap: nowrap !important
		}

		.flex-md-wrap-reverse {
			flex-wrap: wrap-reverse !important
		}

		.flex-md-fill {
			flex: 1 1 auto !important
		}

		.flex-md-grow-0 {
			flex-grow: 0 !important
		}

		.flex-md-grow-1 {
			flex-grow: 1 !important
		}

		.flex-md-shrink-0 {
			flex-shrink: 0 !important
		}

		.flex-md-shrink-1 {
			flex-shrink: 1 !important
		}

		.justify-content-md-start {
			justify-content: flex-start !important
		}

		.justify-content-md-end {
			justify-content: flex-end !important
		}

		.justify-content-md-center {
			justify-content: center !important
		}

		.justify-content-md-between {
			justify-content: space-between !important
		}

		.justify-content-md-around {
			justify-content: space-around !important
		}

		.align-items-md-start {
			align-items: flex-start !important
		}

		.align-items-md-end {
			align-items: flex-end !important
		}

		.align-items-md-center {
			align-items: center !important
		}

		.align-items-md-baseline {
			align-items: baseline !important
		}

		.align-items-md-stretch {
			align-items: stretch !important
		}

		.align-content-md-start {
			align-content: flex-start !important
		}

		.align-content-md-end {
			align-content: flex-end !important
		}

		.align-content-md-center {
			align-content: center !important
		}

		.align-content-md-between {
			align-content: space-between !important
		}

		.align-content-md-around {
			align-content: space-around !important
		}

		.align-content-md-stretch {
			align-content: stretch !important
		}

		.align-self-md-auto {
			align-self: auto !important
		}

		.align-self-md-start {
			align-self: flex-start !important
		}

		.align-self-md-end {
			align-self: flex-end !important
		}

		.align-self-md-center {
			align-self: center !important
		}

		.align-self-md-baseline {
			align-self: baseline !important
		}

		.align-self-md-stretch {
			align-self: stretch !important
		}
	}

	@media (min-width: 992px) {
		.flex-lg-row {
			flex-direction: row !important
		}

		.flex-lg-column {
			flex-direction: column !important
		}

		.flex-lg-row-reverse {
			flex-direction: row-reverse !important
		}

		.flex-lg-column-reverse {
			flex-direction: column-reverse !important
		}

		.flex-lg-wrap {
			flex-wrap: wrap !important
		}

		.flex-lg-nowrap {
			flex-wrap: nowrap !important
		}

		.flex-lg-wrap-reverse {
			flex-wrap: wrap-reverse !important
		}

		.flex-lg-fill {
			flex: 1 1 auto !important
		}

		.flex-lg-grow-0 {
			flex-grow: 0 !important
		}

		.flex-lg-grow-1 {
			flex-grow: 1 !important
		}

		.flex-lg-shrink-0 {
			flex-shrink: 0 !important
		}

		.flex-lg-shrink-1 {
			flex-shrink: 1 !important
		}

		.justify-content-lg-start {
			justify-content: flex-start !important
		}

		.justify-content-lg-end {
			justify-content: flex-end !important
		}

		.justify-content-lg-center {
			justify-content: center !important
		}

		.justify-content-lg-between {
			justify-content: space-between !important
		}

		.justify-content-lg-around {
			justify-content: space-around !important
		}

		.align-items-lg-start {
			align-items: flex-start !important
		}

		.align-items-lg-end {
			align-items: flex-end !important
		}

		.align-items-lg-center {
			align-items: center !important
		}

		.align-items-lg-baseline {
			align-items: baseline !important
		}

		.align-items-lg-stretch {
			align-items: stretch !important
		}

		.align-content-lg-start {
			align-content: flex-start !important
		}

		.align-content-lg-end {
			align-content: flex-end !important
		}

		.align-content-lg-center {
			align-content: center !important
		}

		.align-content-lg-between {
			align-content: space-between !important
		}

		.align-content-lg-around {
			align-content: space-around !important
		}

		.align-content-lg-stretch {
			align-content: stretch !important
		}

		.align-self-lg-auto {
			align-self: auto !important
		}

		.align-self-lg-start {
			align-self: flex-start !important
		}

		.align-self-lg-end {
			align-self: flex-end !important
		}

		.align-self-lg-center {
			align-self: center !important
		}

		.align-self-lg-baseline {
			align-self: baseline !important
		}

		.align-self-lg-stretch {
			align-self: stretch !important
		}
	}

	@media (min-width: 1200px) {
		.flex-xl-row {
			flex-direction: row !important
		}

		.flex-xl-column {
			flex-direction: column !important
		}

		.flex-xl-row-reverse {
			flex-direction: row-reverse !important
		}

		.flex-xl-column-reverse {
			flex-direction: column-reverse !important
		}

		.flex-xl-wrap {
			flex-wrap: wrap !important
		}

		.flex-xl-nowrap {
			flex-wrap: nowrap !important
		}

		.flex-xl-wrap-reverse {
			flex-wrap: wrap-reverse !important
		}

		.flex-xl-fill {
			flex: 1 1 auto !important
		}

		.flex-xl-grow-0 {
			flex-grow: 0 !important
		}

		.flex-xl-grow-1 {
			flex-grow: 1 !important
		}

		.flex-xl-shrink-0 {
			flex-shrink: 0 !important
		}

		.flex-xl-shrink-1 {
			flex-shrink: 1 !important
		}

		.justify-content-xl-start {
			justify-content: flex-start !important
		}

		.justify-content-xl-end {
			justify-content: flex-end !important
		}

		.justify-content-xl-center {
			justify-content: center !important
		}

		.justify-content-xl-between {
			justify-content: space-between !important
		}

		.justify-content-xl-around {
			justify-content: space-around !important
		}

		.align-items-xl-start {
			align-items: flex-start !important
		}

		.align-items-xl-end {
			align-items: flex-end !important
		}

		.align-items-xl-center {
			align-items: center !important
		}

		.align-items-xl-baseline {
			align-items: baseline !important
		}

		.align-items-xl-stretch {
			align-items: stretch !important
		}

		.align-content-xl-start {
			align-content: flex-start !important
		}

		.align-content-xl-end {
			align-content: flex-end !important
		}

		.align-content-xl-center {
			align-content: center !important
		}

		.align-content-xl-between {
			align-content: space-between !important
		}

		.align-content-xl-around {
			align-content: space-around !important
		}

		.align-content-xl-stretch {
			align-content: stretch !important
		}

		.align-self-xl-auto {
			align-self: auto !important
		}

		.align-self-xl-start {
			align-self: flex-start !important
		}

		.align-self-xl-end {
			align-self: flex-end !important
		}

		.align-self-xl-center {
			align-self: center !important
		}

		.align-self-xl-baseline {
			align-self: baseline !important
		}

		.align-self-xl-stretch {
			align-self: stretch !important
		}
	}

	@media (min-width: 1540px) {
		.flex-xxl-row {
			flex-direction: row !important
		}

		.flex-xxl-column {
			flex-direction: column !important
		}

		.flex-xxl-row-reverse {
			flex-direction: row-reverse !important
		}

		.flex-xxl-column-reverse {
			flex-direction: column-reverse !important
		}

		.flex-xxl-wrap {
			flex-wrap: wrap !important
		}

		.flex-xxl-nowrap {
			flex-wrap: nowrap !important
		}

		.flex-xxl-wrap-reverse {
			flex-wrap: wrap-reverse !important
		}

		.flex-xxl-fill {
			flex: 1 1 auto !important
		}

		.flex-xxl-grow-0 {
			flex-grow: 0 !important
		}

		.flex-xxl-grow-1 {
			flex-grow: 1 !important
		}

		.flex-xxl-shrink-0 {
			flex-shrink: 0 !important
		}

		.flex-xxl-shrink-1 {
			flex-shrink: 1 !important
		}

		.justify-content-xxl-start {
			justify-content: flex-start !important
		}

		.justify-content-xxl-end {
			justify-content: flex-end !important
		}

		.justify-content-xxl-center {
			justify-content: center !important
		}

		.justify-content-xxl-between {
			justify-content: space-between !important
		}

		.justify-content-xxl-around {
			justify-content: space-around !important
		}

		.align-items-xxl-start {
			align-items: flex-start !important
		}

		.align-items-xxl-end {
			align-items: flex-end !important
		}

		.align-items-xxl-center {
			align-items: center !important
		}

		.align-items-xxl-baseline {
			align-items: baseline !important
		}

		.align-items-xxl-stretch {
			align-items: stretch !important
		}

		.align-content-xxl-start {
			align-content: flex-start !important
		}

		.align-content-xxl-end {
			align-content: flex-end !important
		}

		.align-content-xxl-center {
			align-content: center !important
		}

		.align-content-xxl-between {
			align-content: space-between !important
		}

		.align-content-xxl-around {
			align-content: space-around !important
		}

		.align-content-xxl-stretch {
			align-content: stretch !important
		}

		.align-self-xxl-auto {
			align-self: auto !important
		}

		.align-self-xxl-start {
			align-self: flex-start !important
		}

		.align-self-xxl-end {
			align-self: flex-end !important
		}

		.align-self-xxl-center {
			align-self: center !important
		}

		.align-self-xxl-baseline {
			align-self: baseline !important
		}

		.align-self-xxl-stretch {
			align-self: stretch !important
		}
	}

	.float-left {
		float: left !important
	}

	.float-right {
		float: right !important
	}

	.float-none {
		float: none !important
	}

	@media (min-width: 576px) {
		.float-sm-left {
			float: left !important
		}

		.float-sm-right {
			float: right !important
		}

		.float-sm-none {
			float: none !important
		}
	}

	@media (min-width: 768px) {
		.float-md-left {
			float: left !important
		}

		.float-md-right {
			float: right !important
		}

		.float-md-none {
			float: none !important
		}
	}

	@media (min-width: 992px) {
		.float-lg-left {
			float: left !important
		}

		.float-lg-right {
			float: right !important
		}

		.float-lg-none {
			float: none !important
		}
	}

	@media (min-width: 1200px) {
		.float-xl-left {
			float: left !important
		}

		.float-xl-right {
			float: right !important
		}

		.float-xl-none {
			float: none !important
		}
	}

	@media (min-width: 1540px) {
		.float-xxl-left {
			float: left !important
		}

		.float-xxl-right {
			float: right !important
		}

		.float-xxl-none {
			float: none !important
		}
	}

	.user-select-all {
		user-select: all !important
	}

	.user-select-auto {
		user-select: auto !important
	}

	.user-select-none {
		user-select: none !important
	}

	.overflow-auto {
		overflow: auto !important
	}

	.overflow-hidden {
		overflow: hidden !important
	}

	.position-static {
		position: static !important
	}

	.position-relative,
	.pos-rel {
		position: relative !important
	}

	.position-absolute,
	.pos-abs {
		position: absolute !important
	}

	.position-fixed {
		position: fixed !important
	}

	.position-sticky {
		position: sticky !important
	}

	.fixed-top {
		position: fixed;
		top: 0;
		right: 0;
		left: 0;
		z-index: 1030
	}

	.fixed-bottom {
		position: fixed;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 1030
	}

	@supports (position: sticky) {
		.sticky-top {
			position: sticky;
			top: 0;
			z-index: 1020
		}
	}

	.sr-only {
		position: absolute;
		width: 1px;
		height: 1px;
		padding: 0;
		margin: -1px;
		overflow: hidden;
		clip: rect(0, 0, 0, 0);
		white-space: nowrap;
		border: 0
	}

	.sr-only-focusable:active,
	.sr-only-focusable:focus {
		position: static;
		width: auto;
		height: auto;
		overflow: visible;
		clip: auto;
		white-space: normal
	}

	.shadow-sm {
		box-shadow: 0 0.125rem 0.25rem rgba(43, 55, 72, 0.15) !important
	}

	.shadow {
		box-shadow: 0 3px 12px 1px rgba(43, 55, 72, 0.15) !important
	}

	.shadow-lg {
		box-shadow: 0 1rem 3rem rgba(43, 55, 72, 0.25) !important
	}

	.shadow-none {
		box-shadow: none !important
	}

	.w-25 {
		width: 25% !important
	}

	.w-50 {
		width: 50% !important
	}

	.w-75 {
		width: 75% !important
	}

	.w-100 {
		width: 100% !important
	}

	.w-auto {
		width: auto !important
	}

	.h-25 {
		height: 25% !important
	}

	.h-50 {
		height: 50% !important
	}

	.h-75 {
		height: 75% !important
	}

	.h-100 {
		height: 100% !important
	}

	.h-auto {
		height: auto !important
	}

	.mw-100 {
		max-width: 100% !important
	}

	.mh-100 {
		max-height: 100% !important
	}

	.min-vw-100 {
		min-width: 100vw !important
	}

	.min-vh-100 {
		min-height: 100vh !important
	}

	.vw-100 {
		width: 100vw !important
	}

	.vh-100 {
		height: 100vh !important
	}

	.m-0 {
		margin: 0 !important
	}

	.mt-0,
	.my-0 {
		margin-top: 0 !important
	}

	.mr-0,
	.mx-0 {
		margin-right: 0 !important
	}

	.mb-0,
	.my-0 {
		margin-bottom: 0 !important
	}

	.ml-0,
	.mx-0 {
		margin-left: 0 !important
	}

	.m-1 {
		margin: .375rem !important
	}

	.mt-1,
	.my-1 {
		margin-top: .375rem !important
	}

	.mr-1,
	.mx-1 {
		margin-right: .375rem !important
	}

	.mb-1,
	.my-1 {
		margin-bottom: .375rem !important
	}

	.ml-1,
	.mx-1 {
		margin-left: .375rem !important
	}

	.m-2 {
		margin: .75rem !important
	}

	.mt-2,
	.my-2 {
		margin-top: .75rem !important
	}

	.mr-2,
	.mx-2 {
		margin-right: .75rem !important
	}

	.mb-2,
	.my-2 {
		margin-bottom: .75rem !important
	}

	.ml-2,
	.mx-2 {
		margin-left: .75rem !important
	}

	.m-3 {
		margin: 1rem !important
	}

	.mt-3,
	.my-3 {
		margin-top: 1rem !important
	}

	.mr-3,
	.mx-3 {
		margin-right: 1rem !important
	}

	.mb-3,
	.my-3 {
		margin-bottom: 1rem !important
	}

	.ml-3,
	.mx-3 {
		margin-left: 1rem !important
	}

	.m-4 {
		margin: 1.5rem !important
	}

	.mt-4,
	.my-4 {
		margin-top: 1.5rem !important
	}

	.mr-4,
	.mx-4 {
		margin-right: 1.5rem !important
	}

	.mb-4,
	.my-4 {
		margin-bottom: 1.5rem !important
	}

	.ml-4,
	.mx-4 {
		margin-left: 1.5rem !important
	}

	.m-5 {
		margin: 2.75rem !important
	}

	.mt-5,
	.my-5 {
		margin-top: 2.75rem !important
	}

	.mr-5,
	.mx-5 {
		margin-right: 2.75rem !important
	}

	.mb-5,
	.my-5 {
		margin-bottom: 2.75rem !important
	}

	.ml-5,
	.mx-5 {
		margin-left: 2.75rem !important
	}

	.m-gs {
		margin: 28px !important
	}

	.mt-gs,
	.my-gs {
		margin-top: 28px !important
	}

	.mr-gs,
	.mx-gs {
		margin-right: 28px !important
	}

	.mb-gs,
	.my-gs {
		margin-bottom: 28px !important
	}

	.ml-gs,
	.mx-gs {
		margin-left: 28px !important
	}

	.p-0 {
		padding: 0 !important
	}

	.pt-0,
	.py-0 {
		padding-top: 0 !important
	}

	.pr-0,
	.px-0 {
		padding-right: 0 !important
	}

	.pb-0,
	.py-0 {
		padding-bottom: 0 !important
	}

	.pl-0,
	.px-0 {
		padding-left: 0 !important
	}

	.p-1 {
		padding: .375rem !important
	}

	.pt-1,
	.py-1 {
		padding-top: .375rem !important
	}

	.pr-1,
	.px-1 {
		padding-right: .375rem !important
	}

	.pb-1,
	.py-1 {
		padding-bottom: .375rem !important
	}

	.pl-1,
	.px-1 {
		padding-left: .375rem !important
	}

	.p-2 {
		padding: .75rem !important
	}

	.pt-2,
	.py-2 {
		padding-top: .75rem !important
	}

	.pr-2,
	.px-2 {
		padding-right: .75rem !important
	}

	.pb-2,
	.py-2 {
		padding-bottom: .75rem !important
	}

	.pl-2,
	.px-2 {
		padding-left: .75rem !important
	}

	.p-3 {
		padding: 1rem !important
	}

	.pt-3,
	.py-3 {
		padding-top: 1rem !important
	}

	.pr-3,
	.px-3 {
		padding-right: 1rem !important
	}

	.pb-3,
	.py-3 {
		padding-bottom: 1rem !important
	}

	.pl-3,
	.px-3 {
		padding-left: 1rem !important
	}

	.p-4 {
		padding: 1.5rem !important
	}

	.pt-4,
	.py-4 {
		padding-top: 1.5rem !important
	}

	.pr-4,
	.px-4 {
		padding-right: 1.5rem !important
	}

	.pb-4,
	.py-4 {
		padding-bottom: 1.5rem !important
	}

	.pl-4,
	.px-4 {
		padding-left: 1.5rem !important
	}

	.p-5 {
		padding: 2.75rem !important
	}

	.pt-5,
	.py-5 {
		padding-top: 2.75rem !important
	}

	.pr-5,
	.px-5 {
		padding-right: 2.75rem !important
	}

	.pb-5,
	.py-5 {
		padding-bottom: 2.75rem !important
	}

	.pl-5,
	.px-5 {
		padding-left: 2.75rem !important
	}

	.p-gs {
		padding: 28px !important
	}

	.pt-gs,
	.py-gs {
		padding-top: 28px !important
	}

	.pr-gs,
	.px-gs {
		padding-right: 28px !important
	}

	.pb-gs,
	.py-gs {
		padding-bottom: 28px !important
	}

	.pl-gs,
	.px-gs {
		padding-left: 28px !important
	}

	.m-n1 {
		margin: -.375rem !important
	}

	.mt-n1,
	.my-n1 {
		margin-top: -.375rem !important
	}

	.mr-n1,
	.mx-n1 {
		margin-right: -.375rem !important
	}

	.mb-n1,
	.my-n1 {
		margin-bottom: -.375rem !important
	}

	.ml-n1,
	.mx-n1 {
		margin-left: -.375rem !important
	}

	.m-n2 {
		margin: -.75rem !important
	}

	.mt-n2,
	.my-n2 {
		margin-top: -.75rem !important
	}

	.mr-n2,
	.mx-n2 {
		margin-right: -.75rem !important
	}

	.mb-n2,
	.my-n2 {
		margin-bottom: -.75rem !important
	}

	.ml-n2,
	.mx-n2 {
		margin-left: -.75rem !important
	}

	.m-n3 {
		margin: -1rem !important
	}

	.mt-n3,
	.my-n3 {
		margin-top: -1rem !important
	}

	.mr-n3,
	.mx-n3 {
		margin-right: -1rem !important
	}

	.mb-n3,
	.my-n3 {
		margin-bottom: -1rem !important
	}

	.ml-n3,
	.mx-n3 {
		margin-left: -1rem !important
	}

	.m-n4 {
		margin: -1.5rem !important
	}

	.mt-n4,
	.my-n4 {
		margin-top: -1.5rem !important
	}

	.mr-n4,
	.mx-n4 {
		margin-right: -1.5rem !important
	}

	.mb-n4,
	.my-n4 {
		margin-bottom: -1.5rem !important
	}

	.ml-n4,
	.mx-n4 {
		margin-left: -1.5rem !important
	}

	.m-n5 {
		margin: -2.75rem !important
	}

	.mt-n5,
	.my-n5 {
		margin-top: -2.75rem !important
	}

	.mr-n5,
	.mx-n5 {
		margin-right: -2.75rem !important
	}

	.mb-n5,
	.my-n5 {
		margin-bottom: -2.75rem !important
	}

	.ml-n5,
	.mx-n5 {
		margin-left: -2.75rem !important
	}

	.m-ngs {
		margin: -28px !important
	}

	.mt-ngs,
	.my-ngs {
		margin-top: -28px !important
	}

	.mr-ngs,
	.mx-ngs {
		margin-right: -28px !important
	}

	.mb-ngs,
	.my-ngs {
		margin-bottom: -28px !important
	}

	.ml-ngs,
	.mx-ngs {
		margin-left: -28px !important
	}

	.m-auto {
		margin: auto !important
	}

	.mt-auto,
	.my-auto {
		margin-top: auto !important
	}

	.mr-auto,
	.mx-auto {
		margin-right: auto !important
	}

	.mb-auto,
	.my-auto {
		margin-bottom: auto !important
	}

	.ml-auto,
	.mx-auto {
		margin-left: auto !important
	}

	@media (min-width: 576px) {
		.m-sm-0 {
			margin: 0 !important
		}

		.mt-sm-0,
		.my-sm-0 {
			margin-top: 0 !important
		}

		.mr-sm-0,
		.mx-sm-0 {
			margin-right: 0 !important
		}

		.mb-sm-0,
		.my-sm-0 {
			margin-bottom: 0 !important
		}

		.ml-sm-0,
		.mx-sm-0 {
			margin-left: 0 !important
		}

		.m-sm-1 {
			margin: .375rem !important
		}

		.mt-sm-1,
		.my-sm-1 {
			margin-top: .375rem !important
		}

		.mr-sm-1,
		.mx-sm-1 {
			margin-right: .375rem !important
		}

		.mb-sm-1,
		.my-sm-1 {
			margin-bottom: .375rem !important
		}

		.ml-sm-1,
		.mx-sm-1 {
			margin-left: .375rem !important
		}

		.m-sm-2 {
			margin: .75rem !important
		}

		.mt-sm-2,
		.my-sm-2 {
			margin-top: .75rem !important
		}

		.mr-sm-2,
		.mx-sm-2 {
			margin-right: .75rem !important
		}

		.mb-sm-2,
		.my-sm-2 {
			margin-bottom: .75rem !important
		}

		.ml-sm-2,
		.mx-sm-2 {
			margin-left: .75rem !important
		}

		.m-sm-3 {
			margin: 1rem !important
		}

		.mt-sm-3,
		.my-sm-3 {
			margin-top: 1rem !important
		}

		.mr-sm-3,
		.mx-sm-3 {
			margin-right: 1rem !important
		}

		.mb-sm-3,
		.my-sm-3 {
			margin-bottom: 1rem !important
		}

		.ml-sm-3,
		.mx-sm-3 {
			margin-left: 1rem !important
		}

		.m-sm-4 {
			margin: 1.5rem !important
		}

		.mt-sm-4,
		.my-sm-4 {
			margin-top: 1.5rem !important
		}

		.mr-sm-4,
		.mx-sm-4 {
			margin-right: 1.5rem !important
		}

		.mb-sm-4,
		.my-sm-4 {
			margin-bottom: 1.5rem !important
		}

		.ml-sm-4,
		.mx-sm-4 {
			margin-left: 1.5rem !important
		}

		.m-sm-5 {
			margin: 2.75rem !important
		}

		.mt-sm-5,
		.my-sm-5 {
			margin-top: 2.75rem !important
		}

		.mr-sm-5,
		.mx-sm-5 {
			margin-right: 2.75rem !important
		}

		.mb-sm-5,
		.my-sm-5 {
			margin-bottom: 2.75rem !important
		}

		.ml-sm-5,
		.mx-sm-5 {
			margin-left: 2.75rem !important
		}

		.m-sm-gs {
			margin: 28px !important
		}

		.mt-sm-gs,
		.my-sm-gs {
			margin-top: 28px !important
		}

		.mr-sm-gs,
		.mx-sm-gs {
			margin-right: 28px !important
		}

		.mb-sm-gs,
		.my-sm-gs {
			margin-bottom: 28px !important
		}

		.ml-sm-gs,
		.mx-sm-gs {
			margin-left: 28px !important
		}

		.p-sm-0 {
			padding: 0 !important
		}

		.pt-sm-0,
		.py-sm-0 {
			padding-top: 0 !important
		}

		.pr-sm-0,
		.px-sm-0 {
			padding-right: 0 !important
		}

		.pb-sm-0,
		.py-sm-0 {
			padding-bottom: 0 !important
		}

		.pl-sm-0,
		.px-sm-0 {
			padding-left: 0 !important
		}

		.p-sm-1 {
			padding: .375rem !important
		}

		.pt-sm-1,
		.py-sm-1 {
			padding-top: .375rem !important
		}

		.pr-sm-1,
		.px-sm-1 {
			padding-right: .375rem !important
		}

		.pb-sm-1,
		.py-sm-1 {
			padding-bottom: .375rem !important
		}

		.pl-sm-1,
		.px-sm-1 {
			padding-left: .375rem !important
		}

		.p-sm-2 {
			padding: .75rem !important
		}

		.pt-sm-2,
		.py-sm-2 {
			padding-top: .75rem !important
		}

		.pr-sm-2,
		.px-sm-2 {
			padding-right: .75rem !important
		}

		.pb-sm-2,
		.py-sm-2 {
			padding-bottom: .75rem !important
		}

		.pl-sm-2,
		.px-sm-2 {
			padding-left: .75rem !important
		}

		.p-sm-3 {
			padding: 1rem !important
		}

		.pt-sm-3,
		.py-sm-3 {
			padding-top: 1rem !important
		}

		.pr-sm-3,
		.px-sm-3 {
			padding-right: 1rem !important
		}

		.pb-sm-3,
		.py-sm-3 {
			padding-bottom: 1rem !important
		}

		.pl-sm-3,
		.px-sm-3 {
			padding-left: 1rem !important
		}

		.p-sm-4 {
			padding: 1.5rem !important
		}

		.pt-sm-4,
		.py-sm-4 {
			padding-top: 1.5rem !important
		}

		.pr-sm-4,
		.px-sm-4 {
			padding-right: 1.5rem !important
		}

		.pb-sm-4,
		.py-sm-4 {
			padding-bottom: 1.5rem !important
		}

		.pl-sm-4,
		.px-sm-4 {
			padding-left: 1.5rem !important
		}

		.p-sm-5 {
			padding: 2.75rem !important
		}

		.pt-sm-5,
		.py-sm-5 {
			padding-top: 2.75rem !important
		}

		.pr-sm-5,
		.px-sm-5 {
			padding-right: 2.75rem !important
		}

		.pb-sm-5,
		.py-sm-5 {
			padding-bottom: 2.75rem !important
		}

		.pl-sm-5,
		.px-sm-5 {
			padding-left: 2.75rem !important
		}

		.p-sm-gs {
			padding: 28px !important
		}

		.pt-sm-gs,
		.py-sm-gs {
			padding-top: 28px !important
		}

		.pr-sm-gs,
		.px-sm-gs {
			padding-right: 28px !important
		}

		.pb-sm-gs,
		.py-sm-gs {
			padding-bottom: 28px !important
		}

		.pl-sm-gs,
		.px-sm-gs {
			padding-left: 28px !important
		}

		.m-sm-n1 {
			margin: -.375rem !important
		}

		.mt-sm-n1,
		.my-sm-n1 {
			margin-top: -.375rem !important
		}

		.mr-sm-n1,
		.mx-sm-n1 {
			margin-right: -.375rem !important
		}

		.mb-sm-n1,
		.my-sm-n1 {
			margin-bottom: -.375rem !important
		}

		.ml-sm-n1,
		.mx-sm-n1 {
			margin-left: -.375rem !important
		}

		.m-sm-n2 {
			margin: -.75rem !important
		}

		.mt-sm-n2,
		.my-sm-n2 {
			margin-top: -.75rem !important
		}

		.mr-sm-n2,
		.mx-sm-n2 {
			margin-right: -.75rem !important
		}

		.mb-sm-n2,
		.my-sm-n2 {
			margin-bottom: -.75rem !important
		}

		.ml-sm-n2,
		.mx-sm-n2 {
			margin-left: -.75rem !important
		}

		.m-sm-n3 {
			margin: -1rem !important
		}

		.mt-sm-n3,
		.my-sm-n3 {
			margin-top: -1rem !important
		}

		.mr-sm-n3,
		.mx-sm-n3 {
			margin-right: -1rem !important
		}

		.mb-sm-n3,
		.my-sm-n3 {
			margin-bottom: -1rem !important
		}

		.ml-sm-n3,
		.mx-sm-n3 {
			margin-left: -1rem !important
		}

		.m-sm-n4 {
			margin: -1.5rem !important
		}

		.mt-sm-n4,
		.my-sm-n4 {
			margin-top: -1.5rem !important
		}

		.mr-sm-n4,
		.mx-sm-n4 {
			margin-right: -1.5rem !important
		}

		.mb-sm-n4,
		.my-sm-n4 {
			margin-bottom: -1.5rem !important
		}

		.ml-sm-n4,
		.mx-sm-n4 {
			margin-left: -1.5rem !important
		}

		.m-sm-n5 {
			margin: -2.75rem !important
		}

		.mt-sm-n5,
		.my-sm-n5 {
			margin-top: -2.75rem !important
		}

		.mr-sm-n5,
		.mx-sm-n5 {
			margin-right: -2.75rem !important
		}

		.mb-sm-n5,
		.my-sm-n5 {
			margin-bottom: -2.75rem !important
		}

		.ml-sm-n5,
		.mx-sm-n5 {
			margin-left: -2.75rem !important
		}

		.m-sm-ngs {
			margin: -28px !important
		}

		.mt-sm-ngs,
		.my-sm-ngs {
			margin-top: -28px !important
		}

		.mr-sm-ngs,
		.mx-sm-ngs {
			margin-right: -28px !important
		}

		.mb-sm-ngs,
		.my-sm-ngs {
			margin-bottom: -28px !important
		}

		.ml-sm-ngs,
		.mx-sm-ngs {
			margin-left: -28px !important
		}

		.m-sm-auto {
			margin: auto !important
		}

		.mt-sm-auto,
		.my-sm-auto {
			margin-top: auto !important
		}

		.mr-sm-auto,
		.mx-sm-auto {
			margin-right: auto !important
		}

		.mb-sm-auto,
		.my-sm-auto {
			margin-bottom: auto !important
		}

		.ml-sm-auto,
		.mx-sm-auto {
			margin-left: auto !important
		}
	}

	@media (min-width: 768px) {
		.m-md-0 {
			margin: 0 !important
		}

		.mt-md-0,
		.my-md-0 {
			margin-top: 0 !important
		}

		.mr-md-0,
		.mx-md-0 {
			margin-right: 0 !important
		}

		.mb-md-0,
		.my-md-0 {
			margin-bottom: 0 !important
		}

		.ml-md-0,
		.mx-md-0 {
			margin-left: 0 !important
		}

		.m-md-1 {
			margin: .375rem !important
		}

		.mt-md-1,
		.my-md-1 {
			margin-top: .375rem !important
		}

		.mr-md-1,
		.mx-md-1 {
			margin-right: .375rem !important
		}

		.mb-md-1,
		.my-md-1 {
			margin-bottom: .375rem !important
		}

		.ml-md-1,
		.mx-md-1 {
			margin-left: .375rem !important
		}

		.m-md-2 {
			margin: .75rem !important
		}

		.mt-md-2,
		.my-md-2 {
			margin-top: .75rem !important
		}

		.mr-md-2,
		.mx-md-2 {
			margin-right: .75rem !important
		}

		.mb-md-2,
		.my-md-2 {
			margin-bottom: .75rem !important
		}

		.ml-md-2,
		.mx-md-2 {
			margin-left: .75rem !important
		}

		.m-md-3 {
			margin: 1rem !important
		}

		.mt-md-3,
		.my-md-3 {
			margin-top: 1rem !important
		}

		.mr-md-3,
		.mx-md-3 {
			margin-right: 1rem !important
		}

		.mb-md-3,
		.my-md-3 {
			margin-bottom: 1rem !important
		}

		.ml-md-3,
		.mx-md-3 {
			margin-left: 1rem !important
		}

		.m-md-4 {
			margin: 1.5rem !important
		}

		.mt-md-4,
		.my-md-4 {
			margin-top: 1.5rem !important
		}

		.mr-md-4,
		.mx-md-4 {
			margin-right: 1.5rem !important
		}

		.mb-md-4,
		.my-md-4 {
			margin-bottom: 1.5rem !important
		}

		.ml-md-4,
		.mx-md-4 {
			margin-left: 1.5rem !important
		}

		.m-md-5 {
			margin: 2.75rem !important
		}

		.mt-md-5,
		.my-md-5 {
			margin-top: 2.75rem !important
		}

		.mr-md-5,
		.mx-md-5 {
			margin-right: 2.75rem !important
		}

		.mb-md-5,
		.my-md-5 {
			margin-bottom: 2.75rem !important
		}

		.ml-md-5,
		.mx-md-5 {
			margin-left: 2.75rem !important
		}

		.m-md-gs {
			margin: 28px !important
		}

		.mt-md-gs,
		.my-md-gs {
			margin-top: 28px !important
		}

		.mr-md-gs,
		.mx-md-gs {
			margin-right: 28px !important
		}

		.mb-md-gs,
		.my-md-gs {
			margin-bottom: 28px !important
		}

		.ml-md-gs,
		.mx-md-gs {
			margin-left: 28px !important
		}

		.p-md-0 {
			padding: 0 !important
		}

		.pt-md-0,
		.py-md-0 {
			padding-top: 0 !important
		}

		.pr-md-0,
		.px-md-0 {
			padding-right: 0 !important
		}

		.pb-md-0,
		.py-md-0 {
			padding-bottom: 0 !important
		}

		.pl-md-0,
		.px-md-0 {
			padding-left: 0 !important
		}

		.p-md-1 {
			padding: .375rem !important
		}

		.pt-md-1,
		.py-md-1 {
			padding-top: .375rem !important
		}

		.pr-md-1,
		.px-md-1 {
			padding-right: .375rem !important
		}

		.pb-md-1,
		.py-md-1 {
			padding-bottom: .375rem !important
		}

		.pl-md-1,
		.px-md-1 {
			padding-left: .375rem !important
		}

		.p-md-2 {
			padding: .75rem !important
		}

		.pt-md-2,
		.py-md-2 {
			padding-top: .75rem !important
		}

		.pr-md-2,
		.px-md-2 {
			padding-right: .75rem !important
		}

		.pb-md-2,
		.py-md-2 {
			padding-bottom: .75rem !important
		}

		.pl-md-2,
		.px-md-2 {
			padding-left: .75rem !important
		}

		.p-md-3 {
			padding: 1rem !important
		}

		.pt-md-3,
		.py-md-3 {
			padding-top: 1rem !important
		}

		.pr-md-3,
		.px-md-3 {
			padding-right: 1rem !important
		}

		.pb-md-3,
		.py-md-3 {
			padding-bottom: 1rem !important
		}

		.pl-md-3,
		.px-md-3 {
			padding-left: 1rem !important
		}

		.p-md-4 {
			padding: 1.5rem !important
		}

		.pt-md-4,
		.py-md-4 {
			padding-top: 1.5rem !important
		}

		.pr-md-4,
		.px-md-4 {
			padding-right: 1.5rem !important
		}

		.pb-md-4,
		.py-md-4 {
			padding-bottom: 1.5rem !important
		}

		.pl-md-4,
		.px-md-4 {
			padding-left: 1.5rem !important
		}

		.p-md-5 {
			padding: 2.75rem !important
		}

		.pt-md-5,
		.py-md-5 {
			padding-top: 2.75rem !important
		}

		.pr-md-5,
		.px-md-5 {
			padding-right: 2.75rem !important
		}

		.pb-md-5,
		.py-md-5 {
			padding-bottom: 2.75rem !important
		}

		.pl-md-5,
		.px-md-5 {
			padding-left: 2.75rem !important
		}

		.p-md-gs {
			padding: 28px !important
		}

		.pt-md-gs,
		.py-md-gs {
			padding-top: 28px !important
		}

		.pr-md-gs,
		.px-md-gs {
			padding-right: 28px !important
		}

		.pb-md-gs,
		.py-md-gs {
			padding-bottom: 28px !important
		}

		.pl-md-gs,
		.px-md-gs {
			padding-left: 28px !important
		}

		.m-md-n1 {
			margin: -.375rem !important
		}

		.mt-md-n1,
		.my-md-n1 {
			margin-top: -.375rem !important
		}

		.mr-md-n1,
		.mx-md-n1 {
			margin-right: -.375rem !important
		}

		.mb-md-n1,
		.my-md-n1 {
			margin-bottom: -.375rem !important
		}

		.ml-md-n1,
		.mx-md-n1 {
			margin-left: -.375rem !important
		}

		.m-md-n2 {
			margin: -.75rem !important
		}

		.mt-md-n2,
		.my-md-n2 {
			margin-top: -.75rem !important
		}

		.mr-md-n2,
		.mx-md-n2 {
			margin-right: -.75rem !important
		}

		.mb-md-n2,
		.my-md-n2 {
			margin-bottom: -.75rem !important
		}

		.ml-md-n2,
		.mx-md-n2 {
			margin-left: -.75rem !important
		}

		.m-md-n3 {
			margin: -1rem !important
		}

		.mt-md-n3,
		.my-md-n3 {
			margin-top: -1rem !important
		}

		.mr-md-n3,
		.mx-md-n3 {
			margin-right: -1rem !important
		}

		.mb-md-n3,
		.my-md-n3 {
			margin-bottom: -1rem !important
		}

		.ml-md-n3,
		.mx-md-n3 {
			margin-left: -1rem !important
		}

		.m-md-n4 {
			margin: -1.5rem !important
		}

		.mt-md-n4,
		.my-md-n4 {
			margin-top: -1.5rem !important
		}

		.mr-md-n4,
		.mx-md-n4 {
			margin-right: -1.5rem !important
		}

		.mb-md-n4,
		.my-md-n4 {
			margin-bottom: -1.5rem !important
		}

		.ml-md-n4,
		.mx-md-n4 {
			margin-left: -1.5rem !important
		}

		.m-md-n5 {
			margin: -2.75rem !important
		}

		.mt-md-n5,
		.my-md-n5 {
			margin-top: -2.75rem !important
		}

		.mr-md-n5,
		.mx-md-n5 {
			margin-right: -2.75rem !important
		}

		.mb-md-n5,
		.my-md-n5 {
			margin-bottom: -2.75rem !important
		}

		.ml-md-n5,
		.mx-md-n5 {
			margin-left: -2.75rem !important
		}

		.m-md-ngs {
			margin: -28px !important
		}

		.mt-md-ngs,
		.my-md-ngs {
			margin-top: -28px !important
		}

		.mr-md-ngs,
		.mx-md-ngs {
			margin-right: -28px !important
		}

		.mb-md-ngs,
		.my-md-ngs {
			margin-bottom: -28px !important
		}

		.ml-md-ngs,
		.mx-md-ngs {
			margin-left: -28px !important
		}

		.m-md-auto {
			margin: auto !important
		}

		.mt-md-auto,
		.my-md-auto {
			margin-top: auto !important
		}

		.mr-md-auto,
		.mx-md-auto {
			margin-right: auto !important
		}

		.mb-md-auto,
		.my-md-auto {
			margin-bottom: auto !important
		}

		.ml-md-auto,
		.mx-md-auto {
			margin-left: auto !important
		}
	}

	@media (min-width: 992px) {
		.m-lg-0 {
			margin: 0 !important
		}

		.mt-lg-0,
		.my-lg-0 {
			margin-top: 0 !important
		}

		.mr-lg-0,
		.mx-lg-0 {
			margin-right: 0 !important
		}

		.mb-lg-0,
		.my-lg-0 {
			margin-bottom: 0 !important
		}

		.ml-lg-0,
		.mx-lg-0 {
			margin-left: 0 !important
		}

		.m-lg-1 {
			margin: .375rem !important
		}

		.mt-lg-1,
		.my-lg-1 {
			margin-top: .375rem !important
		}

		.mr-lg-1,
		.mx-lg-1 {
			margin-right: .375rem !important
		}

		.mb-lg-1,
		.my-lg-1 {
			margin-bottom: .375rem !important
		}

		.ml-lg-1,
		.mx-lg-1 {
			margin-left: .375rem !important
		}

		.m-lg-2 {
			margin: .75rem !important
		}

		.mt-lg-2,
		.my-lg-2 {
			margin-top: .75rem !important
		}

		.mr-lg-2,
		.mx-lg-2 {
			margin-right: .75rem !important
		}

		.mb-lg-2,
		.my-lg-2 {
			margin-bottom: .75rem !important
		}

		.ml-lg-2,
		.mx-lg-2 {
			margin-left: .75rem !important
		}

		.m-lg-3 {
			margin: 1rem !important
		}

		.mt-lg-3,
		.my-lg-3 {
			margin-top: 1rem !important
		}

		.mr-lg-3,
		.mx-lg-3 {
			margin-right: 1rem !important
		}

		.mb-lg-3,
		.my-lg-3 {
			margin-bottom: 1rem !important
		}

		.ml-lg-3,
		.mx-lg-3 {
			margin-left: 1rem !important
		}

		.m-lg-4 {
			margin: 1.5rem !important
		}

		.mt-lg-4,
		.my-lg-4 {
			margin-top: 1.5rem !important
		}

		.mr-lg-4,
		.mx-lg-4 {
			margin-right: 1.5rem !important
		}

		.mb-lg-4,
		.my-lg-4 {
			margin-bottom: 1.5rem !important
		}

		.ml-lg-4,
		.mx-lg-4 {
			margin-left: 1.5rem !important
		}

		.m-lg-5 {
			margin: 2.75rem !important
		}

		.mt-lg-5,
		.my-lg-5 {
			margin-top: 2.75rem !important
		}

		.mr-lg-5,
		.mx-lg-5 {
			margin-right: 2.75rem !important
		}

		.mb-lg-5,
		.my-lg-5 {
			margin-bottom: 2.75rem !important
		}

		.ml-lg-5,
		.mx-lg-5 {
			margin-left: 2.75rem !important
		}

		.m-lg-gs {
			margin: 28px !important
		}

		.mt-lg-gs,
		.my-lg-gs {
			margin-top: 28px !important
		}

		.mr-lg-gs,
		.mx-lg-gs {
			margin-right: 28px !important
		}

		.mb-lg-gs,
		.my-lg-gs {
			margin-bottom: 28px !important
		}

		.ml-lg-gs,
		.mx-lg-gs {
			margin-left: 28px !important
		}

		.p-lg-0 {
			padding: 0 !important
		}

		.pt-lg-0,
		.py-lg-0 {
			padding-top: 0 !important
		}

		.pr-lg-0,
		.px-lg-0 {
			padding-right: 0 !important
		}

		.pb-lg-0,
		.py-lg-0 {
			padding-bottom: 0 !important
		}

		.pl-lg-0,
		.px-lg-0 {
			padding-left: 0 !important
		}

		.p-lg-1 {
			padding: .375rem !important
		}

		.pt-lg-1,
		.py-lg-1 {
			padding-top: .375rem !important
		}

		.pr-lg-1,
		.px-lg-1 {
			padding-right: .375rem !important
		}

		.pb-lg-1,
		.py-lg-1 {
			padding-bottom: .375rem !important
		}

		.pl-lg-1,
		.px-lg-1 {
			padding-left: .375rem !important
		}

		.p-lg-2 {
			padding: .75rem !important
		}

		.pt-lg-2,
		.py-lg-2 {
			padding-top: .75rem !important
		}

		.pr-lg-2,
		.px-lg-2 {
			padding-right: .75rem !important
		}

		.pb-lg-2,
		.py-lg-2 {
			padding-bottom: .75rem !important
		}

		.pl-lg-2,
		.px-lg-2 {
			padding-left: .75rem !important
		}

		.p-lg-3 {
			padding: 1rem !important
		}

		.pt-lg-3,
		.py-lg-3 {
			padding-top: 1rem !important
		}

		.pr-lg-3,
		.px-lg-3 {
			padding-right: 1rem !important
		}

		.pb-lg-3,
		.py-lg-3 {
			padding-bottom: 1rem !important
		}

		.pl-lg-3,
		.px-lg-3 {
			padding-left: 1rem !important
		}

		.p-lg-4 {
			padding: 1.5rem !important
		}

		.pt-lg-4,
		.py-lg-4 {
			padding-top: 1.5rem !important
		}

		.pr-lg-4,
		.px-lg-4 {
			padding-right: 1.5rem !important
		}

		.pb-lg-4,
		.py-lg-4 {
			padding-bottom: 1.5rem !important
		}

		.pl-lg-4,
		.px-lg-4 {
			padding-left: 1.5rem !important
		}

		.p-lg-5 {
			padding: 2.75rem !important
		}

		.pt-lg-5,
		.py-lg-5 {
			padding-top: 2.75rem !important
		}

		.pr-lg-5,
		.px-lg-5 {
			padding-right: 2.75rem !important
		}

		.pb-lg-5,
		.py-lg-5 {
			padding-bottom: 2.75rem !important
		}

		.pl-lg-5,
		.px-lg-5 {
			padding-left: 2.75rem !important
		}

		.p-lg-gs {
			padding: 28px !important
		}

		.pt-lg-gs,
		.py-lg-gs {
			padding-top: 28px !important
		}

		.pr-lg-gs,
		.px-lg-gs {
			padding-right: 28px !important
		}

		.pb-lg-gs,
		.py-lg-gs {
			padding-bottom: 28px !important
		}

		.pl-lg-gs,
		.px-lg-gs {
			padding-left: 28px !important
		}

		.m-lg-n1 {
			margin: -.375rem !important
		}

		.mt-lg-n1,
		.my-lg-n1 {
			margin-top: -.375rem !important
		}

		.mr-lg-n1,
		.mx-lg-n1 {
			margin-right: -.375rem !important
		}

		.mb-lg-n1,
		.my-lg-n1 {
			margin-bottom: -.375rem !important
		}

		.ml-lg-n1,
		.mx-lg-n1 {
			margin-left: -.375rem !important
		}

		.m-lg-n2 {
			margin: -.75rem !important
		}

		.mt-lg-n2,
		.my-lg-n2 {
			margin-top: -.75rem !important
		}

		.mr-lg-n2,
		.mx-lg-n2 {
			margin-right: -.75rem !important
		}

		.mb-lg-n2,
		.my-lg-n2 {
			margin-bottom: -.75rem !important
		}

		.ml-lg-n2,
		.mx-lg-n2 {
			margin-left: -.75rem !important
		}

		.m-lg-n3 {
			margin: -1rem !important
		}

		.mt-lg-n3,
		.my-lg-n3 {
			margin-top: -1rem !important
		}

		.mr-lg-n3,
		.mx-lg-n3 {
			margin-right: -1rem !important
		}

		.mb-lg-n3,
		.my-lg-n3 {
			margin-bottom: -1rem !important
		}

		.ml-lg-n3,
		.mx-lg-n3 {
			margin-left: -1rem !important
		}

		.m-lg-n4 {
			margin: -1.5rem !important
		}

		.mt-lg-n4,
		.my-lg-n4 {
			margin-top: -1.5rem !important
		}

		.mr-lg-n4,
		.mx-lg-n4 {
			margin-right: -1.5rem !important
		}

		.mb-lg-n4,
		.my-lg-n4 {
			margin-bottom: -1.5rem !important
		}

		.ml-lg-n4,
		.mx-lg-n4 {
			margin-left: -1.5rem !important
		}

		.m-lg-n5 {
			margin: -2.75rem !important
		}

		.mt-lg-n5,
		.my-lg-n5 {
			margin-top: -2.75rem !important
		}

		.mr-lg-n5,
		.mx-lg-n5 {
			margin-right: -2.75rem !important
		}

		.mb-lg-n5,
		.my-lg-n5 {
			margin-bottom: -2.75rem !important
		}

		.ml-lg-n5,
		.mx-lg-n5 {
			margin-left: -2.75rem !important
		}

		.m-lg-ngs {
			margin: -28px !important
		}

		.mt-lg-ngs,
		.my-lg-ngs {
			margin-top: -28px !important
		}

		.mr-lg-ngs,
		.mx-lg-ngs {
			margin-right: -28px !important
		}

		.mb-lg-ngs,
		.my-lg-ngs {
			margin-bottom: -28px !important
		}

		.ml-lg-ngs,
		.mx-lg-ngs {
			margin-left: -28px !important
		}

		.m-lg-auto {
			margin: auto !important
		}

		.mt-lg-auto,
		.my-lg-auto {
			margin-top: auto !important
		}

		.mr-lg-auto,
		.mx-lg-auto {
			margin-right: auto !important
		}

		.mb-lg-auto,
		.my-lg-auto {
			margin-bottom: auto !important
		}

		.ml-lg-auto,
		.mx-lg-auto {
			margin-left: auto !important
		}
	}

	@media (min-width: 1200px) {
		.m-xl-0 {
			margin: 0 !important
		}

		.mt-xl-0,
		.my-xl-0 {
			margin-top: 0 !important
		}

		.mr-xl-0,
		.mx-xl-0 {
			margin-right: 0 !important
		}

		.mb-xl-0,
		.my-xl-0 {
			margin-bottom: 0 !important
		}

		.ml-xl-0,
		.mx-xl-0 {
			margin-left: 0 !important
		}

		.m-xl-1 {
			margin: .375rem !important
		}

		.mt-xl-1,
		.my-xl-1 {
			margin-top: .375rem !important
		}

		.mr-xl-1,
		.mx-xl-1 {
			margin-right: .375rem !important
		}

		.mb-xl-1,
		.my-xl-1 {
			margin-bottom: .375rem !important
		}

		.ml-xl-1,
		.mx-xl-1 {
			margin-left: .375rem !important
		}

		.m-xl-2 {
			margin: .75rem !important
		}

		.mt-xl-2,
		.my-xl-2 {
			margin-top: .75rem !important
		}

		.mr-xl-2,
		.mx-xl-2 {
			margin-right: .75rem !important
		}

		.mb-xl-2,
		.my-xl-2 {
			margin-bottom: .75rem !important
		}

		.ml-xl-2,
		.mx-xl-2 {
			margin-left: .75rem !important
		}

		.m-xl-3 {
			margin: 1rem !important
		}

		.mt-xl-3,
		.my-xl-3 {
			margin-top: 1rem !important
		}

		.mr-xl-3,
		.mx-xl-3 {
			margin-right: 1rem !important
		}

		.mb-xl-3,
		.my-xl-3 {
			margin-bottom: 1rem !important
		}

		.ml-xl-3,
		.mx-xl-3 {
			margin-left: 1rem !important
		}

		.m-xl-4 {
			margin: 1.5rem !important
		}

		.mt-xl-4,
		.my-xl-4 {
			margin-top: 1.5rem !important
		}

		.mr-xl-4,
		.mx-xl-4 {
			margin-right: 1.5rem !important
		}

		.mb-xl-4,
		.my-xl-4 {
			margin-bottom: 1.5rem !important
		}

		.ml-xl-4,
		.mx-xl-4 {
			margin-left: 1.5rem !important
		}

		.m-xl-5 {
			margin: 2.75rem !important
		}

		.mt-xl-5,
		.my-xl-5 {
			margin-top: 2.75rem !important
		}

		.mr-xl-5,
		.mx-xl-5 {
			margin-right: 2.75rem !important
		}

		.mb-xl-5,
		.my-xl-5 {
			margin-bottom: 2.75rem !important
		}

		.ml-xl-5,
		.mx-xl-5 {
			margin-left: 2.75rem !important
		}

		.m-xl-gs {
			margin: 28px !important
		}

		.mt-xl-gs,
		.my-xl-gs {
			margin-top: 28px !important
		}

		.mr-xl-gs,
		.mx-xl-gs {
			margin-right: 28px !important
		}

		.mb-xl-gs,
		.my-xl-gs {
			margin-bottom: 28px !important
		}

		.ml-xl-gs,
		.mx-xl-gs {
			margin-left: 28px !important
		}

		.p-xl-0 {
			padding: 0 !important
		}

		.pt-xl-0,
		.py-xl-0 {
			padding-top: 0 !important
		}

		.pr-xl-0,
		.px-xl-0 {
			padding-right: 0 !important
		}

		.pb-xl-0,
		.py-xl-0 {
			padding-bottom: 0 !important
		}

		.pl-xl-0,
		.px-xl-0 {
			padding-left: 0 !important
		}

		.p-xl-1 {
			padding: .375rem !important
		}

		.pt-xl-1,
		.py-xl-1 {
			padding-top: .375rem !important
		}

		.pr-xl-1,
		.px-xl-1 {
			padding-right: .375rem !important
		}

		.pb-xl-1,
		.py-xl-1 {
			padding-bottom: .375rem !important
		}

		.pl-xl-1,
		.px-xl-1 {
			padding-left: .375rem !important
		}

		.p-xl-2 {
			padding: .75rem !important
		}

		.pt-xl-2,
		.py-xl-2 {
			padding-top: .75rem !important
		}

		.pr-xl-2,
		.px-xl-2 {
			padding-right: .75rem !important
		}

		.pb-xl-2,
		.py-xl-2 {
			padding-bottom: .75rem !important
		}

		.pl-xl-2,
		.px-xl-2 {
			padding-left: .75rem !important
		}

		.p-xl-3 {
			padding: 1rem !important
		}

		.pt-xl-3,
		.py-xl-3 {
			padding-top: 1rem !important
		}

		.pr-xl-3,
		.px-xl-3 {
			padding-right: 1rem !important
		}

		.pb-xl-3,
		.py-xl-3 {
			padding-bottom: 1rem !important
		}

		.pl-xl-3,
		.px-xl-3 {
			padding-left: 1rem !important
		}

		.p-xl-4 {
			padding: 1.5rem !important
		}

		.pt-xl-4,
		.py-xl-4 {
			padding-top: 1.5rem !important
		}

		.pr-xl-4,
		.px-xl-4 {
			padding-right: 1.5rem !important
		}

		.pb-xl-4,
		.py-xl-4 {
			padding-bottom: 1.5rem !important
		}

		.pl-xl-4,
		.px-xl-4 {
			padding-left: 1.5rem !important
		}

		.p-xl-5 {
			padding: 2.75rem !important
		}

		.pt-xl-5,
		.py-xl-5 {
			padding-top: 2.75rem !important
		}

		.pr-xl-5,
		.px-xl-5 {
			padding-right: 2.75rem !important
		}

		.pb-xl-5,
		.py-xl-5 {
			padding-bottom: 2.75rem !important
		}

		.pl-xl-5,
		.px-xl-5 {
			padding-left: 2.75rem !important
		}

		.p-xl-gs {
			padding: 28px !important
		}

		.pt-xl-gs,
		.py-xl-gs {
			padding-top: 28px !important
		}

		.pr-xl-gs,
		.px-xl-gs {
			padding-right: 28px !important
		}

		.pb-xl-gs,
		.py-xl-gs {
			padding-bottom: 28px !important
		}

		.pl-xl-gs,
		.px-xl-gs {
			padding-left: 28px !important
		}

		.m-xl-n1 {
			margin: -.375rem !important
		}

		.mt-xl-n1,
		.my-xl-n1 {
			margin-top: -.375rem !important
		}

		.mr-xl-n1,
		.mx-xl-n1 {
			margin-right: -.375rem !important
		}

		.mb-xl-n1,
		.my-xl-n1 {
			margin-bottom: -.375rem !important
		}

		.ml-xl-n1,
		.mx-xl-n1 {
			margin-left: -.375rem !important
		}

		.m-xl-n2 {
			margin: -.75rem !important
		}

		.mt-xl-n2,
		.my-xl-n2 {
			margin-top: -.75rem !important
		}

		.mr-xl-n2,
		.mx-xl-n2 {
			margin-right: -.75rem !important
		}

		.mb-xl-n2,
		.my-xl-n2 {
			margin-bottom: -.75rem !important
		}

		.ml-xl-n2,
		.mx-xl-n2 {
			margin-left: -.75rem !important
		}

		.m-xl-n3 {
			margin: -1rem !important
		}

		.mt-xl-n3,
		.my-xl-n3 {
			margin-top: -1rem !important
		}

		.mr-xl-n3,
		.mx-xl-n3 {
			margin-right: -1rem !important
		}

		.mb-xl-n3,
		.my-xl-n3 {
			margin-bottom: -1rem !important
		}

		.ml-xl-n3,
		.mx-xl-n3 {
			margin-left: -1rem !important
		}

		.m-xl-n4 {
			margin: -1.5rem !important
		}

		.mt-xl-n4,
		.my-xl-n4 {
			margin-top: -1.5rem !important
		}

		.mr-xl-n4,
		.mx-xl-n4 {
			margin-right: -1.5rem !important
		}

		.mb-xl-n4,
		.my-xl-n4 {
			margin-bottom: -1.5rem !important
		}

		.ml-xl-n4,
		.mx-xl-n4 {
			margin-left: -1.5rem !important
		}

		.m-xl-n5 {
			margin: -2.75rem !important
		}

		.mt-xl-n5,
		.my-xl-n5 {
			margin-top: -2.75rem !important
		}

		.mr-xl-n5,
		.mx-xl-n5 {
			margin-right: -2.75rem !important
		}

		.mb-xl-n5,
		.my-xl-n5 {
			margin-bottom: -2.75rem !important
		}

		.ml-xl-n5,
		.mx-xl-n5 {
			margin-left: -2.75rem !important
		}

		.m-xl-ngs {
			margin: -28px !important
		}

		.mt-xl-ngs,
		.my-xl-ngs {
			margin-top: -28px !important
		}

		.mr-xl-ngs,
		.mx-xl-ngs {
			margin-right: -28px !important
		}

		.mb-xl-ngs,
		.my-xl-ngs {
			margin-bottom: -28px !important
		}

		.ml-xl-ngs,
		.mx-xl-ngs {
			margin-left: -28px !important
		}

		.m-xl-auto {
			margin: auto !important
		}

		.mt-xl-auto,
		.my-xl-auto {
			margin-top: auto !important
		}

		.mr-xl-auto,
		.mx-xl-auto {
			margin-right: auto !important
		}

		.mb-xl-auto,
		.my-xl-auto {
			margin-bottom: auto !important
		}

		.ml-xl-auto,
		.mx-xl-auto {
			margin-left: auto !important
		}
	}

	@media (min-width: 1540px) {
		.m-xxl-0 {
			margin: 0 !important
		}

		.mt-xxl-0,
		.my-xxl-0 {
			margin-top: 0 !important
		}

		.mr-xxl-0,
		.mx-xxl-0 {
			margin-right: 0 !important
		}

		.mb-xxl-0,
		.my-xxl-0 {
			margin-bottom: 0 !important
		}

		.ml-xxl-0,
		.mx-xxl-0 {
			margin-left: 0 !important
		}

		.m-xxl-1 {
			margin: .375rem !important
		}

		.mt-xxl-1,
		.my-xxl-1 {
			margin-top: .375rem !important
		}

		.mr-xxl-1,
		.mx-xxl-1 {
			margin-right: .375rem !important
		}

		.mb-xxl-1,
		.my-xxl-1 {
			margin-bottom: .375rem !important
		}

		.ml-xxl-1,
		.mx-xxl-1 {
			margin-left: .375rem !important
		}

		.m-xxl-2 {
			margin: .75rem !important
		}

		.mt-xxl-2,
		.my-xxl-2 {
			margin-top: .75rem !important
		}

		.mr-xxl-2,
		.mx-xxl-2 {
			margin-right: .75rem !important
		}

		.mb-xxl-2,
		.my-xxl-2 {
			margin-bottom: .75rem !important
		}

		.ml-xxl-2,
		.mx-xxl-2 {
			margin-left: .75rem !important
		}

		.m-xxl-3 {
			margin: 1rem !important
		}

		.mt-xxl-3,
		.my-xxl-3 {
			margin-top: 1rem !important
		}

		.mr-xxl-3,
		.mx-xxl-3 {
			margin-right: 1rem !important
		}

		.mb-xxl-3,
		.my-xxl-3 {
			margin-bottom: 1rem !important
		}

		.ml-xxl-3,
		.mx-xxl-3 {
			margin-left: 1rem !important
		}

		.m-xxl-4 {
			margin: 1.5rem !important
		}

		.mt-xxl-4,
		.my-xxl-4 {
			margin-top: 1.5rem !important
		}

		.mr-xxl-4,
		.mx-xxl-4 {
			margin-right: 1.5rem !important
		}

		.mb-xxl-4,
		.my-xxl-4 {
			margin-bottom: 1.5rem !important
		}

		.ml-xxl-4,
		.mx-xxl-4 {
			margin-left: 1.5rem !important
		}

		.m-xxl-5 {
			margin: 2.75rem !important
		}

		.mt-xxl-5,
		.my-xxl-5 {
			margin-top: 2.75rem !important
		}

		.mr-xxl-5,
		.mx-xxl-5 {
			margin-right: 2.75rem !important
		}

		.mb-xxl-5,
		.my-xxl-5 {
			margin-bottom: 2.75rem !important
		}

		.ml-xxl-5,
		.mx-xxl-5 {
			margin-left: 2.75rem !important
		}

		.m-xxl-gs {
			margin: 28px !important
		}

		.mt-xxl-gs,
		.my-xxl-gs {
			margin-top: 28px !important
		}

		.mr-xxl-gs,
		.mx-xxl-gs {
			margin-right: 28px !important
		}

		.mb-xxl-gs,
		.my-xxl-gs {
			margin-bottom: 28px !important
		}

		.ml-xxl-gs,
		.mx-xxl-gs {
			margin-left: 28px !important
		}

		.p-xxl-0 {
			padding: 0 !important
		}

		.pt-xxl-0,
		.py-xxl-0 {
			padding-top: 0 !important
		}

		.pr-xxl-0,
		.px-xxl-0 {
			padding-right: 0 !important
		}

		.pb-xxl-0,
		.py-xxl-0 {
			padding-bottom: 0 !important
		}

		.pl-xxl-0,
		.px-xxl-0 {
			padding-left: 0 !important
		}

		.p-xxl-1 {
			padding: .375rem !important
		}

		.pt-xxl-1,
		.py-xxl-1 {
			padding-top: .375rem !important
		}

		.pr-xxl-1,
		.px-xxl-1 {
			padding-right: .375rem !important
		}

		.pb-xxl-1,
		.py-xxl-1 {
			padding-bottom: .375rem !important
		}

		.pl-xxl-1,
		.px-xxl-1 {
			padding-left: .375rem !important
		}

		.p-xxl-2 {
			padding: .75rem !important
		}

		.pt-xxl-2,
		.py-xxl-2 {
			padding-top: .75rem !important
		}

		.pr-xxl-2,
		.px-xxl-2 {
			padding-right: .75rem !important
		}

		.pb-xxl-2,
		.py-xxl-2 {
			padding-bottom: .75rem !important
		}

		.pl-xxl-2,
		.px-xxl-2 {
			padding-left: .75rem !important
		}

		.p-xxl-3 {
			padding: 1rem !important
		}

		.pt-xxl-3,
		.py-xxl-3 {
			padding-top: 1rem !important
		}

		.pr-xxl-3,
		.px-xxl-3 {
			padding-right: 1rem !important
		}

		.pb-xxl-3,
		.py-xxl-3 {
			padding-bottom: 1rem !important
		}

		.pl-xxl-3,
		.px-xxl-3 {
			padding-left: 1rem !important
		}

		.p-xxl-4 {
			padding: 1.5rem !important
		}

		.pt-xxl-4,
		.py-xxl-4 {
			padding-top: 1.5rem !important
		}

		.pr-xxl-4,
		.px-xxl-4 {
			padding-right: 1.5rem !important
		}

		.pb-xxl-4,
		.py-xxl-4 {
			padding-bottom: 1.5rem !important
		}

		.pl-xxl-4,
		.px-xxl-4 {
			padding-left: 1.5rem !important
		}

		.p-xxl-5 {
			padding: 2.75rem !important
		}

		.pt-xxl-5,
		.py-xxl-5 {
			padding-top: 2.75rem !important
		}

		.pr-xxl-5,
		.px-xxl-5 {
			padding-right: 2.75rem !important
		}

		.pb-xxl-5,
		.py-xxl-5 {
			padding-bottom: 2.75rem !important
		}

		.pl-xxl-5,
		.px-xxl-5 {
			padding-left: 2.75rem !important
		}

		.p-xxl-gs {
			padding: 28px !important
		}

		.pt-xxl-gs,
		.py-xxl-gs {
			padding-top: 28px !important
		}

		.pr-xxl-gs,
		.px-xxl-gs {
			padding-right: 28px !important
		}

		.pb-xxl-gs,
		.py-xxl-gs {
			padding-bottom: 28px !important
		}

		.pl-xxl-gs,
		.px-xxl-gs {
			padding-left: 28px !important
		}

		.m-xxl-n1 {
			margin: -.375rem !important
		}

		.mt-xxl-n1,
		.my-xxl-n1 {
			margin-top: -.375rem !important
		}

		.mr-xxl-n1,
		.mx-xxl-n1 {
			margin-right: -.375rem !important
		}

		.mb-xxl-n1,
		.my-xxl-n1 {
			margin-bottom: -.375rem !important
		}

		.ml-xxl-n1,
		.mx-xxl-n1 {
			margin-left: -.375rem !important
		}

		.m-xxl-n2 {
			margin: -.75rem !important
		}

		.mt-xxl-n2,
		.my-xxl-n2 {
			margin-top: -.75rem !important
		}

		.mr-xxl-n2,
		.mx-xxl-n2 {
			margin-right: -.75rem !important
		}

		.mb-xxl-n2,
		.my-xxl-n2 {
			margin-bottom: -.75rem !important
		}

		.ml-xxl-n2,
		.mx-xxl-n2 {
			margin-left: -.75rem !important
		}

		.m-xxl-n3 {
			margin: -1rem !important
		}

		.mt-xxl-n3,
		.my-xxl-n3 {
			margin-top: -1rem !important
		}

		.mr-xxl-n3,
		.mx-xxl-n3 {
			margin-right: -1rem !important
		}

		.mb-xxl-n3,
		.my-xxl-n3 {
			margin-bottom: -1rem !important
		}

		.ml-xxl-n3,
		.mx-xxl-n3 {
			margin-left: -1rem !important
		}

		.m-xxl-n4 {
			margin: -1.5rem !important
		}

		.mt-xxl-n4,
		.my-xxl-n4 {
			margin-top: -1.5rem !important
		}

		.mr-xxl-n4,
		.mx-xxl-n4 {
			margin-right: -1.5rem !important
		}

		.mb-xxl-n4,
		.my-xxl-n4 {
			margin-bottom: -1.5rem !important
		}

		.ml-xxl-n4,
		.mx-xxl-n4 {
			margin-left: -1.5rem !important
		}

		.m-xxl-n5 {
			margin: -2.75rem !important
		}

		.mt-xxl-n5,
		.my-xxl-n5 {
			margin-top: -2.75rem !important
		}

		.mr-xxl-n5,
		.mx-xxl-n5 {
			margin-right: -2.75rem !important
		}

		.mb-xxl-n5,
		.my-xxl-n5 {
			margin-bottom: -2.75rem !important
		}

		.ml-xxl-n5,
		.mx-xxl-n5 {
			margin-left: -2.75rem !important
		}

		.m-xxl-ngs {
			margin: -28px !important
		}

		.mt-xxl-ngs,
		.my-xxl-ngs {
			margin-top: -28px !important
		}

		.mr-xxl-ngs,
		.mx-xxl-ngs {
			margin-right: -28px !important
		}

		.mb-xxl-ngs,
		.my-xxl-ngs {
			margin-bottom: -28px !important
		}

		.ml-xxl-ngs,
		.mx-xxl-ngs {
			margin-left: -28px !important
		}

		.m-xxl-auto {
			margin: auto !important
		}

		.mt-xxl-auto,
		.my-xxl-auto {
			margin-top: auto !important
		}

		.mr-xxl-auto,
		.mx-xxl-auto {
			margin-right: auto !important
		}

		.mb-xxl-auto,
		.my-xxl-auto {
			margin-bottom: auto !important
		}

		.ml-xxl-auto,
		.mx-xxl-auto {
			margin-left: auto !important
		}
	}

	.stretched-link::after {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		z-index: 1;
		pointer-events: auto;
		content: "";
		background-color: rgba(0, 0, 0, 0)
	}

	.text-monospace,
	.ff-mono {
		font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important
	}

	.text-justify {
		text-align: justify !important
	}

	.text-wrap {
		white-space: normal !important
	}

	.text-nowrap {
		white-space: nowrap !important
	}

	.text-truncate {
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap
	}

	.text-left {
		text-align: left !important
	}

	.text-right {
		text-align: right !important
	}

	.text-center {
		text-align: center !important
	}

	@media (min-width: 576px) {
		.text-sm-left {
			text-align: left !important
		}

		.text-sm-right {
			text-align: right !important
		}

		.text-sm-center {
			text-align: center !important
		}
	}

	@media (min-width: 768px) {
		.text-md-left {
			text-align: left !important
		}

		.text-md-right {
			text-align: right !important
		}

		.text-md-center {
			text-align: center !important
		}
	}

	@media (min-width: 992px) {
		.text-lg-left {
			text-align: left !important
		}

		.text-lg-right {
			text-align: right !important
		}

		.text-lg-center {
			text-align: center !important
		}
	}

	@media (min-width: 1200px) {
		.text-xl-left {
			text-align: left !important
		}

		.text-xl-right {
			text-align: right !important
		}

		.text-xl-center {
			text-align: center !important
		}
	}

	@media (min-width: 1540px) {
		.text-xxl-left {
			text-align: left !important
		}

		.text-xxl-right {
			text-align: right !important
		}

		.text-xxl-center {
			text-align: center !important
		}
	}

	.text-lowercase,
	.lcap {
		text-transform: lowercase !important
	}

	.text-uppercase,
	.ucap {
		text-transform: uppercase !important
	}

	.text-capitalize,
	.ccap {
		text-transform: capitalize !important
	}

	.font-weight-light,
	.fw-light {
		font-weight: 300 !important
	}

	.font-weight-lighter,
	.fw-lighter {
		font-weight: lighter !important
	}

	.font-weight-normal,
	.fw-normal {
		font-weight: 400 !important
	}

	.font-weight-bold,
	.fw-bold {
		font-weight: 700 !important
	}

	.font-weight-bolder,
	.fw-bolder {
		font-weight: bolder !important
	}

	.font-italic,
	.ff-italic {
		font-style: italic !important
	}

	.text-white {
		color: #fff !important
	}

	.text-primary {
		color: #6576ff !important
	}

	a.text-primary:hover,
	a.text-primary:focus {
		color: #1932ff !important
	}

	.text-secondary {
		color: #364a63 !important
	}

	a.text-secondary:hover,
	a.text-secondary:focus {
		color: #1b2532 !important
	}

	.text-success {
		color: #1ee0ac !important
	}

	a.text-success:hover,
	a.text-success:focus {
		color: #159d78 !important
	}

	.text-info {
		color: #09c2de !important
	}

	a.text-info:hover,
	a.text-info:focus {
		color: #068294 !important
	}

	.text-warning {
		color: #f4bd0e !important
	}

	a.text-warning:hover,
	a.text-warning:focus {
		color: #ae8608 !important
	}

	.text-danger {
		color: #e85347 !important
	}

	a.text-danger:hover,
	a.text-danger:focus {
		color: #c92619 !important
	}

	.text-dark {
		color: #1c2b46 !important
	}

	a.text-dark:hover,
	a.text-dark:focus {
		color: #06090f !important
	}

	.text-gray {
		color: #8091a7 !important
	}

	a.text-gray:hover,
	a.text-gray:focus {
		color: #596b81 !important
	}

	.text-light {
		color: #e5e9f2 !important
	}

	a.text-light:hover,
	a.text-light:focus {
		color: #b2bed9 !important
	}

	.text-lighter {
		color: #f5f6fa !important
	}

	a.text-lighter:hover,
	a.text-lighter:focus {
		color: #c2c8e1 !important
	}

	.text-body {
		color: #526484 !important
	}

	.text-muted {
		color: #8094ae !important
	}

	.text-black-50 {
		color: rgba(0, 0, 0, 0.5) !important
	}

	.text-white-50 {
		color: rgba(255, 255, 255, 0.5) !important
	}

	.text-hide {
		font: 0/0 a;
		color: transparent;
		text-shadow: none;
		background-color: transparent;
		border: 0
	}

	.text-decoration-none {
		text-decoration: none !important
	}

	.text-break {
		word-break: break-word !important;
		overflow-wrap: break-word !important
	}

	.text-reset {
		color: inherit !important
	}

	.visible {
		visibility: visible !important
	}

	.invisible {
		visibility: hidden !important
	}

	@media print {

		*,
		*::before,
		*::after {
			text-shadow: none !important;
			box-shadow: none !important
		}

		a:not(.btn) {
			text-decoration: underline
		}

		abbr[title]::after {
			content: " ("attr(title) ")"
		}

		pre {
			white-space: pre-wrap !important
		}

		pre,
		blockquote {
			border: 1px solid #8091a7;
			page-break-inside: avoid
		}

		thead {
			display: table-header-group
		}

		tr,
		img {
			page-break-inside: avoid
		}

		p,
		h2,
		h3 {
			orphans: 3;
			widows: 3
		}

		h2,
		h3 {
			page-break-after: avoid
		}

		@page {
			size: a3
		}

		body {
			min-width: 992px !important
		}

		.container {
			min-width: 992px !important
		}

		.navbar {
			display: none
		}

		.badge {
			border: 1px solid #000
		}

		.table {
			border-collapse: collapse !important
		}

		.table td,
		.table th {
			background-color: #fff !important
		}

		.table-bordered th,
		.table-bordered td {
			border: 1px solid #dbdfea !important
		}

		.table-dark {
			color: inherit
		}

		.table-dark th,
		.table-dark td,
		.table-dark thead th,
		.table-dark tbody+tbody {
			border-color: #dbdfea
		}

		.table .thead-dark th {
			color: inherit;
			border-color: #dbdfea
		}
	}

	html {
		font-size: 16px
	}

	ol,
	ul {
		list-style: none;
		margin: 0;
		padding: 0
	}

	a {
		transition: color .4s, background-color .4s, border .4s, box-shadow .4s
	}

	a:focus {
		outline: none
	}

	img {
		max-width: 100%
	}

	strong {
		font-weight: 500
	}

	h1:last-child,
	h2:last-child,
	h3:last-child,
	h4:last-child,
	h5:last-child,
	h6:last-child,
	.h1:last-child,
	.h2:last-child,
	.h3:last-child,
	.h4:last-child,
	.h5:last-child,
	.h6:last-child,
	p:last-child {
		margin-bottom: 0
	}

	h1,
	.h1,
	h2,
	.h2 {
		letter-spacing: -0.03em
	}

	h3,
	.h3,
	h4,
	.h4 {
		letter-spacing: -0.02em
	}

	h5,
	.h5,
	h6,
	.h6 {
		letter-spacing: -0.01em
	}

	@media (min-width: 992px) {

		h1,
		.h1 {
			font-size: 3.75rem;
			font-weight: 400;
			letter-spacing: -0.04em
		}

		h2,
		.h2 {
			font-size: 2.5rem;
			letter-spacing: -0.03em
		}

		h3,
		.h3 {
			font-size: 2rem;
			letter-spacing: -0.03em
		}

		h4,
		.h4 {
			font-size: 1.5rem
		}

		h5,
		.h5 {
			font-size: 1.25rem
		}

		h6,
		.h6 {
			font-size: 1.05rem
		}
	}

	.list-inline li {
		display: inline-block
	}

	.list-inline li:not(:last-child) {
		margin-right: 1rem
	}

	.ellipsis,
	.text-ellipsis,
	.tb-tnx-item .tb-tnx-desc,
	.tb-odr-item .tb-odr-info,
	.attach-item span,
	.nk-msg-text .title {
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis
	}

	.ff-base {
		font-family: Roboto, sans-serif !important
	}

	.ff-alt {
		font-family: Nunito, sans-serif !important
	}

	.fw-medium {
		font-weight: 500 !important
	}

	.text-white h1,
	.text-white h2,
	.text-white h3,
	.text-white h4,
	.text-white h5,
	.text-white h6,
	.text-white .h1,
	.text-white .h2,
	.text-white .h3,
	.text-white .h4,
	.text-white .h5,
	.text-white .h6 {
		color: #fff
	}

	@media (min-width: 992px) {
		.lead {
			font-size: 1.09375rem
		}
	}

	.text-soft {
		color: #8094ae !important
	}

	.text-base {
		color: #526484 !important
	}

	.text-head {
		color: #364a63 !important
	}

	.circle {
		border-radius: 50%
	}

	.round {
		border-radius: 4px
	}

	.round-sm {
		border-radius: 3px
	}

	.round-lg {
		border-radius: 5px
	}

	.round-xl {
		border-radius: 10px
	}

	svg {
		height: 100%;
		max-width: 100%
	}

	.sq {
		height: 40px;
		width: 40px
	}

	.sq-xs {
		height: 18px;
		width: 18px
	}

	.sq-sm {
		height: 24px;
		width: 24px
	}

	.sq-md {
		height: 32px;
		width: 32px
	}

	.sq-lg {
		height: 60px;
		width: 60px
	}

	.sq-xl {
		height: 80px;
		width: 80px
	}

	.divider {
		border-top: 1px solid #e5e9f2 !important;
		margin: 28px 0;
		display: block
	}

	.divider.xs {
		margin: .5rem 0
	}

	.divider.sm {
		margin: 1rem 0
	}

	.divider.md {
		margin: 1.5rem 0
	}

	.divider.lg {
		margin: 2.25rem 0
	}

	.divider.xl {
		margin: 2.75rem 0
	}

	.bg-blue {
		background-color: #559bfb !important
	}

	.text-blue {
		color: #559bfb !important
	}

	.bg-azure {
		background-color: #1676fb !important
	}

	.text-azure {
		color: #1676fb !important
	}

	.bg-indigo {
		background-color: #2c3782 !important
	}

	.text-indigo {
		color: #2c3782 !important
	}

	.bg-purple {
		background-color: #816bff !important
	}

	.text-purple {
		color: #816bff !important
	}

	.bg-pink {
		background-color: #ff63a5 !important
	}

	.text-pink {
		color: #ff63a5 !important
	}

	.bg-orange {
		background-color: #ffa353 !important
	}

	.text-orange {
		color: #ffa353 !important
	}

	.bg-teal {
		background-color: #20c997 !important
	}

	.text-teal {
		color: #20c997 !important
	}

	.bg-blue-dim {
		background-color: #e9f2fe !important
	}

	.text-blue-dim {
		color: #e9f2fe !important
	}

	.bg-azure-dim {
		background-color: #e1edfe !important
	}

	.text-azure-dim {
		color: #e1edfe !important
	}

	.bg-indigo-dim {
		background-color: #e4e5ef !important
	}

	.text-indigo-dim {
		color: #e4e5ef !important
	}

	.bg-purple-dim {
		background-color: #efecff !important
	}

	.text-purple-dim {
		color: #efecff !important
	}

	.bg-pink-dim {
		background-color: #ffebf3 !important
	}

	.text-pink-dim {
		color: #ffebf3 !important
	}

	.bg-orange-dim {
		background-color: #fff3e9 !important
	}

	.text-orange-dim {
		color: #fff3e9 !important
	}

	.bg-teal-dim {
		background-color: #e2f8f1 !important
	}

	.text-teal-dim {
		color: #e2f8f1 !important
	}

	.bg-primary-dim,
	.dual-listbox .dual-listbox__item:active,
	.dual-listbox .dual-listbox__item.dual-listbox__item--selected {
		background-color: #ebedff !important
	}

	.text-primary-dim {
		color: #ebedff !important
	}

	.bg-success-dim {
		background-color: #e2fbf4 !important
	}

	.text-success-dim {
		color: #e2fbf4 !important
	}

	.bg-info-dim {
		background-color: #dff7fb !important
	}

	.text-info-dim {
		color: #dff7fb !important
	}

	.bg-warning-dim {
		background-color: #fef6e0 !important
	}

	.text-warning-dim {
		color: #fef6e0 !important
	}

	.bg-danger-dim {
		background-color: #fce9e7 !important
	}

	.text-danger-dim {
		color: #fce9e7 !important
	}

	.bg-secondary-dim {
		background-color: #e5ecf5 !important
	}

	.text-secondary-dim {
		color: #e5ecf5 !important
	}

	.bg-dark-dim {
		background-color: #d9e1ef !important
	}

	.text-dark-dim {
		color: #d9e1ef !important
	}

	.bg-gray-dim {
		background-color: #edf2f9 !important
	}

	.text-gray-dim {
		color: #edf2f9 !important
	}

	.bg-gray-100 {
		background-color: #ebeef2 !important
	}

	.bg-gray-200 {
		background-color: #e5e9f2 !important
	}

	.bg-gray-300 {
		background-color: #dbdfea !important
	}

	.bg-gray-400 {
		background-color: #b7c2d0 !important
	}

	.bg-gray-500 {
		background-color: #8091a7 !important
	}

	.bg-gray-600 {
		background-color: #3c4d62 !important
	}

	.bg-gray-700 {
		background-color: #344357 !important
	}

	.bg-gray-800 {
		background-color: #2b3748 !important
	}

	.bg-gray-900 {
		background-color: #1f2b3a !important
	}

	.bg-abstract {
		background-image: linear-gradient(to right, #2c3782 calc(60% - 150px), #39469f calc(60% - 150px), #39469f 60%, #4856b5 60%, #4856b5 calc(60% + 150px), #5b6ac6 calc(60% + 150px), #5b6ac6 100%)
	}

	.bg-white-1 {
		background: rgba(255, 255, 255, 0.1) !important
	}

	.bg-white-2 {
		background: rgba(255, 255, 255, 0.2) !important
	}

	.bg-white-3 {
		background: rgba(255, 255, 255, 0.3) !important
	}

	.bg-white-4 {
		background: rgba(255, 255, 255, 0.4) !important
	}

	.bg-white-5 {
		background: rgba(255, 255, 255, 0.5) !important
	}

	.bg-white-6 {
		background: rgba(255, 255, 255, 0.6) !important
	}

	.bg-white-7 {
		background: rgba(255, 255, 255, 0.7) !important
	}

	.bg-white-8 {
		background: rgba(255, 255, 255, 0.8) !important
	}

	.bg-white-9 {
		background: rgba(255, 255, 255, 0.9) !important
	}

	.border-transparent {
		border-color: transparent
	}

	.w-80px {
		width: 80px !important
	}

	.w-min-80px {
		min-width: 80px !important
	}

	.w-max-80px {
		max-width: 80px !important
	}

	.w-90px {
		width: 90px !important
	}

	.w-min-90px {
		min-width: 90px !important
	}

	.w-max-90px {
		max-width: 90px !important
	}

	.w-100px {
		width: 100px !important
	}

	.w-min-100px {
		min-width: 100px !important
	}

	.w-max-100px {
		max-width: 100px !important
	}

	.w-110px {
		width: 110px !important
	}

	.w-min-110px {
		min-width: 110px !important
	}

	.w-max-110px {
		max-width: 110px !important
	}

	.w-120px {
		width: 120px !important
	}

	.w-min-120px {
		min-width: 120px !important
	}

	.w-max-120px {
		max-width: 120px !important
	}

	.w-125px {
		width: 125px !important
	}

	.w-min-125px {
		min-width: 125px !important
	}

	.w-max-125px {
		max-width: 125px !important
	}

	.w-130px {
		width: 130px !important
	}

	.w-min-130px {
		min-width: 130px !important
	}

	.w-max-130px {
		max-width: 130px !important
	}

	.w-140px {
		width: 140px !important
	}

	.w-min-140px {
		min-width: 140px !important
	}

	.w-max-140px {
		max-width: 140px !important
	}

	.w-150px {
		width: 150px !important
	}

	.w-min-150px {
		min-width: 150px !important
	}

	.w-max-150px {
		max-width: 150px !important
	}

	.w-175px {
		width: 175px !important
	}

	.w-min-175px {
		min-width: 175px !important
	}

	.w-max-175px {
		max-width: 175px !important
	}

	.w-200px {
		width: 200px !important
	}

	.w-min-200px {
		min-width: 200px !important
	}

	.w-max-200px {
		max-width: 200px !important
	}

	.w-220px {
		width: 220px !important
	}

	.w-min-220px {
		min-width: 220px !important
	}

	.w-max-220px {
		max-width: 220px !important
	}

	.w-225px {
		width: 225px !important
	}

	.w-min-225px {
		min-width: 225px !important
	}

	.w-max-225px {
		max-width: 225px !important
	}

	.w-250px {
		width: 250px !important
	}

	.w-min-250px {
		min-width: 250px !important
	}

	.w-max-250px {
		max-width: 250px !important
	}

	.w-300px {
		width: 300px !important
	}

	.w-min-300px {
		min-width: 300px !important
	}

	.w-max-300px {
		max-width: 300px !important
	}

	.w-350px {
		width: 350px !important
	}

	.w-min-350px {
		min-width: 350px !important
	}

	.w-max-350px {
		max-width: 350px !important
	}

	.w-400px {
		width: 400px !important
	}

	.w-min-400px {
		min-width: 400px !important
	}

	.w-max-400px {
		max-width: 400px !important
	}

	.w-550px {
		width: 550px !important
	}

	.w-min-550px {
		min-width: 550px !important
	}

	.w-max-550px {
		max-width: 550px !important
	}

	.w-max-100,
	.wide-xs-fix,
	.wide-sm-fix,
	.wide-md-fix,
	.wide-lg-fix {
		max-width: 100% !important
	}

	.w-min-100 {
		min-width: 100% !important
	}

	.w-max-auto {
		max-width: inherit !important
	}

	.w-min-auto {
		min-width: auto !important
	}

	.w-15 {
		width: 15% !important
	}

	.w-20 {
		width: 20% !important
	}

	.w-30 {
		width: 30% !important
	}

	.w-35 {
		width: 35% !important
	}

	.w-40 {
		width: 40% !important
	}

	.w-45 {
		width: 45% !important
	}

	.w-55 {
		width: 55% !important
	}

	.w-60 {
		width: 60% !important
	}

	.w-65 {
		width: 65% !important
	}

	.w-70 {
		width: 70% !important
	}

	.w-80 {
		width: 80% !important
	}

	.w-85 {
		width: 85% !important
	}

	.w-90 {
		width: 90% !important
	}

	.w-95 {
		width: 95% !important
	}

	@media (min-width: 576px) {
		.wide-xs {
			max-width: 520px !important
		}

		.wide-xs-fix {
			width: 520px !important
		}
	}

	@media (min-width: 768px) {
		.wide-sm {
			max-width: 720px !important
		}

		.wide-sm-fix {
			width: 720px !important
		}
	}

	@media (min-width: 992px) {
		.wide-md {
			max-width: 960px !important
		}

		.wide-md-fix {
			width: 960px !important
		}
	}

	@media (min-width: 1200px) {
		.wide-lg {
			max-width: 1140px !important
		}

		.wide-lg-fix {
			width: 1140px !important
		}
	}

	@media (min-width: 1280px) {
		.wide-xl {
			max-width: 1240px !important
		}

		.wide-xl-fix {
			width: 1240px !important
		}
	}

	.wide-xs-fix {
		width: 520px !important
	}

	.wide-sm-fix {
		width: 720px !important
	}

	.wide-md-fix {
		width: 960px !important
	}

	.wide-lg-fix {
		width: 1140px !important
	}

	.wide-xl-fix {
		width: 1240px !important
	}

	@media (min-width: 1200px) and (max-width: 1660px) {
		.wide-fit {
			max-width: 1140px
		}
	}

	.h-100px {
		height: 100px !important
	}

	.h-min-100px {
		min-height: 100px !important
	}

	.h-max-100px {
		max-height: 100px !important
	}

	.h-150px {
		height: 150px !important
	}

	.h-min-150px {
		min-height: 150px !important
	}

	.h-max-150px {
		max-height: 150px !important
	}

	.h-175px {
		height: 175px !important
	}

	.h-min-175px {
		min-height: 175px !important
	}

	.h-max-175px {
		max-height: 175px !important
	}

	.h-200px {
		height: 200px !important
	}

	.h-min-200px {
		min-height: 200px !important
	}

	.h-max-200px {
		max-height: 200px !important
	}

	.h-225px {
		height: 225px !important
	}

	.h-min-225px {
		min-height: 225px !important
	}

	.h-max-225px {
		max-height: 225px !important
	}

	.h-250px {
		height: 250px !important
	}

	.h-min-250px {
		min-height: 250px !important
	}

	.h-max-250px {
		max-height: 250px !important
	}

	.h-275px {
		height: 275px !important
	}

	.h-min-275px {
		min-height: 275px !important
	}

	.h-max-275px {
		max-height: 275px !important
	}

	.h-300px {
		height: 300px !important
	}

	.h-min-300px {
		min-height: 300px !important
	}

	.h-max-300px {
		max-height: 300px !important
	}

	.h-325px {
		height: 325px !important
	}

	.h-min-325px {
		min-height: 325px !important
	}

	.h-max-325px {
		max-height: 325px !important
	}

	.h-350px {
		height: 350px !important
	}

	.h-min-350px {
		min-height: 350px !important
	}

	.h-max-350px {
		max-height: 350px !important
	}

	.h-375px {
		height: 375px !important
	}

	.h-min-375px {
		min-height: 375px !important
	}

	.h-max-375px {
		max-height: 375px !important
	}

	.h-400px {
		height: 400px !important
	}

	.h-min-400px {
		min-height: 400px !important
	}

	.h-max-400px {
		max-height: 400px !important
	}

	.h-425px {
		height: 425px !important
	}

	.h-min-425px {
		min-height: 425px !important
	}

	.h-max-425px {
		max-height: 425px !important
	}

	.h-450px {
		height: 450px !important
	}

	.h-min-450px {
		min-height: 450px !important
	}

	.h-max-450px {
		max-height: 450px !important
	}

	.h-475px {
		height: 475px !important
	}

	.h-min-475px {
		min-height: 475px !important
	}

	.h-max-475px {
		max-height: 475px !important
	}

	.h-500px {
		height: 500px !important
	}

	.h-min-500px {
		min-height: 500px !important
	}

	.h-max-500px {
		max-height: 500px !important
	}

	.absolute-top-left {
		position: absolute;
		top: 0;
		left: 0
	}

	.absolute-top-right {
		position: absolute;
		top: 0;
		right: 0
	}

	.absolute-bottom-left {
		position: absolute;
		bottom: 0;
		left: 0
	}

	.absolute-bottom-right {
		position: absolute;
		bottom: 0;
		right: 0
	}

	.shrink-0 {
		flex-shrink: 0
	}

	.badge {
		position: relative;
		border: 1px solid currentColor;
		line-height: 1.125rem;
		font-family: Roboto, sans-serif;
		letter-spacing: 0.01em;
		vertical-align: middle;
		display: inline-flex
	}

	.badge .icon+span,
	.badge span+.icon {
		padding-left: 4px
	}

	.badge-sm {
		padding: .3125rem .75rem;
		font-size: .75rem
	}

	.badge-sm.badge-pill {
		padding: .3125rem .875rem
	}

	.badge-md {
		padding: .47rem 1rem;
		font-size: .8125rem !important
	}

	.badge-lg {
		padding: .75rem 1.25rem;
		font-size: .93rem !important
	}

	.badge-xl {
		padding: .875rem 1.5rem;
		font-size: 1.125rem !important
	}

	.badge-light {
		color: #364a63
	}

	.badge-lighter {
		color: #526484
	}

	.badge .icon {
		font-size: 1rem
	}

	.badge-primary {
		border-color: #6576ff
	}

	.badge-secondary {
		border-color: #364a63
	}

	.badge-success {
		border-color: #1ee0ac
	}

	.badge-info {
		border-color: #09c2de
	}

	.badge-warning {
		border-color: #f4bd0e
	}

	.badge-danger {
		border-color: #e85347
	}

	.badge-dark {
		border-color: #1c2b46
	}

	.badge-gray {
		border-color: #8091a7
	}

	.badge-light {
		border-color: #e5e9f2
	}

	.badge-lighter {
		border-color: #f5f6fa
	}

	.badge-outline-primary {
		color: #6576ff;
		border-color: #a3adff
	}

	.badge-outline-secondary {
		color: #364a63;
		border-color: #8692a1
	}

	.badge-outline-success {
		color: #1ee0ac;
		border-color: #78eccd
	}

	.badge-outline-info {
		color: #09c2de;
		border-color: #6bdaeb
	}

	.badge-outline-warning {
		color: #f4bd0e;
		border-color: #f8d76e
	}

	.badge-outline-danger {
		color: #e85347;
		border-color: #f19891
	}

	.badge-outline-dark {
		color: #1c2b46;
		border-color: #778090
	}

	.badge-outline-gray {
		color: #8091a7;
		border-color: #b3bdca
	}

	.badge-outline-light {
		color: #b7c2d0;
		border-color: #d4dae3
	}

	.badge-outline-lighter {
		color: #e5e9f2;
		border-color: #eff2f7
	}

	.badge-dim.badge-primary {
		color: #6576ff;
		background-color: #eef0ff;
		border-color: #eef0ff
	}

	.badge-dim.badge-outline-primary {
		color: #6576ff;
		background-color: #eef0ff;
		border-color: #c1c8ff
	}

	.badge-dim.badge-secondary {
		color: #364a63;
		background-color: #e9ebee;
		border-color: #e9ebee
	}

	.badge-dim.badge-outline-secondary {
		color: #364a63;
		background-color: #e9ebee;
		border-color: #afb7c1
	}

	.badge-dim.badge-success {
		color: #1ee0ac;
		background-color: #e6fcf6;
		border-color: #e6fcf6
	}

	.badge-dim.badge-outline-success {
		color: #1ee0ac;
		background-color: #e6fcf6;
		border-color: #a5f3de
	}

	.badge-dim.badge-info {
		color: #09c2de;
		background-color: #e4f8fb;
		border-color: #e4f8fb
	}

	.badge-dim.badge-outline-info {
		color: #09c2de;
		background-color: #e4f8fb;
		border-color: #9de7f2
	}

	.badge-dim.badge-warning {
		color: #f4bd0e;
		background-color: #fef8e4;
		border-color: #fef8e4
	}

	.badge-dim.badge-outline-warning {
		color: #f4bd0e;
		background-color: #fef8e4;
		border-color: #fbe59f
	}

	.badge-dim.badge-danger {
		color: #e85347;
		background-color: #fceceb;
		border-color: #fceceb
	}

	.badge-dim.badge-outline-danger {
		color: #e85347;
		background-color: #fceceb;
		border-color: #f6bab5
	}

	.badge-dim.badge-dark {
		color: #1c2b46;
		background-color: #e6e8eb;
		border-color: #e6e8eb
	}

	.badge-dim.badge-outline-dark {
		color: #1c2b46;
		background-color: #e6e8eb;
		border-color: #a4aab5
	}

	.badge-dim.badge-gray {
		color: #8091a7;
		background-color: #f1f3f5;
		border-color: #f1f3f5
	}

	.badge-dim.badge-outline-gray {
		color: #8091a7;
		background-color: #f1f3f5;
		border-color: #ccd3dc
	}

	.badge-dim.badge-light {
		color: #b7c2d0;
		background-color: #f7f8fa;
		border-color: #f7f8fa
	}

	.badge-dim.badge-outline-light {
		color: #b7c2d0;
		background-color: #f7f8fa;
		border-color: #e2e7ec
	}

	.badge-dim.badge-lighter {
		color: #e5e9f2;
		background-color: #fcfdfe;
		border-color: #fcfdfe
	}

	.badge-dim.badge-outline-lighter {
		color: #e5e9f2;
		background-color: #fcfdfe;
		border-color: #f5f6fa
	}

	.badge-dot {
		display: inline-flex;
		align-items: center;
		background-color: transparent;
		border: none;
		padding-left: 12px;
		padding-right: 0;
		font-size: 12px
	}

	.badge-dot:before {
		position: absolute;
		content: "";
		left: 0;
		top: 50%;
		transform: translateY(-50%);
		display: inline-block;
		height: 6px;
		width: 6px;
		margin-top: -1px;
		border-radius: 50%;
		background: currentColor
	}

	.badge-dot.badge-sm,
	.badge-dot.badge-md {
		padding-left: 16px
	}

	.badge-dot.badge-sm:before,
	.badge-dot.badge-md:before {
		height: 8px;
		width: 8px;
		margin-top: 0
	}

	.badge-dot.badge-lg,
	.badge-dot.badge-xl {
		padding-left: 24px
	}

	.badge-dot.badge-lg:before,
	.badge-dot.badge-xl:before {
		height: 12px;
		width: 12px;
		margin-top: 0
	}

	.badge-dot.badge-primary {
		color: #6576ff
	}

	.badge-dot.badge-secondary {
		color: #364a63
	}

	.badge-dot.badge-success {
		color: #1ee0ac
	}

	.badge-dot.badge-info {
		color: #09c2de
	}

	.badge-dot.badge-warning {
		color: #f4bd0e
	}

	.badge-dot.badge-danger {
		color: #e85347
	}

	.badge-dot.badge-dark {
		color: #1c2b46
	}

	.badge-dot.badge-gray {
		color: #8091a7
	}

	.badge-dot.badge-light {
		color: #b7c2d0
	}

	.badge-dot.badge-lighter {
		color: #e5e9f2
	}

	@media (max-width: 767.98px) {
		.badge-dot-sm {
			width: 0;
			overflow: hidden
		}
	}

	@media (max-width: 413px) {
		.badge-dot-mb {
			width: 0;
			overflow: hidden
		}
	}

	@media (max-width: 369px) {
		.badge-dot-xs {
			width: 0;
			overflow: hidden
		}
	}

	.alert:last-child {
		margin-bottom: 0
	}

	.alert-link {
		box-shadow: 0 1px 0 currentColor
	}

	.alert-link:hover {
		box-shadow: none
	}

	.alert h5,
	.alert h6,
	.alert .title {
		font-size: 1.05rem
	}

	.alert.alert-icon {
		padding-left: 3.25rem
	}

	.alert.alert-icon>.icon {
		position: absolute;
		font-size: 1.25rem;
		line-height: 1;
		width: 2rem;
		top: 1rem;
		left: 1.25rem;
		margin-left: -1px
	}

	.alert-dismissible .close {
		top: 50%;
		transform: translateY(-50%);
		transition: .3s ease;
		margin-top: -1px
	}

	.alert-dismissible .close:focus {
		outline: none
	}

	.alert-dismissible .close:hover {
		color: currentColor
	}

	.alert-dismissible .close:after {
		font-family: "Nioicon";
		content: "";
		font-size: 1.1rem
	}

	.alert-light,
	.alert-lighter,
	.alert-gray {
		border-color: #e5e9f2;
		color: #526484
	}

	.alert-light .alert-link,
	.alert-lighter .alert-link,
	.alert-gray .alert-link {
		color: #526484
	}

	.alert-alt {
		position: relative;
		padding: .875rem;
		border-radius: 12px
	}

	.alert-alt.alert-icon {
		padding-left: 4rem
	}

	.alert-alt.alert-icon>.icon {
		position: absolute;
		font-size: 2rem;
		line-height: 1;
		width: 4rem;
		top: 50%;
		left: 0;
		transform: translateY(-50%);
		text-align: center;
		opacity: 0.5
	}

	a.alert:hover {
		color: currentColor
	}

	.alert-fill.alert-primary {
		color: #fff;
		background: #6576ff
	}

	.alert-fill.alert-secondary {
		color: #fff;
		background: #364a63
	}

	.alert-fill.alert-success {
		color: #fff;
		background: #1ee0ac
	}

	.alert-fill.alert-info {
		color: #fff;
		background: #09c2de
	}

	.alert-fill.alert-warning {
		color: #fff;
		background: #f4bd0e
	}

	.alert-fill.alert-danger {
		color: #fff;
		background: #e85347
	}

	.alert-fill.alert-dark {
		color: #fff;
		background: #1c2b46
	}

	.alert-fill.alert-gray {
		color: #fff;
		background: #8091a7
	}

	.alert-fill.alert-light {
		color: #101924;
		background: #e5e9f2
	}

	.alert-fill.alert-lighter {
		color: #101924;
		background: #ebeef2
	}

	.alert-fill {
		border-width: 0
	}

	.alert-fill .alert-link,
	.alert-fill .icon,
	.alert-fill h4,
	.alert-fill h5,
	.alert-fill h6 {
		color: currentColor
	}

	.alert-fill.alert-light {
		color: #364a63
	}

	.alert-fill.alert-lighter {
		color: #526484
	}

	.alert-pro {
		box-shadow: 0 4px 15px 0 rgba(31, 43, 58, 0.1);
		border: none;
		border-left: 4px solid transparent;
		color: #526484;
		line-height: 1.5;
		background: #fff
	}

	.alert-pro.no-shadow {
		box-shadow: none
	}

	.alert-pro.no-border {
		border-left: 0
	}

	.alert-pro.alert-icon {
		padding-left: 4rem
	}

	.alert-pro.alert-icon>.icon {
		font-size: 1.75rem;
		top: 50%;
		transform: translateY(-50%)
	}

	.alert-pro.alert-primary {
		border-color: #6576ff
	}

	.alert-pro.alert-primary>.icon {
		color: #6576ff
	}

	.alert-pro.alert-secondary {
		border-color: #364a63
	}

	.alert-pro.alert-secondary>.icon {
		color: #364a63
	}

	.alert-pro.alert-success {
		border-color: #1ee0ac
	}

	.alert-pro.alert-success>.icon {
		color: #1ee0ac
	}

	.alert-pro.alert-info {
		border-color: #09c2de
	}

	.alert-pro.alert-info>.icon {
		color: #09c2de
	}

	.alert-pro.alert-warning {
		border-color: #f4bd0e
	}

	.alert-pro.alert-warning>.icon {
		color: #f4bd0e
	}

	.alert-pro.alert-danger {
		border-color: #e85347
	}

	.alert-pro.alert-danger>.icon {
		color: #e85347
	}

	.alert-pro.alert-dark {
		border-color: #1c2b46
	}

	.alert-pro.alert-dark>.icon {
		color: #1c2b46
	}

	.alert-pro.alert-gray {
		border-color: #8091a7
	}

	.alert-pro.alert-gray>.icon {
		color: #8091a7
	}

	.alert-pro.alert-light {
		border-color: #b7c2d0
	}

	.alert-pro.alert-light>.icon {
		color: #b7c2d0
	}

	.alert-pro.alert-lighter {
		border-color: #b7c2d0
	}

	.alert-pro.alert-lighter>.icon {
		color: #b7c2d0
	}

	.breadcrumb-item {
		font-size: 11px;
		font-weight: 500;
		text-transform: uppercase;
		letter-spacing: .05rem
	}

	.breadcrumb-item a:not(:hover) {
		color: #8094ae
	}

	.breadcrumb-pipe .breadcrumb-item+.breadcrumb-item::before {
		content: '|'
	}

	.breadcrumb-arrow .breadcrumb-item+.breadcrumb-item::before {
		font-family: "Nioicon";
		content: ""
	}

	.breadcrumb-item.active:not(:only-child) {
		font-weight: 400
	}

	.breadcrumb-alt .breadcrumb-item {
		text-transform: unset;
		letter-spacing: 0;
		color: #8094ae
	}

	.breadcrumb-xs .breadcrumb-item+.breadcrumb-item {
		padding-left: 0.25rem
	}

	.breadcrumb-xs .breadcrumb-item+.breadcrumb-item:before {
		padding-right: 0.25rem;
		font-size: 0.8em
	}

	.breadcrumb-sm .breadcrumb-item {
		font-size: 13px
	}

	.link {
		display: inline-flex;
		align-items: center;
		font-size: 0.85rem;
		font-weight: 500;
		font-family: Roboto, sans-serif;
		line-height: 1;
		border: none;
		background: transparent;
		transition: all .3s ease;
		white-space: nowrap
	}

	.link:focus {
		box-shadow: none;
		outline: none
	}

	.link .icon {
		font-size: 1.3em
	}

	.link span,
	.link .icon {
		display: inline-block
	}

	.link .icon-circle {
		display: inline-flex
	}

	.link .icon+span,
	.link span+.icon {
		padding-left: 10px
	}

	.link-md {
		font-size: 1.25rem
	}

	.link-sm {
		font-size: .75rem
	}

	.link-dim {
		opacity: .7
	}

	.link-dim:hover {
		opacity: 1
	}

	.link-block {
		display: flex
	}

	.link-between {
		justify-content: space-between
	}

	.link-primary {
		color: #6576ff !important
	}

	.link-on-primary:hover {
		color: #6576ff !important
	}

	.link-secondary {
		color: #364a63 !important
	}

	.link-on-secondary:hover {
		color: #364a63 !important
	}

	.link-success {
		color: #1ee0ac !important
	}

	.link-on-success:hover {
		color: #1ee0ac !important
	}

	.link-info {
		color: #09c2de !important
	}

	.link-on-info:hover {
		color: #09c2de !important
	}

	.link-warning {
		color: #f4bd0e !important
	}

	.link-on-warning:hover {
		color: #f4bd0e !important
	}

	.link-danger {
		color: #e85347 !important
	}

	.link-on-danger:hover {
		color: #e85347 !important
	}

	.link-dark {
		color: #1c2b46 !important
	}

	.link-on-dark:hover {
		color: #1c2b46 !important
	}

	.link-gray {
		color: #8091a7 !important
	}

	.link-on-gray:hover {
		color: #8091a7 !important
	}

	.link-light {
		color: #8094ae !important
	}

	.link-on-light:hover {
		color: #8094ae !important
	}

	.link-lighter {
		color: #b7c2d0 !important
	}

	.link-on-lighter:hover {
		color: #b7c2d0 !important
	}

	.link-text {
		color: #526484 !important
	}

	.link-on-text:hover {
		color: #526484 !important
	}

	.link-danger:hover,
	.link-warning:hover,
	.link-success:hover,
	.link-info:hover {
		color: #526484 !important
	}

	.btn,
	.dual-listbox .dual-listbox__button {
		position: relative;
		letter-spacing: 0.02em;
		display: inline-flex;
		align-items: center
	}

	.btn-xl {
		padding: .6875rem 1.5rem;
		font-size: .9375rem;
		line-height: 1.25rem;
		border-radius: 5px
	}

	.btn-xs {
		padding: .125rem .5rem;
		font-size: .6875rem;
		line-height: 1rem;
		border-radius: 3px
	}

	.btn .icon,
	.dual-listbox .dual-listbox__button .icon {
		font-size: 1.4em;
		line-height: inherit
	}

	.btn>span,
	.dual-listbox .dual-listbox__button>span {
		display: inline-block;
		white-space: nowrap
	}

	.btn>span:only-child,
	.dual-listbox .dual-listbox__button>span:only-child {
		width: 100%
	}

	.btn .icon+span,
	.dual-listbox .dual-listbox__button .icon+span,
	.btn span+.icon,
	.dual-listbox .dual-listbox__button span+.icon {
		padding-left: 8px
	}

	.btn .dd-indc,
	.dual-listbox .dual-listbox__button .dd-indc {
		transform: translateX(-8px)
	}

	.btn span+.dd-indc,
	.dual-listbox .dual-listbox__button span+.dd-indc {
		transform: translateX(8px)
	}

	.btn-lg .icon+span,
	.btn-group-lg>.btn .icon+span,
	.dual-listbox .btn-group-lg>.dual-listbox__button .icon+span,
	.btn-lg span+.icon,
	.btn-group-lg>.btn span+.icon,
	.dual-listbox .btn-group-lg>.dual-listbox__button span+.icon {
		padding-left: 12px
	}

	.btn-round {
		border-radius: 2.125rem
	}

	.btn-block {
		justify-content: center
	}

	.btn-ucap,
	.btn.ucap,
	.dual-listbox .ucap.dual-listbox__button {
		text-transform: uppercase;
		font-size: 12px;
		letter-spacing: 0.05em
	}

	.btn-icon:not([class*="btn-icon-break"]),
	.dt-buttons .btn-secondary:not([class*="btn-icon-break"]) {
		padding-left: 0;
		padding-right: 0
	}

	.btn-icon .icon,
	.dt-buttons .btn-secondary .icon {
		width: 2.125rem
	}

	.btn-icon.btn-xl .icon,
	.dt-buttons .btn-xl.btn-secondary .icon {
		width: 2.625rem
	}

	.btn-icon.btn-lg .icon,
	.btn-group-lg>.btn-icon.btn .icon,
	.dt-buttons .btn-group-lg>.btn.btn-secondary .icon,
	.dt-buttons .dual-listbox .btn-group-lg>.btn-secondary.dual-listbox__button .icon,
	.dual-listbox .dt-buttons .btn-group-lg>.btn-secondary.dual-listbox__button .icon,
	.dual-listbox .btn-group-lg>.btn-icon.dual-listbox__button .icon,
	.dt-buttons .btn-lg.btn-secondary .icon {
		width: 2.625rem
	}

	.btn-icon.btn-sm .icon,
	.btn-group-sm>.btn-icon.btn .icon,
	.dt-buttons .btn-group-sm>.btn.btn-secondary .icon,
	.dt-buttons .dual-listbox .btn-group-sm>.btn-secondary.dual-listbox__button .icon,
	.dual-listbox .dt-buttons .btn-group-sm>.btn-secondary.dual-listbox__button .icon,
	.dual-listbox .btn-group-sm>.btn-icon.dual-listbox__button .icon,
	.dt-buttons .btn-sm.btn-secondary .icon {
		width: 1.75rem
	}

	.btn-icon.btn-xs .icon,
	.dt-buttons .btn-xs.btn-secondary .icon {
		width: 1.25rem;
		font-size: 1.1em
	}

	.btn-icon .dot,
	.dt-buttons .btn-secondary .dot {
		top: .35rem;
		right: .35rem;
		position: absolute;
		transform: translate(50%, -50%)
	}

	.btn-icon .badge,
	.dt-buttons .btn-secondary .badge {
		top: .25rem;
		right: .25rem;
		position: absolute;
		transform: translate(50%, -50%)
	}

	.btn-icon .badge-circle,
	.dt-buttons .btn-secondary .badge-circle {
		border-radius: 50%;
		height: 1.125rem;
		width: 1.125rem;
		padding: 0;
		font-weight: 700;
		font-size: 11px;
		text-align: center;
		justify-content: center
	}

	.btn-mw {
		min-width: 120px;
		justify-content: center
	}

	.btn-wrap {
		flex-direction: column;
		align-items: center;
		flex-grow: 0
	}

	.btn-extext {
		font-size: 12px;
		font-weight: 500;
		text-align: center;
		margin-top: 0.25rem;
		color: #8094ae
	}

	.btn-wider {
		display: flex
	}

	.btn-wider .icon+span,
	.btn-wider span+.icon {
		margin-left: auto
	}

	.btn-auto {
		min-width: auto
	}

	.btn-pd-auto {
		padding-left: 0.25rem;
		padding-right: 0.25rem
	}

	.btn .spinner-border,
	.dual-listbox .dual-listbox__button .spinner-border,
	.btn .spinner-grow,
	.dual-listbox .dual-listbox__button .spinner-grow {
		margin: .125rem
	}

	.btn .spinner-border+span,
	.dual-listbox .dual-listbox__button .spinner-border+span,
	.btn .spinner-grow+span,
	.dual-listbox .dual-listbox__button .spinner-grow+span {
		margin-left: 0.25rem
	}

	.btn-indc {
		width: 100%
	}

	.btn-indc .icon {
		font-size: 1.43em
	}

	.btn-indc .indc {
		opacity: .6;
		margin-left: -8px;
		margin-right: auto
	}

	.btn-indc span+.indc {
		margin-left: auto;
		margin-right: -8px
	}

	@media (min-width: 768px) {
		.btn-xl {
			padding: .625rem 2rem;
			font-size: 1.125rem;
			line-height: 2rem;
			border-radius: 5px
		}

		.btn-xl.btn-round {
			border-radius: 3.25rem
		}

		.btn-icon.btn-xl .icon,
		.dt-buttons .btn-xl.btn-secondary .icon {
			width: 3.25rem
		}
	}

	.btn-trigger {
		position: relative;
		z-index: 1;
		color: #526484
	}

	.btn-trigger:focus {
		box-shadow: none
	}

	.btn-trigger:before {
		position: absolute;
		z-index: -1;
		height: 20px;
		width: 20px;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		transform-origin: 50% 50%;
		content: '';
		background-color: #e5e9f2;
		border-radius: 50%;
		opacity: 0;
		transition: all .3s
	}

	.is-dark .btn-trigger:before {
		background-color: #1f275c
	}

	.show>.btn-trigger:before {
		opacity: 1;
		height: 120%;
		width: 120%
	}

	.btn-trigger:hover:before,
	.btn-trigger:focus:before,
	.btn-trigger.active:not(.revarse):before {
		opacity: 1;
		height: 120%;
		width: 120%
	}

	.btn-trigger.active:hover:before {
		background-color: #dbdfea
	}

	a:hover .btn-trigger:before {
		opacity: 1;
		height: 120%;
		width: 120%
	}

	.btn-dim.btn-outline-primary {
		color: #6576ff;
		background-color: #eef0ff;
		border-color: #c1c8ff
	}

	.btn-dim.btn-outline-primary:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #6576ff;
		border-color: #6576ff
	}

	.btn-white.btn-outline-primary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-outline-primary.btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.btn-trans.btn-outline-primary:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #6576ff;
		background: #eef0ff
	}

	.btn-dim.btn-outline-success {
		color: #1ee0ac;
		background-color: #e6fcf6;
		border-color: #a5f3de
	}

	.btn-dim.btn-outline-success:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #1ee0ac;
		border-color: #1ee0ac
	}

	.btn-white.btn-outline-success:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-outline-success.btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.btn-trans.btn-outline-success:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #1ee0ac;
		background: #e6fcf6
	}

	.btn-dim.btn-outline-warning {
		color: #f4bd0e;
		background-color: #fef8e4;
		border-color: #fbe59f
	}

	.btn-dim.btn-outline-warning:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #f4bd0e;
		border-color: #f4bd0e
	}

	.btn-white.btn-outline-warning:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-outline-warning.btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.btn-trans.btn-outline-warning:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #f4bd0e;
		background: #fef8e4
	}

	.btn-dim.btn-outline-info {
		color: #09c2de;
		background-color: #e4f8fb;
		border-color: #9de7f2
	}

	.btn-dim.btn-outline-info:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #09c2de;
		border-color: #09c2de
	}

	.btn-white.btn-outline-info:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-outline-info.btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.btn-trans.btn-outline-info:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #09c2de;
		background: #e4f8fb
	}

	.btn-dim.btn-outline-danger {
		color: #e85347;
		background-color: #fceceb;
		border-color: #f6bab5
	}

	.btn-dim.btn-outline-danger:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #e85347;
		border-color: #e85347
	}

	.btn-white.btn-outline-danger:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-outline-danger.btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.btn-trans.btn-outline-danger:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #e85347;
		background: #fceceb
	}

	.btn-dim.btn-outline-secondary {
		color: #364a63;
		background-color: #e9ebee;
		border-color: #b9c0c8
	}

	.btn-dim.btn-outline-secondary:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #364a63;
		border-color: #364a63
	}

	.btn-white.btn-outline-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-outline-secondary.btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.btn-trans.btn-outline-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #364a63;
		background: #e9ebee
	}

	.btn-dim.btn-outline-gray {
		color: #3c4d62;
		background-color: #f1f3f5;
		border-color: #d3d9e0
	}

	.btn-dim.btn-outline-gray:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #3c4d62;
		border-color: #3c4d62
	}

	.btn-white.btn-outline-gray:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-outline-gray.btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.btn-trans.btn-outline-gray:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #3c4d62;
		background: #f1f3f5
	}

	.btn-dim.btn-outline-dark {
		color: #1f2b3a;
		background-color: #e6e8e9;
		border-color: #b1b5ba
	}

	.btn-dim.btn-outline-dark:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #1f2b3a;
		border-color: #1f2b3a
	}

	.btn-white.btn-outline-dark:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-outline-dark.btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.btn-trans.btn-outline-dark:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #1f2b3a;
		background: #e6e8e9
	}

	.btn-dim.btn-outline-light,
	.dt-buttons .btn-dim.btn-secondary {
		color: #526484;
		background-color: #f5f6fa;
		border-color: #dbdfea
	}

	.btn-dim.btn-outline-light:not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-dim.btn-secondary:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #526484;
		border-color: #526484
	}

	.btn-white.btn-outline-light:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.btn-trans.btn-outline-light:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-trans.btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #526484;
		background: #f5f6fa
	}

	.btn-dim.btn-primary {
		color: #6576ff;
		background-color: #eef0ff;
		border-color: transparent
	}

	.btn-dim.btn-primary:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #6576ff;
		border-color: #6576ff
	}

	.btn-dim.btn-secondary {
		color: #364a63;
		background-color: #e9ebee;
		border-color: transparent
	}

	.btn-dim.btn-secondary:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #364a63;
		border-color: #364a63
	}

	.btn-dim.btn-success {
		color: #1ee0ac;
		background-color: #e6fcf6;
		border-color: transparent
	}

	.btn-dim.btn-success:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #1ee0ac;
		border-color: #1ee0ac
	}

	.btn-dim.btn-warning {
		color: #f4bd0e;
		background-color: #fef8e4;
		border-color: transparent
	}

	.btn-dim.btn-warning:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #f4bd0e;
		border-color: #f4bd0e
	}

	.btn-dim.btn-info {
		color: #09c2de;
		background-color: #e4f8fb;
		border-color: transparent
	}

	.btn-dim.btn-info:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #09c2de;
		border-color: #09c2de
	}

	.btn-dim.btn-danger {
		color: #e85347;
		background-color: #fceceb;
		border-color: transparent
	}

	.btn-dim.btn-danger:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #e85347;
		border-color: #e85347
	}

	.btn-dim.btn-gray {
		color: #3c4d62;
		background-color: #eaebee;
		border-color: transparent
	}

	.btn-dim.btn-gray:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #3c4d62;
		border-color: #3c4d62
	}

	.btn-dim.btn-dark {
		color: #1f2b3a;
		background-color: #e6e8e9;
		border-color: transparent
	}

	.btn-dim.btn-dark:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #1f2b3a;
		border-color: #1f2b3a
	}

	.btn-dim.btn-light,
	.dual-listbox .btn-dim.dual-listbox__button {
		color: #8091a7;
		background-color: #f1f3f5;
		border-color: transparent
	}

	.btn-dim.btn-light:not(:disabled):not(.disabled):hover,
	.dual-listbox .btn-dim.dual-listbox__button:not(:disabled):not(.disabled):hover {
		color: #fff;
		background-color: #8091a7;
		border-color: #8091a7
	}

	.btn-dim.btn-lighter {
		color: #b7c2d0;
		background-color: #f7f8fa;
		border-color: transparent
	}

	.btn-dim.btn-lighter:not(:disabled):not(.disabled):hover {
		color: #101924;
		background-color: #b7c2d0;
		border-color: #b7c2d0
	}

	.btn-trans.btn,
	.dual-listbox .btn-trans.dual-listbox__button {
		background-color: transparent;
		border-color: transparent
	}

	.btn-outline-light,
	.dt-buttons .btn-secondary {
		border-color: #dbdfea
	}

	.btn-outline-lighter {
		border-color: #e5e9f2
	}

	.btn-outline-light,
	.dt-buttons .btn-secondary,
	.btn-outline-lighter {
		color: #526484
	}

	.btn-white,
	.dt-buttons .btn-secondary,
	.btn-white.btn-dim,
	.dt-buttons .btn-dim.btn-secondary {
		background: #fff
	}

	.btn-white.btn-outline-light:not(.btn-dim):not(:disabled):not(.disabled):hover,
	.dt-buttons .btn-secondary:not(.btn-dim):not(:disabled):not(.disabled):hover {
		color: #fff;
		background: #526484;
		border-color: #526484
	}

	.btn-p-0 {
		padding: 0
	}

	.btn-px-0 {
		padding-left: 0;
		padding-right: 0
	}

	.btn-py-0 {
		padding-top: 0;
		padding-bottom: 0
	}

	.btn-nofocus {
		box-shadow: none !important
	}

	.btn-toolbar-sep {
		border-right: 1px solid #e5e9f2;
		margin-left: .75rem;
		margin-right: .75rem
	}

	.card-tools .btn-toolbar-sep {
		padding: 0 !important;
		margin-left: .5rem;
		margin-right: .5rem
	}

	.btn-group.is-tags .btn-xs:first-child {
		padding-left: 0.25rem;
		padding-right: 0.25rem
	}

	.btn-group.is-tags .btn-xs:last-child {
		margin-left: 0
	}

	.btn-group.is-tags .btn-xs .icon {
		width: 1rem
	}

	.btn-group.is-tags .btn-dim:not(:disabled):not(.disabled):hover {
		border-color: transparent
	}

	.dropup,
	.dropright,
	.dropdown,
	.dropleft {
		display: inline-flex
	}

	.dropdown-toggle {
		cursor: pointer;
		display: inline-flex;
		align-items: center;
		margin-bottom: 0
	}

	.dropdown-toggle:not([class*="indicator"]):after {
		display: none
	}

	.clickable * {
		pointer-events: none
	}

	.dropdown-menu {
		overflow: hidden;
		border: 1px solid #e5e9f2;
		box-shadow: 0 3px 12px 1px rgba(44, 55, 130, 0.15)
	}

	.dropdown-inner {
		padding: 0 1.75rem
	}

	.dropdown-inner+.dropdown-inner {
		border-top: 1px solid #e5e9f2
	}

	.dropdown-head,
	.dropdown-foot {
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 0.75rem 1.25rem;
		border-bottom: 1px solid #e5e9f2
	}

	.dropdown-head.center,
	.dropdown-foot.center {
		justify-content: center
	}

	.dropdown-head {
		border-bottom: 1px solid #e5e9f2
	}

	.dropdown-foot {
		border-top: 1px solid #e5e9f2
	}

	.dropdown-body-sm {
		padding: .75rem
	}

	.dropdown-body-rg {
		padding: 1.25rem
	}

	.dropdown-body-md {
		padding: 1.5rem
	}

	.dropdown-body-lg {
		padding: 2.25rem
	}

	.dropdown-title {
		font-weight: 500;
		color: #364a63
	}

	[class*="dropdown-indicator"]:after {
		border: none !important;
		font-family: "Nioicon";
		vertical-align: middle;
		content: "";
		margin-left: 0.25rem;
		line-height: 1;
		display: inline-flex;
		align-items: center;
		font-size: 14px
	}

	.dropup [class*="dropdown-indicator"]:after {
		content: ""
	}

	.dropdown-indicator-caret:after {
		content: ""
	}

	.dropup .dropdown-indicator-caret:after {
		content: ""
	}

	.dropdown-indicator-caret-up:after {
		content: ""
	}

	.dropup .dropdown-indicator-caret-up:after {
		content: ""
	}

	.dropdown-indicator-up:after {
		content: ""
	}

	.dropup .dropdown-indicator-up:after {
		content: ""
	}

	.dropdown-indicator-down:after {
		content: ""
	}

	.dropup .dropdown-indicator-down:after {
		content: ""
	}

	.dropdown-indicator-dubble:after {
		content: ""
	}

	.dropup .dropdown-indicator-dubble:after {
		content: ""
	}

	.dropdown-indicator-unfold:after {
		content: ""
	}

	.dropup .dropdown-indicator-unfold:after {
		content: ""
	}

	.dropdown-menu-center {
		left: 50% !important
	}

	.dropdown-menu-bottom {
		bottom: 0 !important
	}

	.dropdown-menu-xxs {
		min-width: 70px;
		max-width: 70px
	}

	.dropdown-menu-xxs.dropdown-menu-center {
		margin-left: -35px
	}

	.dropdown-menu-xs {
		min-width: 120px;
		max-width: 120px
	}

	.dropdown-menu-xs.dropdown-menu-center {
		margin-left: -60px
	}

	.dropdown-menu-md {
		min-width: 280px;
		max-width: 280px
	}

	.dropdown-menu-md.dropdown-menu-center {
		margin-left: -140px
	}

	.dropdown-menu-sm {
		min-width: 140px;
		max-width: 140px
	}

	.dropdown-menu-sm.dropdown-menu-center {
		margin-left: -70px
	}

	.dropdown-menu-lg {
		min-width: 320px;
		max-width: 320px
	}

	.dropdown-menu-lg.dropdown-menu-center {
		margin-left: -160px
	}

	.dropdown-menu-xl {
		min-width: 360px;
		max-width: 360px
	}

	.dropdown-menu-xl.dropdown-menu-center {
		margin-left: -180px
	}

	.dropdown-menu-auto {
		min-width: 100%;
		max-width: 100%
	}

	.dropdown-menu-mxh {
		max-height: 400px;
		overflow: auto
	}

	.nk-quick-nav .dropdown-menu {
		margin-top: 11px;
		margin-right: -6px
	}

	@media (max-width: 420px) {

		.dropdown-menu-xl,
		.dropdown-menu-lg,
		.dropdown-menu-md {
			min-width: calc(100vw - 40px);
			max-width: calc(100vw - 40px)
		}

		.nk-quick-nav .dropdown-menu-xl,
		.nk-quick-nav .dropdown-menu-lg,
		.nk-quick-nav .dropdown-menu-md {
			margin-right: 0;
			margin-left: 16px
		}

		.nk-quick-nav li:last-child .dropdown-menu-xl,
		.nk-quick-nav li:last-child .dropdown-menu-lg,
		.nk-quick-nav li:last-child .dropdown-menu-md {
			margin-left: 0;
			margin-right: 3px
		}
	}

	.dropdown-menu-s1 {
		border-top: 3px solid #6576ff
	}

	.dropdown-toggle-split>.icon {
		margin-left: -0.25rem;
		margin-right: -0.25rem
	}

	.card+.card {
		margin-top: 28px
	}

	.card+.nk-block-head {
		padding-top: 2.5rem
	}

	.card-full {
		height: 100%
	}

	.card.is-dark {
		background: #2c3782
	}

	.card-bordered {
		border: 1px solid #dbdfea
	}

	.card-bordered.is-dark {
		border-color: #2c3782
	}

	.card-bordered.dashed {
		border-style: dashed
	}

	.card-inner {
		padding: 1.25rem
	}

	.card-inner-sm {
		padding-top: .75rem;
		padding-bottom: .75rem
	}

	.card-inner-group .card-inner:not(:last-child) {
		border-bottom: 1px solid #dbdfea
	}

	.card-head {
		display: flex;
		align-items: center;
		flex-wrap: wrap;
		justify-content: space-between;
		margin: -.25rem -0.5rem 1rem
	}

	.card-head>* {
		padding: 0.25rem .5rem
	}

	.card-head>.title:only-child {
		width: 100%
	}

	.card-title-group {
		display: flex;
		align-items: center;
		justify-content: space-between;
		position: relative
	}

	.card-title-group .card-title {
		margin-bottom: 0
	}

	.card-title-group:only-child,
	.card-title-group .card-search {
		margin-top: -.25rem;
		margin-bottom: -.25rem
	}

	.card-title h6.title:not(:last-child) {
		margin-bottom: 0.25rem
	}

	.card-title p {
		font-size: 12px;
		color: #8094ae
	}

	.card-title p .icon {
		line-height: inherit;
		vertical-align: middle
	}

	.card-title-sm .title {
		font-size: 14px
	}

	.card-title small {
		font-weight: 500;
		color: #8094ae
	}

	.card-subtitle {
		color: #8094ae;
		font-family: Roboto, sans-serif;
		font-weight: normal
	}

	.card-tools-nav {
		display: flex;
		margin: -6px -10px -5px
	}

	.card-tools-nav li {
		padding: 0 10px
	}

	.card-tools-nav li a {
		position: relative;
		color: #8094ae;
		padding: 10px 0;
		display: block;
		line-height: 1
	}

	.card-tools-nav li a:before {
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		height: 2px;
		content: '';
		background: #6576ff;
		opacity: 0
	}

	.card-tools-nav li a:hover,
	.card-tools-nav li a.active {
		color: #526484
	}

	.card-tools-nav li a.active::before {
		opacity: 1
	}

	.card-tools-nav li.active a {
		color: #526484
	}

	.card-tools-nav li.active a::before {
		opacity: 1
	}

	.card-tools.mr-n1 {
		margin-right: -0.5rem !important
	}

	.card-hint {
		font-size: 1rem;
		color: #dbdfea
	}

	@media (max-width: 575.98px) {
		.card-head.ui-v2 .card-tools {
			width: calc(100% + 20px);
			margin: 0 -10px;
			padding-top: .5rem
		}

		.card-head.ui-v2 .card-tools-nav {
			padding: 0 .75rem;
			border-bottom: 1px solid #e5e9f2
		}

		.card-head.ui-v2 .card-tools-nav li a {
			padding-bottom: 1rem
		}

		.card-stretch {
			margin-left: -18px;
			margin-right: -18px;
			border-left: 0;
			border-right: 0;
			border-radius: 0
		}
	}

	@media (min-width: 576px) {
		.card-inner {
			padding: 1.5rem
		}

		.card-inner-sm {
			padding-top: .75rem;
			padding-bottom: .75rem
		}

		.card-inner-md {
			padding-top: 1rem;
			padding-bottom: 1rem
		}

		.card-header {
			padding-left: 1.5rem;
			padding-right: 1.5rem
		}
	}

	@media (min-width: 768px) {
		.card-inner-lg {
			padding: 2.5rem
		}

		.card-inner-xl {
			padding: 3.75rem
		}
	}

	.form-icon {
		position: absolute;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		top: 0;
		width: calc(1rem + 24px);
		height: calc(2.125rem + 2px)
	}

	.form-icon.sm {
		height: calc(1.75rem + 2px)
	}

	.form-icon.lg {
		height: calc(2.625rem + 2px)
	}

	.form-icon.xl {
		height: calc(3.25rem + 2px)
	}

	.form-icon .icon {
		font-size: 16px;
		color: #8094ae
	}

	.form-icon+.form-control,
	div.dataTables_wrapper div.dataTables_filter .form-icon+input,
	.dual-listbox .form-icon+.dual-listbox__search {
		padding-left: calc(1rem + 24px)
	}

	.form-icon-right {
		left: auto;
		right: -1px
	}

	.form-icon-right+.form-control,
	div.dataTables_wrapper div.dataTables_filter .form-icon-right+input,
	.dual-listbox .form-icon-right+.dual-listbox__search {
		padding-left: 1rem;
		padding-right: calc(1rem + 24px)
	}

	.form-info {
		position: absolute;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		border-left: 1px solid #dbdfea;
		right: 0;
		top: 50%;
		padding: .125rem 1.25rem;
		transform: translateY(-50%);
		color: #8094ae
	}

	.form-info+.form-control,
	div.dataTables_wrapper div.dataTables_filter .form-info+input,
	.dual-listbox .form-info+.dual-listbox__search {
		padding-right: calc(1rem + 24px)
	}

	.form-label {
		font-size: 0.875rem;
		font-weight: 500;
		color: #344357;
		margin-bottom: .5rem
	}

	.form-label-group {
		display: flex;
		align-items: center;
		justify-content: space-between;
		margin-bottom: .5rem
	}

	.form-label-group .form-label {
		margin-bottom: 0
	}

	.form-label+.form-note {
		margin-top: -0.35rem
	}

	.form-label-outlined {
		position: absolute;
		top: .4375rem;
		left: .66667rem;
		transform-origin: left;
		padding: 0 .4rem;
		font-weight: 400;
		line-height: 1.25rem;
		color: #3c4d62;
		background-color: #fff;
		z-index: 1;
		transition: all .3s ease;
		margin-bottom: 0;
		font-size: .8125rem
	}

	.form-control-lg~.form-label-outlined {
		top: .6875rem;
		padding: 0 .37736rem;
		font-size: .9375rem
	}

	.form-control-sm~.form-label-outlined {
		font-size: .75rem;
		top: .25rem;
		left: .4rem
	}

	.focused .form-control-sm~.form-label-outlined,
	.form-select.form-control-sm~.form-label-outlined {
		font-size: 11px
	}

	.focused .form-label-outlined,
	.form-select~.form-label-outlined {
		top: calc(-.4375rem + -2px);
		font-size: 11px
	}

	.form-control-xl~.form-label-outlined {
		font-size: .9375rem;
		line-height: 2rem;
		top: .625rem;
		padding: 0 .5rem;
		left: .83333rem
	}

	.focused .form-control-xl~.form-label-outlined,
	.form-select.form-control-xl~.form-label-outlined {
		top: calc(-.625rem + -5px)
	}

	.focused .form-control-lg~.form-label-outlined,
	.focused .form-control-xl~.form-label-outlined,
	.form-select.form-control-lg~.form-label-outlined,
	.form-select.form-control-xl~.form-label-outlined {
		font-size: 12px
	}

	.form-note {
		font-size: 12px;
		color: #8094ae;
		font-style: italic;
		display: block
	}

	.form-note-alt {
		font-size: 12px;
		color: #8094ae
	}

	.form-note-group {
		display: flex;
		justify-content: space-between;
		margin-top: 0.5rem;
		margin-bottom: -0.25rem
	}

	.form-control-xl {
		height: calc(3.25rem + 2px);
		padding: .625rem 1.25rem;
		font-size: .9375rem;
		line-height: 2rem;
		border-radius: 5px
	}

	.form-control-outlined {
		cursor: pointer
	}

	.focused .form-control-outlined {
		cursor: auto
	}

	.form-control-wrap,
	.form-control-group {
		position: relative
	}

	.form-control-wrap+.form-note,
	.form-control-group+.form-note {
		margin-top: 0.5rem
	}

	.form-control-noborder {
		border-color: transparent
	}

	.form-control-noborder:focus {
		border-color: #dbdfea;
		box-shadow: none
	}

	.form-control-solid {
		border-color: #fff
	}

	.form-control-solid:focus {
		box-shadow: none;
		border-color: #dbdfea
	}

	.form-control-number {
		font-size: 20px;
		padding: 20px;
		height: 74px
	}

	.form-control-password-big {
		font-size: 44px;
		height: calc(1rem*2 + 1.25rem + 1px);
		padding: 1rem 1rem
	}

	.form-control.error,
	div.dataTables_wrapper div.dataTables_filter input.error,
	.dual-listbox .error.dual-listbox__search {
		border-color: #e85347
	}

	.form-control.error:focus,
	div.dataTables_wrapper div.dataTables_filter input.error:focus,
	.dual-listbox .error.dual-listbox__search:focus {
		box-shadow: 0 0 0 3px rgba(232, 83, 71, 0.1)
	}

	.form-control.focus,
	div.dataTables_wrapper div.dataTables_filter input.focus,
	.dual-listbox .focus.dual-listbox__search {
		border-color: #6576ff;
		box-shadow: 0 0 0 3px rgba(101, 118, 255, 0.1)
	}

	.form-control-simple {
		border: none;
		padding: 0
	}

	.form-control-simple:focus {
		box-shadow: none
	}

	.form-group {
		position: relative;
		margin-bottom: 1.25rem
	}

	.form-group:last-child {
		margin-bottom: 0
	}

	.form-select {
		height: calc(2.125rem + 2px)
	}

	.form-select:not(.form-control) {
		opacity: 0
	}

	.form-select-sm,
	.form-select[data-ui*="sm"] {
		height: calc(1.75rem + 2px)
	}

	.form-select-lg,
	.form-select[data-ui*="lg"] {
		height: calc(2.625rem + 2px)
	}

	.form-select-xl,
	.form-select[data-ui*="xl"] {
		height: calc(3.25rem + 2px)
	}

	.form-focus-none:focus {
		border-color: transparent;
		box-shadow: none
	}

	.form-action .btn+.btn,
	.form-action .dual-listbox .dual-listbox__button+.btn,
	.dual-listbox .form-action .dual-listbox__button+.btn,
	.form-action .dual-listbox .btn+.dual-listbox__button,
	.dual-listbox .form-action .btn+.dual-listbox__button,
	.form-action .dual-listbox .dual-listbox__button+.dual-listbox__button,
	.dual-listbox .form-action .dual-listbox__button+.dual-listbox__button {
		margin-left: 1.25rem
	}

	.form-round {
		border-radius: 100px
	}

	.custom-select,
	div.dataTables_wrapper div.dataTables_length select {
		appearance: none;
		-webkit-appearance: none
	}

	.custom-select option,
	div.dataTables_wrapper div.dataTables_length select option {
		border-radius: 3px;
		padding: 5px .5rem;
		margin: 2px -.5rem;
		cursor: pointer;
		color: #526484
	}

	.custom-select option:last-child,
	div.dataTables_wrapper div.dataTables_length select option:last-child {
		margin-bottom: -0.5rem
	}

	.form-control-select {
		position: relative
	}

	.form-control-select .form-control,
	.form-control-select div.dataTables_wrapper div.dataTables_filter input,
	div.dataTables_wrapper div.dataTables_filter .form-control-select input,
	.form-control-select .dual-listbox .dual-listbox__search,
	.dual-listbox .form-control-select .dual-listbox__search {
		appearance: none;
		-webkit-appearance: none
	}

	.form-control-select-multiple .custom-select,
	.form-control-select-multiple div.dataTables_wrapper div.dataTables_length select,
	div.dataTables_wrapper div.dataTables_length .form-control-select-multiple select {
		padding-top: 0.375rem;
		padding-bottom: 0.875rem
	}

	.form-control-select-multiple .custom-select option,
	.form-control-select-multiple div.dataTables_wrapper div.dataTables_length select option,
	div.dataTables_wrapper div.dataTables_length .form-control-select-multiple select option {
		border-radius: 3px;
		padding: 5px .5rem;
		margin: 2px -.5rem;
		cursor: pointer;
		color: #526484
	}

	.form-control-select-multiple .custom-select option:last-child,
	.form-control-select-multiple div.dataTables_wrapper div.dataTables_length select option:last-child,
	div.dataTables_wrapper div.dataTables_length .form-control-select-multiple select option:last-child {
		margin-bottom: -0.5rem
	}

	.form-control-select:after {
		font-family: "Nioicon";
		content: "";
		pointer-events: none;
		position: absolute;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		right: 0;
		top: 50%;
		transform: translateY(-50%);
		width: calc(1rem + 12px);
		height: calc(1rem + 12px)
	}

	textarea.no-resize {
		resize: none
	}

	textarea.form-control,
	.dual-listbox textarea.dual-listbox__search {
		min-height: 122px;
		padding-top: .65625rem
	}

	textarea.textarea-sm {
		min-height: 92px
	}

	textarea.textarea-lg {
		min-height: 208px
	}

	textarea.textarea-auto {
		min-height: 0
	}

	.custom-file-input~.error,
	.custom-file-input~.invalid,
	.form-control~.error,
	div.dataTables_wrapper div.dataTables_filter input~.error,
	.dual-listbox .dual-listbox__search~.error,
	.form-control~.invalid,
	div.dataTables_wrapper div.dataTables_filter input~.invalid,
	.dual-listbox .dual-listbox__search~.invalid,
	.input-group~.error,
	.input-group~.invalid {
		color: #e85347;
		font-size: 11px;
		font-style: italic
	}

	.custom-btn-check {
		position: relative
	}

	.custom-btn-check input {
		position: absolute;
		opacity: 0;
		height: 1px;
		width: 1px
	}

	.custom-btn-check input:checked~label {
		color: #fff;
		border-color: #6576ff;
		background-color: #6576ff
	}

	.custom-btn-check label {
		display: inline-block;
		border: 2px solid #ebeef2;
		background-color: #ebeef2;
		font-weight: 500;
		color: #526484;
		text-align: center;
		padding: 0.4375rem 1.125rem;
		font-size: 0.8125rem;
		line-height: 1.25rem;
		border-radius: 4px;
		transition: all .3s;
		margin-bottom: 0 !important
	}

	.custom-btn-sm label {
		padding: 0.25rem 1rem;
		font-size: 0.75rem;
		line-height: 1.25rem
	}

	.custom-btn-round label {
		border-radius: 60px
	}

	.custom-btn-outline label {
		background-color: transparent
	}

	.custom-control {
		display: inline-flex;
		min-height: 1.5rem
	}

	.custom-control.notext {
		margin-left: -.75rem
	}

	.custom-control.notext .custom-control-label {
		position: relative;
		left: .75rem
	}

	.custom-control-label {
		font-size: 14px;
		line-height: 1.25rem;
		padding-top: .125rem
	}

	.custom-control-label::before,
	.custom-control-label::after {
		top: 0
	}

	.custom-control-label:after {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		background-image: none !important;
		font-family: "Nioicon";
		color: #fff;
		opacity: 0
	}

	.custom-checkbox .custom-control-label:after {
		content: ""
	}

	.custom-radio .custom-control-label:after {
		content: ""
	}

	.custom-control .custom-control-input:checked~.custom-control-label::after {
		opacity: 1
	}

	.custom-control .custom-control-input[disabled]~.custom-control-label,
	.custom-control .custom-control-input:disabled~.custom-control-label {
		opacity: .7;
		color: #364a63
	}

	.custom-control-sm {
		min-height: 1.125rem;
		padding-left: 1.625rem
	}

	.custom-control-sm.notext {
		margin-left: -.5rem
	}

	.custom-control-sm.notext .custom-control-label {
		left: .5rem
	}

	.custom-control-sm .custom-control-label {
		font-size: 12px;
		line-height: 1.125rem;
		padding-top: 0
	}

	.custom-control-sm .custom-control-label::before,
	.custom-control-sm .custom-control-label::after {
		left: -1.625rem;
		width: 1.125rem;
		height: 1.125rem
	}

	.custom-control-sm .custom-control-label:after {
		font-size: 0.9em
	}

	.custom-control-lg {
		min-height: 2rem;
		padding-left: 3rem
	}

	.custom-control-lg.notext {
		margin-left: -1rem
	}

	.custom-control-lg.notext .custom-control-label {
		left: 1rem
	}

	.custom-control-lg .custom-control-label {
		font-size: 15px;
		line-height: 1.375rem;
		padding-top: .3125rem
	}

	.custom-control-lg .custom-control-label::before,
	.custom-control-lg .custom-control-label::after {
		left: -3rem;
		width: 2rem;
		height: 2rem
	}

	.custom-control-lg .custom-control-label:after {
		font-size: 1.2em
	}

	.custom-control-input {
		position: absolute;
		height: 1px;
		width: 1px;
		opacity: 0
	}

	.custom-control.is-right {
		padding-left: 0;
		padding-right: 2.25rem
	}

	.custom-control.is-right .custom-control-label:before,
	.custom-control.is-right .custom-control-label:after {
		left: auto;
		right: -2.25rem
	}

	.custom-control.is-right.custom-control-sm {
		padding-right: 1.625rem
	}

	.custom-control.is-right.custom-control-sm .custom-control-label:before,
	.custom-control.is-right.custom-control-sm .custom-control-label:after {
		right: -1.625rem
	}

	.custom-control.is-right.custom-control-lg {
		padding-right: 3rem
	}

	.custom-control.is-right.custom-control-lg .custom-control-label:before,
	.custom-control.is-right.custom-control-lg .custom-control-label:after {
		right: -3rem
	}

	.custom-file-label {
		white-space: nowrap;
		overflow: hidden
	}

	.custom-select,
	div.dataTables_wrapper div.dataTables_length select {
		background: #fff
	}

	.custom-switch {
		padding-left: 3.75rem
	}

	.custom-switch .custom-control-label::before {
		left: -3.75rem;
		width: 3rem;
		border-radius: 1.5rem
	}

	.custom-switch .custom-control-label::after {
		opacity: 1;
		top: .25rem;
		left: calc(-3.75rem + 4px);
		width: 1rem;
		height: 1rem;
		border-radius: 1.5rem
	}

	.custom-switch .custom-control-input:checked~.custom-control-label::after {
		transform: translateX(calc(2rem - 8px))
	}

	.custom-switch.custom-control-sm {
		padding-left: 2.46875rem
	}

	.custom-switch.custom-control-sm .custom-control-label::before {
		left: -2.46875rem;
		width: 1.96875rem;
		border-radius: .98438rem
	}

	.custom-switch.custom-control-sm .custom-control-label::after {
		top: .2375rem;
		left: calc(-2.46875rem + 4px);
		width: .65rem;
		height: .65rem;
		border-radius: .98438rem
	}

	.custom-switch.custom-control-sm .custom-control-input:checked~.custom-control-label::after {
		transform: translateX(calc(1.31875rem - 8px))
	}

	.custom-switch.custom-control-lg {
		padding-left: 5rem
	}

	.custom-switch.custom-control-lg .custom-control-label::before {
		left: -5rem;
		width: 4rem;
		border-radius: 2rem
	}

	.custom-switch.custom-control-lg .custom-control-label::after {
		top: .375rem;
		left: calc(-5rem + 6px);
		width: 1.25rem;
		height: 1.25rem;
		border-radius: 2rem
	}

	.custom-switch.custom-control-lg .custom-control-input:checked~.custom-control-label::after {
		transform: translateX(calc(2.75rem - 12px))
	}

	.custom-switch.is-right {
		padding-left: 0;
		padding-right: 3.75rem
	}

	.custom-switch.is-right .custom-control-label:before,
	.custom-switch.is-right .custom-control-label:after {
		left: auto;
		right: -2.25rem
	}

	.custom-switch.is-right .custom-control-label::before {
		right: -3.75rem
	}

	.custom-switch.is-right .custom-control-label::after {
		right: calc(-3.75rem + 4px)
	}

	.custom-switch.is-right .custom-control-input:checked~.custom-control-label::after {
		transform: translateX(calc((-2rem + 8px)))
	}

	.custom-switch.is-right.custom-control-sm {
		padding-right: 2.46875rem
	}

	.custom-switch.is-right.custom-control-sm .custom-control-label::before {
		right: -2.46875rem
	}

	.custom-switch.is-right.custom-control-sm .custom-control-label::after {
		right: calc(-2.46875rem + 4px)
	}

	.custom-switch.is-right.custom-control-sm .custom-control-input:checked~.custom-control-label::after {
		transform: translateX(calc((-1.31875rem + 8px)))
	}

	.custom-switch.is-right.custom-control-lg {
		padding-right: 5rem
	}

	.custom-switch.is-right.custom-control-lg .custom-control-label::before {
		right: -5rem
	}

	.custom-switch.is-right.custom-control-lg .custom-control-label::after {
		right: calc(-5rem + 6px)
	}

	.custom-switch.is-right.custom-control-lg .custom-control-input:checked~.custom-control-label::after {
		transform: translateX(calc((-2.75rem + 12px)))
	}

	label {
		cursor: pointer
	}

	input[type="radio"]:checked~label {
		cursor: default
	}

	.is-alter .form-control~,
	.is-alter div.dataTables_wrapper div.dataTables_filter input~,
	div.dataTables_wrapper div.dataTables_filter .is-alter input~,
	.is-alter .dual-listbox .dual-listbox__search~,
	.dual-listbox .is-alter .dual-listbox__search~,
	.is-alter .input-group~,
	.custom-control {
		position: relative
	}

	.is-alter .form-control~.invalid,
	.is-alter div.dataTables_wrapper div.dataTables_filter input~.invalid,
	div.dataTables_wrapper div.dataTables_filter .is-alter input~.invalid,
	.is-alter .dual-listbox .dual-listbox__search~.invalid,
	.dual-listbox .is-alter .dual-listbox__search~.invalid,
	.is-alter .input-group~.invalid,
	.custom-control .invalid {
		position: absolute;
		left: 0;
		color: #fff;
		font-size: 11px;
		line-height: 1;
		bottom: calc(100% + 4px);
		background: #ed756b;
		padding: .3rem .5rem;
		z-index: 1;
		border-radius: 3px;
		white-space: nowrap
	}

	.is-alter .form-control~.invalid:before,
	.is-alter div.dataTables_wrapper div.dataTables_filter input~.invalid:before,
	div.dataTables_wrapper div.dataTables_filter .is-alter input~.invalid:before,
	.is-alter .dual-listbox .dual-listbox__search~.invalid:before,
	.dual-listbox .is-alter .dual-listbox__search~.invalid:before,
	.is-alter .input-group~.invalid:before,
	.custom-control .invalid:before {
		position: absolute;
		content: '';
		height: 0;
		width: 0;
		border-left: 6px solid #ed756b;
		border-right: 6px solid transparent;
		left: 10px;
		border-bottom: 6px solid transparent;
		bottom: -6px
	}

	.is-alter .form-control~.invalid,
	.is-alter div.dataTables_wrapper div.dataTables_filter input~.invalid,
	div.dataTables_wrapper div.dataTables_filter .is-alter input~.invalid,
	.is-alter .dual-listbox .dual-listbox__search~.invalid,
	.dual-listbox .is-alter .dual-listbox__search~.invalid,
	.is-alter .input-group~.invalid {
		left: auto;
		right: 0
	}

	.is-alter .form-control~.invalid::before,
	.is-alter div.dataTables_wrapper div.dataTables_filter input~.invalid::before,
	div.dataTables_wrapper div.dataTables_filter .is-alter input~.invalid::before,
	.is-alter .dual-listbox .dual-listbox__search~.invalid::before,
	.dual-listbox .is-alter .dual-listbox__search~.invalid::before,
	.is-alter .input-group~.invalid::before {
		left: auto;
		right: 10px;
		border-right-color: #ed756b;
		border-left-color: transparent;
		bottom: -4px
	}

	.table thead tr:last-child th {
		border-bottom: 1px solid #dbdfea
	}

	.table-dark thead tr:last-child th,
	.table thead.thead-dark tr:last-child th {
		border-color: #3c4d62
	}

	.table td:first-child,
	.table th:first-child {
		padding-left: 1.25rem
	}

	.table td:last-child,
	.table th:last-child {
		padding-right: 1.25rem
	}

	.table th {
		line-height: 1.1
	}

	.table th.overline-title {
		line-height: 1.25rem;
		font-weight: 500
	}

	.table caption {
		font-style: italic;
		padding-left: 1.25rem
	}

	.table-bordered td,
	.table-bordered th {
		padding-left: 1rem;
		padding-right: 1rem
	}

	.table-plain td:first-child,
	.table-plain th:first-child {
		padding-left: 0
	}

	.table-plain td:last-child,
	.table-plain th:last-child {
		padding-right: 0
	}

	.table-lg td {
		padding-top: 1rem;
		padding-bottom: 1rem
	}

	.table-lg th {
		padding-top: .75rem;
		padding-bottom: .75rem
	}

	.table-vm td,
	.table-vm th,
	.table td.vm,
	.table th.vm {
		vertical-align: middle
	}

	@media (min-width: 576px) {

		.table-lg td:first-child,
		.table-lg th:first-child {
			padding-left: 1.5rem
		}

		.table-lg td:last-child,
		.table-lg th:last-child {
			padding-right: 1.5rem
		}
	}

	.media-center {
		align-items: center
	}

	.media-object {
		display: inline-flex
	}

	.media>*:first-child {
		flex-shrink: 0
	}

	.media>*:last-child {
		flex-grow: 1;
		max-width: 100%
	}

	.nav {
		margin: -.5rem -1rem
	}

	.nav .nav-link {
		display: inline-flex;
		align-items: center
	}

	.nav .nav-link .icon+span,
	.nav .nav-link span+.icon {
		margin-left: 0.75rem
	}

	.nav .nav-link .icon {
		font-size: 1.3em
	}

	.nav-tabs {
		font-family: Nunito, sans-serif;
		margin: 0;
		font-size: 0.8125rem;
		border-bottom: 1px solid #dbdfea
	}

	.nav-tabs-s2 {
		border-bottom: none;
		justify-content: center
	}

	.nav-tabs+.tab-content {
		margin-top: 1.25rem
	}

	.nav-tabs .nav-item {
		padding-right: 1.25rem
	}

	.nav-tabs .nav-item:last-child {
		padding-right: 0
	}

	.nav-tabs .nav-item.active .nav-link {
		color: #6576ff
	}

	.nav-tabs .nav-item.active .nav-link:after {
		opacity: 1
	}

	.nav-tabs .nav-link {
		padding: 1rem 0;
		font-weight: 700;
		color: #526484;
		position: relative;
		border: none;
		outline: none;
		display: inline-flex;
		align-items: center
	}

	.nav-tabs .nav-link .icon {
		font-size: 1.4em
	}

	.nav-tabs .nav-link .icon+span {
		margin-left: 0.5rem
	}

	.nav-tabs .nav-link .badge {
		margin-left: 0.25rem
	}

	.nav-tabs .nav-link:hover {
		color: #364a63
	}

	.nav-tabs .nav-link:focus {
		color: #6576ff
	}

	.nav-tabs .nav-link:before,
	.nav-tabs .nav-link:after {
		position: absolute;
		content: ''
	}

	.nav-tabs .nav-link:after {
		left: 0;
		right: 0;
		bottom: 0;
		height: 3px;
		background: #6576ff;
		opacity: 0
	}

	.nav-tabs .nav-link.active {
		color: #6576ff;
		border: none;
		background-color: transparent
	}

	.nav-tabs .nav-link.active:after {
		opacity: 1
	}

	.nav-sm {
		font-size: 0.8125rem
	}

	@media (min-width: 768px) {
		.nav-tabs .nav-item {
			padding-right: 1.5rem
		}

		.nav-tabs-sm .nav-item {
			padding-right: 1.25rem
		}
	}

	@media (min-width: 992px) {
		.nav-tabs .nav-item {
			padding-right: 1.75rem
		}

		.nav-tabs-sm .nav-item {
			padding-right: 1.25rem
		}

		.nav-tabs .nav-link {
			font-size: 0.875rem
		}
	}

	@media (min-width: 1200px) {
		.nav-tabs .nav-item {
			padding-right: 2.25rem
		}

		.nav-tabs-sm .nav-item {
			padding-right: 1.25rem
		}
	}

	@media (max-width: 575.98px) {
		.nav-tabs.is-stretch {
			margin-left: -18px;
			margin-right: -18px;
			padding-left: 18px;
			padding-right: 18px
		}
	}

	.nav-item-trigger {
		display: inline-flex;
		align-items: center;
		margin: -1px -.5rem 0 auto
	}

	.nav-tabs-card {
		padding-left: 1.25rem;
		padding-right: 1.25rem;
		font-family: Roboto, sans-serif
	}

	@media (min-width: 576px) {
		.nav-tabs-card {
			padding-left: 1.5rem;
			padding-right: 1.5rem
		}
	}

	@media (max-width: 767.98px) {
		.nav-tabs-mb-icon .nav-item {
			padding-right: .75rem
		}

		.nav-tabs-mb-icon .nav-link .icon {
			font-size: 1.25rem;
			padding: 0 .5rem
		}

		.nav-tabs-mb-icon .nav-link .icon+span {
			display: none
		}
	}

	@media (max-width: 359px) {
		.nav-tabs-mb-icon .nav-item {
			padding-right: .35rem
		}
	}

	.is-medium.nav-tabs .nav-link {
		padding: .75rem 0
	}

	.modal-content {
		position: relative;
		min-height: 40px;
		box-shadow: 0px 0px 1px 0px rgba(82, 100, 132, 0.2), 0px 8px 15.52px 0.48px rgba(28, 43, 70, 0.15)
	}

	.modal-content>.close {
		position: absolute;
		top: .75rem;
		right: .75rem;
		height: 2.25rem;
		width: 2.25rem;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		color: #526484;
		z-index: 1;
		transition: all .3s
	}

	.modal-body .stretched {
		border-radius: 0;
		margin-left: -1.25rem;
		margin-right: -1.25rem;
		padding-left: 1.25rem;
		padding-right: 1.25rem
	}

	.modal-body .stretched.alert {
		border: none
	}

	.modal-body .stretched.alert-icon {
		padding-left: 3.25rem
	}

	.modal-body-md {
		padding: 1.75rem 1.25rem
	}

	.modal-body-md .stretched {
		margin-left: -1.25rem;
		margin-right: -1.25rem;
		padding-left: 1.25rem;
		padding-right: 1.25rem
	}

	.modal-body-md .stretched.alert-icon {
		padding-left: 4.5rem
	}

	.modal-body-lg {
		padding: 2.25rem 1.25rem
	}

	.modal-body-lg .stretched {
		margin-left: -1.25rem;
		margin-right: -1.25rem;
		padding-left: 1.25rem;
		padding-right: 1.25rem
	}

	.modal-body-lg .stretched.alert-icon {
		padding-left: 4.5rem
	}

	.modal-footer-stretch {
		justify-content: stretch
	}

	.modal-footer-between {
		display: flex;
		width: 100%;
		align-items: center;
		justify-content: space-between;
		flex-wrap: wrap;
		margin: -.25rem 0
	}

	.modal-footer-between>div {
		padding: .25rem 0
	}

	.modal-dialog {
		display: flex;
		align-items: center;
		min-height: calc(100% - 1rem)
	}

	.modal-dialog::before {
		height: calc(100vh - 1rem)
	}

	.modal.fade .modal-dialog {
		transform: translate(0, -10px)
	}

	.modal.zoom .modal-dialog {
		transform: scale(0.95);
		transition: transform 0.3s ease-out
	}

	.modal-dialog-top {
		align-items: flex-start
	}

	.modal.fade .modal-dialog-top {
		transform: translate(0, -30px)
	}

	.modal-dialog-bottom {
		align-items: flex-end
	}

	@media (min-width: 576px) {
		.modal-dialog {
			min-height: calc(100% - 3.5rem)
		}

		.modal-dialog::before {
			height: calc(100vh - 3.5rem)
		}

		.modal-body {
			padding: 1.5rem 1.5rem
		}

		.modal-body .stretched {
			margin-left: -1.5rem;
			margin-right: -1.5rem;
			padding-left: 1.5rem;
			padding-right: 1.5rem
		}

		.modal-body .stretched.alert-icon {
			padding-left: 3.5rem
		}

		.modal-body-sm {
			padding: 1.25rem 1.25rem
		}

		.modal-body-sm .stretched {
			margin-left: -1.25rem;
			margin-right: -1.25rem;
			padding-left: 1.25rem;
			padding-right: 1.25rem
		}

		.modal-body-sm .stretched.alert-icon {
			padding-left: 3.25rem
		}

		.modal-body-md {
			padding: 2.25rem 2.5rem
		}

		.modal-body-md .stretched {
			margin-left: -2.5rem;
			margin-right: -2.5rem;
			padding-left: 2.5rem;
			padding-right: 2.5rem
		}

		.modal-body-md .stretched.alert-icon {
			padding-left: 4.5rem
		}

		.modal-body-md .stretched.alert-icon>.icon {
			left: 2.5rem
		}

		.modal-body-lg {
			padding: 3.75rem 3.75rem
		}

		.modal-body-lg .stretched {
			margin-left: -3.75rem;
			margin-right: -3.75rem;
			padding-left: 3.75rem;
			padding-right: 3.75rem
		}

		.modal-body-lg .stretched.alert-icon {
			padding-left: 5.75rem
		}

		.modal-header {
			padding: 1rem 1.5rem
		}

		.modal-header-sm {
			padding: 0.75rem 1.25rem
		}

		.modal-footer {
			padding: 1rem 1.5rem
		}

		.modal-footer-sm {
			padding: 0.75rem 1.25rem
		}
	}

	@media (min-width: 768px) {
		.modal-md {
			max-width: 600px
		}
	}

	.pagination-goto {
		display: inline-flex;
		align-items: center;
		font-size: .8125rem;
		text-transform: uppercase
	}

	.page-link {
		font-size: .8125rem;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		min-width: calc(1rem + 1.125rem + 2px)
	}

	.pagination-sm .page-link {
		line-height: .875rem;
		min-width: calc(.875rem + .875rem + 2px)
	}

	.pagination-lg .page-link {
		line-height: 1.5rem;
		min-width: calc(1.5rem + 1.125rem + 2px)
	}

	.pagination-xl .page-link {
		padding: .875rem .75rem;
		font-size: 1.38125rem;
		line-height: 1.5rem;
		min-width: calc(1.5rem + 1.75rem + 2px)
	}

	.page-link .icon {
		font-size: .8125rem;
		line-height: inherit
	}

	.page-link:not([href]) {
		background-color: transparent;
		color: inherit
	}

	.page-link:not([href]) .icon:before {
		position: relative;
		top: 1px
	}

	.page-link-prev span,
	.page-link-next span {
		display: none
	}

	@media (min-width: 576px) {

		.page-link-prev span,
		.page-link-next span {
			display: block
		}

		.page-link-prev .icon {
			padding-right: 0.25rem
		}

		.page-link-next .icon {
			padding-left: 0.25rem
		}
	}

	.progress-bar {
		height: 100%;
		line-height: 1
	}

	.progress-sm {
		height: .25rem
	}

	.progress-md {
		height: .375rem
	}

	.progress-lg {
		height: 1rem
	}

	.progress-pill,
	.progress-pill .progress-bar {
		border-radius: 100px
	}

	.progress-text {
		display: flex;
		align-items: center;
		justify-content: space-between;
		color: #8094ae;
		margin-bottom: 0.25rem
	}

	.progress-label {
		font-size: 0.875rem
	}

	.progress-amount {
		font-size: 12px;
		padding-left: .5rem
	}

	.progress-alt {
		display: flex;
		align-items: center;
		overflow: visible
	}

	.progress-alt .progress-bar {
		border-radius: 2px
	}

	.progress-reverse {
		flex-direction: row-reverse
	}

	.progress-bordered .progress-bar {
		margin-top: -2px;
		border: 2px solid #fff;
		box-sizing: content-box
	}

	.progress-bordered .progress-bar:not(:first-child) {
		margin-left: -4px
	}

	.progress-bordered.progress-reverse .progress-bar {
		margin-left: 0
	}

	.progress-bordered.progress-reverse .progress-bar:not(:last-child) {
		margin-left: -5px
	}

	.toast .close {
		display: inline-flex;
		margin-right: -0.5rem;
		margin-left: 0.5rem
	}

	@font-face {
		font-family: "Nioicon";
		src: url("../fonts/Nioicon.eot");
		src: url("../fonts/Nioicon.eot#iefix") format("embedded-opentype"), url("../fonts/Nioicon.ttf") format("truetype"), url("../fonts/Nioicon.woff") format("woff"), url("../fonts/Nioicon.svg#Nioicon") format("svg");
		font-weight: normal;
		font-style: normal;
		font-display: block
	}

	.ni {
		font-family: "Nioicon" !important;
		speak: never;
		font-style: normal;
		font-weight: normal;
		font-variant: normal;
		text-transform: none;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale
	}

	.ni-centos:before {
		content: ""
	}

	.ni-covid:before {
		content: ""
	}

	.ni-fedora:before {
		content: ""
	}

	.ni-hot-fill:before {
		content: ""
	}

	.ni-hot:before {
		content: ""
	}

	.ni-linux-server:before {
		content: ""
	}

	.ni-linux:before {
		content: ""
	}

	.ni-note-add-fill:before {
		content: ""
	}

	.ni-repeat-fill:before {
		content: ""
	}

	.ni-tranx-fill:before {
		content: ""
	}

	.ni-ubuntu:before {
		content: ""
	}

	.ni-virus:before {
		content: ""
	}

	.ni-b-chrome:before {
		content: ""
	}

	.ni-b-edge:before {
		content: ""
	}

	.ni-b-firefox:before {
		content: ""
	}

	.ni-b-ie:before {
		content: ""
	}

	.ni-b-opera:before {
		content: ""
	}

	.ni-b-safari:before {
		content: ""
	}

	.ni-b-si:before {
		content: ""
	}

	.ni-b-uc:before {
		content: ""
	}

	.ni-brick-fill:before {
		content: ""
	}

	.ni-brick:before {
		content: ""
	}

	.ni-col-3s:before {
		content: ""
	}

	.ni-col-4s:before {
		content: ""
	}

	.ni-col-2s:before {
		content: ""
	}

	.ni-comments:before {
		content: ""
	}

	.ni-dot-sq:before {
		content: ""
	}

	.ni-dot:before {
		content: ""
	}

	.ni-footer:before {
		content: ""
	}

	.ni-header:before {
		content: ""
	}

	.ni-heading:before {
		content: ""
	}

	.ni-layout-alt-fill:before {
		content: ""
	}

	.ni-layout-alt:before {
		content: ""
	}

	.ni-layout-fill1:before {
		content: ""
	}

	.ni-layout1:before {
		content: ""
	}

	.ni-list-index-fill:before {
		content: ""
	}

	.ni-list-index:before {
		content: ""
	}

	.ni-list-thumb-alt-fill:before {
		content: ""
	}

	.ni-list-thumb-alt:before {
		content: ""
	}

	.ni-list-thumb-fill:before {
		content: ""
	}

	.ni-list-thumb:before {
		content: ""
	}

	.ni-masonry-fill:before {
		content: ""
	}

	.ni-masonry:before {
		content: ""
	}

	.ni-menu-circled:before {
		content: ""
	}

	.ni-menu-squared:before {
		content: ""
	}

	.ni-notice:before {
		content: ""
	}

	.ni-pen2:before {
		content: ""
	}

	.ni-property-blank:before {
		content: ""
	}

	.ni-propert-blank:before {
		content: ""
	}

	.ni-property-add:before {
		content: ""
	}

	.ni-property-alt:before {
		content: ""
	}

	.ni-property-remove:before {
		content: ""
	}

	.ni-property:before {
		content: ""
	}

	.ni-puzzle-fill:before {
		content: ""
	}

	.ni-puzzle:before {
		content: ""
	}

	.ni-quote-left:before {
		content: ""
	}

	.ni-quote-right:before {
		content: ""
	}

	.ni-row-mix:before {
		content: ""
	}

	.ni-row-view1:before {
		content: ""
	}

	.ni-sidebar-r:before {
		content: ""
	}

	.ni-text2:before {
		content: ""
	}

	.ni-tile-thumb-fill:before {
		content: ""
	}

	.ni-tile-thumb:before {
		content: ""
	}

	.ni-view-col-fill:before {
		content: ""
	}

	.ni-view-col-sq:before {
		content: ""
	}

	.ni-view-col:before {
		content: ""
	}

	.ni-view-col2:before {
		content: ""
	}

	.ni-view-col3:before {
		content: ""
	}

	.ni-view-cols-fill:before {
		content: ""
	}

	.ni-view-cols-sq:before {
		content: ""
	}

	.ni-view-cols:before {
		content: ""
	}

	.ni-view-grid-fill:before {
		content: ""
	}

	.ni-view-grid-sq:before {
		content: ""
	}

	.ni-view-grid-wd:before {
		content: ""
	}

	.ni-view-grid:before {
		content: ""
	}

	.ni-view-grid2-wd:before {
		content: ""
	}

	.ni-view-grid3-wd:before {
		content: ""
	}

	.ni-view-group-fill:before {
		content: ""
	}

	.ni-view-group-wd:before {
		content: ""
	}

	.ni-view-list-fill:before {
		content: ""
	}

	.ni-view-list-sq:before {
		content: ""
	}

	.ni-view-list-wd:before {
		content: ""
	}

	.ni-view-list:before {
		content: ""
	}

	.ni-view-panel-fill:before {
		content: ""
	}

	.ni-view-panel-sq:before {
		content: ""
	}

	.ni-view-panel:before {
		content: ""
	}

	.ni-view-row-fill:before {
		content: ""
	}

	.ni-view-row-sq:before {
		content: ""
	}

	.ni-view-row-wd:before {
		content: ""
	}

	.ni-view-row:before {
		content: ""
	}

	.ni-view-x1:before {
		content: ""
	}

	.ni-view-x2:before {
		content: ""
	}

	.ni-view-x3:before {
		content: ""
	}

	.ni-view-x4:before {
		content: ""
	}

	.ni-view-x5:before {
		content: ""
	}

	.ni-view-x6:before {
		content: ""
	}

	.ni-view-x7:before {
		content: ""
	}

	.ni-dashlite:before {
		content: ""
	}

	.ni-dashlite-circle:before {
		content: ""
	}

	.ni-dashlite-alt:before {
		content: ""
	}

	.ni-master-card:before {
		content: ""
	}

	.ni-paypal:before {
		content: ""
	}

	.ni-visa-alt:before {
		content: ""
	}

	.ni-coin-eur:before {
		content: ""
	}

	.ni-coin-gbp:before {
		content: ""
	}

	.ni-sign-ada-alt:before {
		content: ""
	}

	.ni-sign-bch-alt:before {
		content: ""
	}

	.ni-sign-bgp-alt:before {
		content: ""
	}

	.ni-sign-bnb-alt:before {
		content: ""
	}

	.ni-sign-brl-alt:before {
		content: ""
	}

	.ni-sign-btc-alt:before {
		content: ""
	}

	.ni-sign-cc-alt:before {
		content: ""
	}

	.ni-sign-cc-alt2:before {
		content: ""
	}

	.ni-sign-chf-alt:before {
		content: ""
	}

	.ni-sign-cny-alt:before {
		content: ""
	}

	.ni-sign-czk-alt:before {
		content: ""
	}

	.ni-sign-dash-alt:before {
		content: ""
	}

	.ni-sign-dkk-alt:before {
		content: ""
	}

	.ni-sign-eos-alt:before {
		content: ""
	}

	.ni-sign-eth-alt:before {
		content: ""
	}

	.ni-sign-eur-alt2:before {
		content: ""
	}

	.ni-sign-euro-alt:before {
		content: ""
	}

	.ni-sign-gbp-alt2:before {
		content: ""
	}

	.ni-sign-hkd-alt:before {
		content: ""
	}

	.ni-sign-idr-alt:before {
		content: ""
	}

	.ni-sign-inr-alt:before {
		content: ""
	}

	.ni-sign-jpy-alt:before {
		content: ""
	}

	.ni-sign-kr-alt:before {
		content: ""
	}

	.ni-sign-ltc-alt:before {
		content: ""
	}

	.ni-sign-ltc:before {
		content: ""
	}

	.ni-sign-mxn-alt:before {
		content: ""
	}

	.ni-sign-mxr-alt:before {
		content: ""
	}

	.ni-sign-myr-alt:before {
		content: ""
	}

	.ni-sign-paypal-alt:before {
		content: ""
	}

	.ni-sign-paypal-full:before {
		content: ""
	}

	.ni-sign-php-alt:before {
		content: ""
	}

	.ni-sign-pln-alt:before {
		content: ""
	}

	.ni-sign-rub-alt:before {
		content: ""
	}

	.ni-sign-sek-alt:before {
		content: ""
	}

	.ni-sign-sgd-alt:before {
		content: ""
	}

	.ni-sign-kobo-alt:before {
		content: ""
	}

	.ni-sign-steem-alt:before {
		content: ""
	}

	.ni-sign-steller-alt:before {
		content: ""
	}

	.ni-sign-stripe-fulll:before {
		content: ""
	}

	.ni-sign-thb-alt:before {
		content: ""
	}

	.ni-sign-trx-alt:before {
		content: ""
	}

	.ni-sign-try-alt:before {
		content: ""
	}

	.ni-sign-usd-alt:before {
		content: ""
	}

	.ni-sign-usd-alt2:before {
		content: ""
	}

	.ni-sign-usdc-alt:before {
		content: ""
	}

	.ni-sign-usdt-alt:before {
		content: ""
	}

	.ni-sign-visa-alt:before {
		content: ""
	}

	.ni-sign-vnd-alt:before {
		content: ""
	}

	.ni-sign-waves-alt:before {
		content: ""
	}

	.ni-sign-xem-alt:before {
		content: ""
	}

	.ni-sign-xrp-new-alt:before {
		content: ""
	}

	.ni-sign-xrp-old-alt:before {
		content: ""
	}

	.ni-sign-zcash-alt:before {
		content: ""
	}

	.ni-chevron-left:before {
		content: ""
	}

	.ni-chevron-right:before {
		content: ""
	}

	.ni-chevron-up:before {
		content: ""
	}

	.ni-chevron-down:before {
		content: ""
	}

	.ni-chevron-left-round:before {
		content: ""
	}

	.ni-chevron-right-round:before {
		content: ""
	}

	.ni-chevron-up-round:before {
		content: ""
	}

	.ni-chevron-down-round:before {
		content: ""
	}

	.ni-chevron-left-round-fill:before {
		content: ""
	}

	.ni-chevron-right-round-fill:before {
		content: ""
	}

	.ni-chevron-up-round-fill:before {
		content: ""
	}

	.ni-chevron-down-round-fill:before {
		content: ""
	}

	.ni-chevron-left-c:before {
		content: ""
	}

	.ni-chevron-right-c:before {
		content: ""
	}

	.ni-chevron-up-c:before {
		content: ""
	}

	.ni-chevron-down-c:before {
		content: ""
	}

	.ni-chevron-left-fill-c:before {
		content: ""
	}

	.ni-chevron-right-fill-c:before {
		content: ""
	}

	.ni-chevron-up-fill-c:before {
		content: ""
	}

	.ni-chevron-down-fill-c:before {
		content: ""
	}

	.ni-chevron-left-circle:before {
		content: ""
	}

	.ni-chevron-right-circle:before {
		content: ""
	}

	.ni-chevron-up-circle:before {
		content: ""
	}

	.ni-chevron-down-circle:before {
		content: ""
	}

	.ni-chevron-left-circle-fill:before {
		content: ""
	}

	.ni-chevron-right-circle-fill:before {
		content: ""
	}

	.ni-chevron-up-circle-fill:before {
		content: ""
	}

	.ni-chevron-down-circle-fill:before {
		content: ""
	}

	.ni-caret-left:before {
		content: ""
	}

	.ni-caret-right:before {
		content: ""
	}

	.ni-caret-up:before {
		content: ""
	}

	.ni-caret-down:before {
		content: ""
	}

	.ni-caret-left-fill:before {
		content: ""
	}

	.ni-caret-right-fill:before {
		content: ""
	}

	.ni-caret-up-fill:before {
		content: ""
	}

	.ni-caret-down-fill:before {
		content: ""
	}

	.ni-sort:before {
		content: ""
	}

	.ni-sort-up:before {
		content: ""
	}

	.ni-sort-down:before {
		content: ""
	}

	.ni-sort-fill:before {
		content: ""
	}

	.ni-sort-up-fill:before {
		content: ""
	}

	.ni-sort-down-fill:before {
		content: ""
	}

	.ni-sort-v:before {
		content: ""
	}

	.ni-swap-v:before {
		content: ""
	}

	.ni-swap:before {
		content: ""
	}

	.ni-arrow-left-round:before {
		content: ""
	}

	.ni-arrow-right-round:before {
		content: ""
	}

	.ni-arrow-up-round:before {
		content: ""
	}

	.ni-arrow-down-round:before {
		content: ""
	}

	.ni-arrow-left-round-fill:before {
		content: ""
	}

	.ni-arrow-right-round-fill:before {
		content: ""
	}

	.ni-arrow-up-round-fill:before {
		content: ""
	}

	.ni-arrow-down-round-fill:before {
		content: ""
	}

	.ni-arrow-left-c:before {
		content: ""
	}

	.ni-arrow-right-c:before {
		content: ""
	}

	.ni-arrow-up-c:before {
		content: ""
	}

	.ni-arrow-down-c:before {
		content: ""
	}

	.ni-arrow-left-fill-c:before {
		content: ""
	}

	.ni-arrow-right-fill-c:before {
		content: ""
	}

	.ni-arrow-up-fill-c:before {
		content: ""
	}

	.ni-arrow-down-fill-c:before {
		content: ""
	}

	.ni-arrow-left-circle:before {
		content: ""
	}

	.ni-arrow-right-circle:before {
		content: ""
	}

	.ni-arrow-up-circle:before {
		content: ""
	}

	.ni-arrow-down-circle:before {
		content: ""
	}

	.ni-arrow-left-circle-fill:before {
		content: ""
	}

	.ni-arrow-up-circle-fill:before {
		content: ""
	}

	.ni-arrow-down-circle-fill:before {
		content: ""
	}

	.ni-arrow-right-circle-fill:before {
		content: ""
	}

	.ni-chevrons-left:before {
		content: ""
	}

	.ni-chevrons-right:before {
		content: ""
	}

	.ni-chevrons-up:before {
		content: ""
	}

	.ni-chevrons-down:before {
		content: ""
	}

	.ni-first:before {
		content: ""
	}

	.ni-last:before {
		content: ""
	}

	.ni-back-ios:before {
		content: ""
	}

	.ni-forward-ios:before {
		content: ""
	}

	.ni-upword-ios:before {
		content: ""
	}

	.ni-downward-ios:before {
		content: ""
	}

	.ni-back-alt:before {
		content: ""
	}

	.ni-forward-alt:before {
		content: ""
	}

	.ni-upword-alt:before {
		content: ""
	}

	.ni-downward-alt:before {
		content: ""
	}

	.ni-back-alt-fill:before {
		content: ""
	}

	.ni-forward-alt-fill:before {
		content: ""
	}

	.ni-upword-alt-fill:before {
		content: ""
	}

	.ni-downward-alt-fill:before {
		content: ""
	}

	.ni-arrow-long-left:before {
		content: ""
	}

	.ni-arrow-long-right:before {
		content: ""
	}

	.ni-arrow-long-up:before {
		content: ""
	}

	.ni-arrow-long-down:before {
		content: ""
	}

	.ni-arrow-left:before {
		content: ""
	}

	.ni-arrow-right:before {
		content: ""
	}

	.ni-arrow-up:before {
		content: ""
	}

	.ni-arrow-down:before {
		content: ""
	}

	.ni-arrow-up-left:before {
		content: ""
	}

	.ni-arrow-up-right:before {
		content: ""
	}

	.ni-arrow-down-left:before {
		content: ""
	}

	.ni-arrow-down-right:before {
		content: ""
	}

	.ni-arrow-to-left:before {
		content: ""
	}

	.ni-arrow-to-right:before {
		content: ""
	}

	.ni-arrow-to-up:before {
		content: ""
	}

	.ni-arrow-to-down:before {
		content: ""
	}

	.ni-arrow-from-left:before {
		content: ""
	}

	.ni-arrow-from-right:before {
		content: ""
	}

	.ni-arrow-from-up:before {
		content: ""
	}

	.ni-arrow-from-down:before {
		content: ""
	}

	.ni-curve-down-left:before {
		content: ""
	}

	.ni-curve-up-right:before {
		content: ""
	}

	.ni-curve-up-left:before {
		content: ""
	}

	.ni-curve-down-right:before {
		content: ""
	}

	.ni-curve-left-up:before {
		content: ""
	}

	.ni-curve-right-up:before {
		content: ""
	}

	.ni-curve-left-down:before {
		content: ""
	}

	.ni-curve-right-down:before {
		content: ""
	}

	.ni-back-arrow:before {
		content: ""
	}

	.ni-forward-arrow:before {
		content: ""
	}

	.ni-back-arrow-fill:before {
		content: ""
	}

	.ni-forward-arrow-fill:before {
		content: ""
	}

	.ni-navigate:before {
		content: ""
	}

	.ni-navigate-up:before {
		content: ""
	}

	.ni-navigate-fill:before {
		content: ""
	}

	.ni-navigate-up-fill:before {
		content: ""
	}

	.ni-send:before {
		content: ""
	}

	.ni-send-alt:before {
		content: ""
	}

	.ni-unfold-less:before {
		content: ""
	}

	.ni-unfold-more:before {
		content: ""
	}

	.ni-exchange-v:before {
		content: ""
	}

	.ni-exchange:before {
		content: ""
	}

	.ni-expand:before {
		content: ""
	}

	.ni-shrink:before {
		content: ""
	}

	.ni-focus:before {
		content: ""
	}

	.ni-maximize:before {
		content: ""
	}

	.ni-minimize:before {
		content: ""
	}

	.ni-maximize-alt:before {
		content: ""
	}

	.ni-minimize-alt:before {
		content: ""
	}

	.ni-shuffle:before {
		content: ""
	}

	.ni-cross-sm:before {
		content: ""
	}

	.ni-cross:before {
		content: ""
	}

	.ni-cross-round:before {
		content: ""
	}

	.ni-cross-circle:before {
		content: ""
	}

	.ni-cross-c:before {
		content: ""
	}

	.ni-cross-round-fill:before {
		content: ""
	}

	.ni-cross-circle-fill:before {
		content: ""
	}

	.ni-cross-fill-c:before {
		content: ""
	}

	.ni-na:before {
		content: ""
	}

	.ni-check:before {
		content: ""
	}

	.ni-check-thick:before {
		content: ""
	}

	.ni-done:before {
		content: ""
	}

	.ni-check-round:before {
		content: ""
	}

	.ni-check-circle:before {
		content: ""
	}

	.ni-check-c:before {
		content: ""
	}

	.ni-check-round-fill:before {
		content: ""
	}

	.ni-check-circle-fill:before {
		content: ""
	}

	.ni-check-fill-c:before {
		content: ""
	}

	.ni-check-circle-cut:before {
		content: ""
	}

	.ni-check-round-cut:before {
		content: ""
	}

	.ni-bullet:before {
		content: ""
	}

	.ni-circle:before {
		content: ""
	}

	.ni-square:before {
		content: ""
	}

	.ni-square-c:before {
		content: ""
	}

	.ni-bullet-fill:before {
		content: ""
	}

	.ni-circle-fill:before {
		content: ""
	}

	.ni-square-fill:before {
		content: ""
	}

	.ni-square-fill-c:before {
		content: ""
	}

	.ni-plus-sm:before {
		content: ""
	}

	.ni-minus-sm:before {
		content: ""
	}

	.ni-plus:before {
		content: ""
	}

	.ni-minus:before {
		content: ""
	}

	.ni-plus-round:before {
		content: ""
	}

	.ni-minus-round:before {
		content: ""
	}

	.ni-plus-circle:before {
		content: ""
	}

	.ni-minus-circle:before {
		content: ""
	}

	.ni-plus-c:before {
		content: ""
	}

	.ni-minus-c:before {
		content: ""
	}

	.ni-plus-round-fill:before {
		content: ""
	}

	.ni-plus-circle-fill:before {
		content: ""
	}

	.ni-minus-round-fill:before {
		content: ""
	}

	.ni-minus-circle-fill:before {
		content: ""
	}

	.ni-plus-fill-c:before {
		content: ""
	}

	.ni-minus-fill-c:before {
		content: ""
	}

	.ni-plus-medi:before {
		content: ""
	}

	.ni-plus-medi-fill:before {
		content: ""
	}

	.ni-equal-sm:before {
		content: ""
	}

	.ni-equal:before {
		content: ""
	}


	.dropzone .dz-preview .dz-remove:hover {
		text-decoration: underline
	}

	.dropzone .dz-preview:hover .dz-details {
		opacity: 1
	}

	.dropzone .dz-preview .dz-details {
		z-index: 20;
		position: absolute;
		top: 0;
		left: 0;
		opacity: 0;
		font-size: 13px;
		min-width: 100%;
		max-width: 100%;
		padding: 2em 1em;
		text-align: center;
		color: rgba(0, 0, 0, 0.9);
		line-height: 150%
	}

	.dropzone .dz-preview .dz-details .dz-size {
		margin-bottom: 1em;
		font-size: 16px
	}

	.dropzone .dz-preview .dz-details .dz-filename {
		white-space: nowrap
	}

	.dropzone .dz-preview .dz-details .dz-filename:hover span {
		border: 1px solid rgba(200, 200, 200, 0.8);
		background-color: rgba(255, 255, 255, 0.8)
	}

	.dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
		overflow: hidden;
		text-overflow: ellipsis
	}

	.dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
		border: 1px solid transparent
	}

	.dropzone .dz-preview .dz-details .dz-filename span,
	.dropzone .dz-preview .dz-details .dz-size span {
		background-color: rgba(255, 255, 255, 0.4);
		padding: 0 0.4em;
		border-radius: 3px
	}

	.dropzone .dz-preview:hover .dz-image img {
		-webkit-transform: scale(1.05, 1.05);
		-moz-transform: scale(1.05, 1.05);
		-ms-transform: scale(1.05, 1.05);
		-o-transform: scale(1.05, 1.05);
		transform: scale(1.05, 1.05);
		-webkit-filter: blur(8px);
		filter: blur(8px)
	}

	.dropzone .dz-preview .dz-image {
		border-radius: 20px;
		overflow: hidden;
		width: 120px;
		height: 120px;
		position: relative;
		display: block;
		z-index: 10
	}

	.dropzone .dz-preview .dz-image img {
		display: block
	}

	.dropzone .dz-preview.dz-success .dz-success-mark {
		-webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
		-moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
		-ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
		-o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
		animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1)
	}

	.dropzone .dz-preview.dz-error .dz-error-mark {
		opacity: 1;
		-webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
		-moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
		-ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
		-o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
		animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1)
	}

	.dropzone .dz-preview .dz-success-mark,
	.dropzone .dz-preview .dz-error-mark {
		pointer-events: none;
		opacity: 0;
		z-index: 500;
		position: absolute;
		display: block;
		top: 50%;
		left: 50%;
		margin-left: -27px;
		margin-top: -27px
	}

	.dropzone .dz-preview .dz-success-mark svg,
	.dropzone .dz-preview .dz-error-mark svg {
		display: block;
		width: 54px;
		height: 54px
	}

	.dropzone .dz-preview.dz-processing .dz-progress {
		opacity: 1;
		-webkit-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
		transition: all 0.2s linear
	}

	.dropzone .dz-preview.dz-complete .dz-progress {
		opacity: 0;
		-webkit-transition: opacity 0.4s ease-in;
		-moz-transition: opacity 0.4s ease-in;
		-ms-transition: opacity 0.4s ease-in;
		-o-transition: opacity 0.4s ease-in;
		transition: opacity 0.4s ease-in
	}

	.dropzone .dz-preview:not(.dz-processing) .dz-progress {
		-webkit-animation: pulse 6s ease infinite;
		-moz-animation: pulse 6s ease infinite;
		-ms-animation: pulse 6s ease infinite;
		-o-animation: pulse 6s ease infinite;
		animation: pulse 6s ease infinite
	}

	.dropzone .dz-preview .dz-progress {
		opacity: 1;
		z-index: 1000;
		pointer-events: none;
		position: absolute;
		height: 16px;
		left: 50%;
		top: 50%;
		margin-top: -8px;
		width: 80px;
		margin-left: -40px;
		background: rgba(255, 255, 255, 0.9);
		-webkit-transform: scale(1);
		border-radius: 8px;
		overflow: hidden
	}

	.dropzone .dz-preview .dz-progress .dz-upload {
		background: #333;
		background: linear-gradient(to bottom, #666, #444);
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		width: 0;
		-webkit-transition: width 300ms ease-in-out;
		-moz-transition: width 300ms ease-in-out;
		-ms-transition: width 300ms ease-in-out;
		-o-transition: width 300ms ease-in-out;
		transition: width 300ms ease-in-out
	}

	.dropzone .dz-preview.dz-error .dz-error-message {
		display: block
	}

	.dropzone .dz-preview.dz-error:hover .dz-error-message {
		opacity: 1;
		pointer-events: auto
	}

	.dropzone .dz-preview .dz-error-message {
		pointer-events: none;
		z-index: 1000;
		position: absolute;
		display: block;
		display: none;
		opacity: 0;
		-webkit-transition: opacity 0.3s ease;
		-moz-transition: opacity 0.3s ease;
		-ms-transition: opacity 0.3s ease;
		-o-transition: opacity 0.3s ease;
		transition: opacity 0.3s ease;
		border-radius: 8px;
		font-size: 13px;
		top: 130px;
		left: -10px;
		width: 140px;
		background: #be2626;
		background: linear-gradient(to bottom, #be2626, #a92222);
		padding: 0.5em 1.2em;
		color: white
	}

	.dropzone .dz-preview .dz-error-message:after {
		content: '';
		position: absolute;
		top: -6px;
		left: 64px;
		width: 0;
		height: 0;
		border-left: 6px solid transparent;
		border-right: 6px solid transparent;
		border-bottom: 6px solid #be2626
	}

	.noUi-target,
	.noUi-target * {
		-webkit-touch-callout: none;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		-webkit-user-select: none;
		-ms-touch-action: none;
		touch-action: none;
		-ms-user-select: none;
		-moz-user-select: none;
		user-select: none;
		-moz-box-sizing: border-box;
		box-sizing: border-box
	}

	.noUi-target {
		position: relative
	}

	.noUi-base,
	.noUi-connects {
		width: 100%;
		height: 100%;
		position: relative;
		z-index: 1
	}

	.noUi-connects {
		overflow: hidden;
		z-index: 0
	}

	.noUi-connect,
	.noUi-origin {
		will-change: transform;
		position: absolute;
		z-index: 1;
		top: 0;
		right: 0;
		-ms-transform-origin: 0 0;
		-webkit-transform-origin: 0 0;
		-webkit-transform-style: preserve-3d;
		transform-origin: 0 0;
		transform-style: flat
	}

	.noUi-connect {
		height: 100%;
		width: 100%
	}

	.noUi-origin {
		height: 10%;
		width: 10%
	}

	.noUi-vertical .noUi-origin {
		width: 100%
	}

	.noUi-horizontal .noUi-origin {
		height: 100%
	}

	.noUi-handle {
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
		position: absolute
	}

	.noUi-handle:focus {
		outline: none
	}

	.noUi-touch-area {
		height: 100%;
		width: 100%
	}

	.noUi-touch-area:focus {
		outline: none
	}

	.noUi-state-tap .noUi-connect,
	.noUi-state-tap .noUi-origin {
		-webkit-transition: transform 0.3s;
		transition: transform 0.3s
	}

	.noUi-state-drag * {
		cursor: inherit !important
	}

	.noUi-horizontal {
		height: 8px
	}

	.noUi-horizontal .noUi-handle {
		width: 28px;
		height: 28px;
		right: -14px;
		top: 50%;
		transform: translateY(-50%)
	}

	.noUi-vertical {
		width: 8px;
		height: 200px
	}

	.noUi-vertical .noUi-handle {
		width: 28px;
		height: 28px;
		left: 50%;
		top: -14px;
		transform: translateX(-50%)
	}

	.noUi-target {
		background: #dbdfea;
		border-radius: 4px
	}

	.noUi-connects {
		border-radius: 3px
	}

	.noUi-connect {
		background: #6576ff
	}

	.noUi-draggable {
		cursor: ew-resize
	}

	.noUi-vertical .noUi-draggable {
		cursor: ns-resize
	}

	.noUi-handle {
		border: 1px solid #dbdfea;
		border-radius: 50%;
		background: #fff;
		cursor: default;
		box-shadow: 0 3px 12px 1px rgba(43, 55, 72, 0.15)
	}

	.noUi-active {
		box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #DDD, 0 3px 6px -3px #BBB
	}

	.noUi-handle:before,
	.noUi-handle:after {
		content: "";
		display: block;
		position: absolute;
		height: 10px;
		width: 1px;
		background: #dbdfea;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%)
	}

	.noUi-horizontal .noUi-handle:before {
		margin-left: -2px
	}

	.noUi-horizontal .noUi-handle:after {
		margin-left: 2px
	}

	.noUi-vertical .noUi-handle:before,
	.noUi-vertical .noUi-handle:after {
		width: 10px;
		height: 1px
	}

	.noUi-vertical .noUi-handle:before {
		margin-top: -2px
	}

	.noUi-vertical .noUi-handle:after {
		margin-top: 2px
	}

	[disabled] .noUi-connect {
		background: #e5e9f2
	}

	[disabled].noUi-target,
	[disabled].noUi-handle,
	[disabled] .noUi-handle {
		cursor: not-allowed
	}

	.noUi-pips,
	.noUi-pips * {
		-moz-box-sizing: border-box;
		box-sizing: border-box
	}

	.noUi-pips {
		position: absolute;
		color: #999
	}

	.noUi-value {
		position: absolute;
		white-space: nowrap;
		text-align: center
	}

	.noUi-value-sub {
		color: #ccc;
		font-size: 10px
	}

	.noUi-marker {
		position: absolute;
		background: #CCC
	}

	.noUi-marker-sub {
		background: #AAA
	}

	.noUi-marker-large {
		background: #AAA
	}

	.noUi-pips-horizontal {
		padding: 10px 0;
		height: 80px;
		top: 100%;
		left: 0;
		width: 100%
	}

	.noUi-value-horizontal {
		-webkit-transform: translate(-50%, 50%);
		transform: translate(-50%, 50%)
	}

	.noUi-marker-horizontal.noUi-marker {
		margin-left: -1px;
		width: 2px;
		height: 5px
	}

	.noUi-marker-horizontal.noUi-marker-sub {
		height: 10px
	}

	.noUi-marker-horizontal.noUi-marker-large {
		height: 15px
	}

	.noUi-pips-vertical {
		padding: 0 10px;
		height: 100%;
		top: 0;
		left: 100%
	}

	.noUi-value-vertical {
		-webkit-transform: translate(0, -50%);
		transform: translate(0, -50%);
		padding-left: 25px
	}

	.noUi-marker-vertical.noUi-marker {
		width: 5px;
		height: 2px;
		margin-top: -1px
	}

	.noUi-marker-vertical.noUi-marker-sub {
		width: 10px
	}

	.noUi-marker-vertical.noUi-marker-large {
		width: 15px
	}

	.noUi-tooltip {
		display: block;
		position: absolute;
		border: 1px solid #D9D9D9;
		border-radius: 3px;
		background: #1f2b3a;
		color: #fff;
		padding: .25rem .75rem;
		text-align: center;
		white-space: nowrap;
		font-size: 13px;
		opacity: 0;
		transition: all .3s ease
	}

	.noUi-handle:hover .noUi-tooltip {
		opacity: .9
	}

	.noUi-horizontal .noUi-tooltip {
		-webkit-transform: translate(-50%, 0);
		transform: translate(-50%, 0);
		left: 50%;
		bottom: 120%
	}

	.noUi-vertical .noUi-tooltip {
		-webkit-transform: translate(0, -50%);
		transform: translate(0, -50%);
		top: 50%;
		right: 120%
	}

	#toast-container {
		position: fixed;
		z-index: 999999;
		pointer-events: none;
		padding: 1.25rem;
		width: 100%
	}

	#toast-container[class*="-center"] .toastr {
		margin-left: auto;
		margin-right: auto
	}

	#toast-container[class*="-left"] .toastr {
		margin-right: auto
	}

	#toast-container[class*="-right"] .toastr {
		margin-left: auto
	}

	#toast-container[class*="-full"] .toastr {
		width: 100%
	}

	#toast-container[class*="toast-top"] {
		top: 0
	}

	#toast-container[class*="toast-bottom"] {
		bottom: 0
	}

	.toastr {
		position: relative;
		pointer-events: auto;
		background: #fff;
		box-shadow: 0 3px 12px 1px rgba(43, 55, 72, 0.15);
		border-radius: 4px;
		opacity: 1;
		border-left: 4px solid transparent;
		padding: 1.25rem 4.5rem 1.25rem 1.25rem;
		width: 430px;
		max-width: 100%;
		font-size: 0.875rem;
		line-height: 1.3rem
	}

	.is-dark .toastr {
		background: #101924;
		color: #fff
	}

	.toastr:not(:last-child) {
		margin-bottom: 0.75rem
	}

	.toastr.toast-success {
		border-color: #1ee0ac
	}

	.toastr.toast-success .icon {
		color: #1ee0ac
	}

	.toastr.toast-error {
		border-color: #e85347
	}

	.toastr.toast-error .icon {
		color: #e85347
	}

	.toastr.toast-info {
		border-color: #09c2de
	}

	.toastr.toast-info .icon {
		color: #09c2de
	}

	.toastr.toast-warning {
		border-color: #f4bd0e
	}

	.toastr.toast-warning .icon {
		color: #f4bd0e
	}

	.toastr-icon {
		position: absolute;
		left: 1.25rem;
		top: 50%;
		transform: translateY(-50%);
		font-size: 24px;
		line-height: 1
	}

	.toastr-icon+.toastr-text {
		padding-left: 2.35rem
	}

	.toastr h4,
	.toastr h5,
	.toastr h6 {
		margin-bottom: 0.35rem;
		font-size: 1rem
	}

	.is-dark .toastr h4,
	.is-dark .toastr h5,
	.is-dark .toastr h6 {
		color: #fff
	}

	.toast-close-button {
		position: absolute;
		right: 12px;
		top: 50%;
		transform: translateY(-50%);
		display: inline-block;
		height: 32px;
		width: 32px;
		text-indent: -9999px;
		cursor: pointer
	}

	.toast-close-button:after {
		position: absolute;
		top: 0;
		left: 0;
		text-indent: 0;
		color: #8094ae;
		font-family: "Nioicon";
		content: "";
		font-size: 18px;
		line-height: 32px;
		width: 100%;
		text-align: center
	}

	.is-dark .toast-close-button:after {
		color: #dbdfea
	}

	.toast-progress {
		position: absolute;
		left: 0;
		bottom: 0;
		height: 4px;
		background-color: #000000;
		opacity: 0.4;
		-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
		filter: alpha(opacity=40)
	}

	.toast-title {
		font-weight: bold
	}

	.toast-message {
		word-wrap: break-word
	}

	.toast-message a,
	.toast-message label {
		color: #526484
	}

	.toast-message a:hover {
		color: #CCCCCC;
		text-decoration: none
	}

	.swal2-popup.swal2-toast {
		flex-direction: row;
		align-items: center;
		width: auto;
		padding: .625em;
		overflow-y: hidden;
		background: #fff;
		box-shadow: 0 0 0.625em #d9d9d9
	}

	.swal2-popup.swal2-toast .swal2-header {
		flex-direction: row
	}

	.swal2-popup.swal2-toast .swal2-title {
		flex-grow: 1;
		justify-content: flex-start;
		margin: 0 0.6em;
		font-size: 1em
	}

	.swal2-popup.swal2-toast .swal2-footer {
		margin: 0.5em 0 0;
		padding: 0.5em 0 0;
		font-size: .8em
	}

	.swal2-popup.swal2-toast .swal2-close {
		position: static;
		width: .8em;
		height: .8em;
		line-height: .8
	}

	.swal2-popup.swal2-toast .swal2-content {
		justify-content: flex-start;
		font-size: 1em
	}

	.swal2-popup.swal2-toast .swal2-icon {
		width: 2em;
		min-width: 2em;
		height: 2em;
		margin: 0
	}

	.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
		display: flex;
		align-items: center;
		font-size: 1.8em;
		font-weight: bold
	}

	@media all and (-ms-high-contrast: none),
	(-ms-high-contrast: active) {
		.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
			font-size: .25em
		}
	}

	.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
		width: 2em;
		height: 2em
	}

	.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
		top: .875em;
		width: 1.375em
	}

	.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
		left: .3125em
	}

	.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
		right: .3125em
	}

	.swal2-popup.swal2-toast .swal2-actions {
		flex-basis: auto !important;
		width: auto;
		height: auto;
		margin: 0 .3125em
	}

	.swal2-popup.swal2-toast .swal2-actions .btn,
	.swal2-popup.swal2-toast .swal2-actions .dual-listbox .dual-listbox__button,
	.dual-listbox .swal2-popup.swal2-toast .swal2-actions .dual-listbox__button {
		margin: 0 .5em
	}

	.swal2-popup.swal2-toast .swal2-styled {
		margin: 0 .5em;
		padding: .3125em .625em;
		font-size: 1em
	}

	.swal2-popup.swal2-toast .swal2-styled:focus {
		box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(101, 118, 255, 0.4)
	}

	.swal2-popup.swal2-toast .swal2-success {
		border-color: #1ee0ac
	}

	.swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
		position: absolute;
		width: 1.6em;
		height: 3em;
		transform: rotate(45deg);
		border-radius: 50%
	}

	.swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
		top: -.8em;
		left: -.5em;
		border-radius: 4em 0 0 4em;
		transform: rotate(-45deg);
		transform-origin: 2em 2em
	}

	.swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
		top: -.25em;
		left: .9375em;
		border-radius: 0 4em 4em 0;
		transform-origin: 0 1.5em
	}

	.swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
		width: 2em;
		height: 2em
	}

	.swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
		top: 0;
		left: .4375em;
		width: .4375em;
		height: 2.6875em
	}

	.swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
		height: .3125em
	}

	.swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
		top: 1.125em;
		left: .1875em;
		width: .75em
	}

	.swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
		top: .9375em;
		right: .1875em;
		width: 1.375em
	}

	.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
		animation: swal2-toast-animate-success-line-tip .75s
	}

	.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
		animation: swal2-toast-animate-success-line-long .75s
	}

	.swal2-popup.swal2-toast.swal2-show {
		animation: swal2-toast-show 0.5s
	}

	.swal2-popup.swal2-toast.swal2-hide {
		animation: swal2-toast-hide 0.1s forwards
	}

	.swal2-container {
		display: flex;
		position: fixed;
		z-index: 1060;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		flex-direction: row;
		align-items: center;
		justify-content: center;
		padding: .625em;
		overflow-x: hidden;
		transition: background-color 0.1s;
		-webkit-overflow-scrolling: touch
	}

	.swal2-container.swal2-backdrop-show {
		background: rgba(28, 43, 70, 0.4)
	}

	.swal2-container.swal2-backdrop-hide {
		background: transparent !important
	}

	.swal2-container.swal2-top {
		align-items: flex-start
	}

	.swal2-container.swal2-top-start,
	.swal2-container.swal2-top-left {
		align-items: flex-start;
		justify-content: flex-start
	}

	.swal2-container.swal2-top-end,
	.swal2-container.swal2-top-right {
		align-items: flex-start;
		justify-content: flex-end
	}

	.swal2-container.swal2-center {
		align-items: center
	}

	.swal2-container.swal2-center-start,
	.swal2-container.swal2-center-left {
		align-items: center;
		justify-content: flex-start
	}

	.swal2-container.swal2-center-end,
	.swal2-container.swal2-center-right {
		align-items: center;
		justify-content: flex-end
	}

	.swal2-container.swal2-bottom {
		align-items: flex-end
	}

	.swal2-container.swal2-bottom-start,
	.swal2-container.swal2-bottom-left {
		align-items: flex-end;
		justify-content: flex-start
	}

	.swal2-container.swal2-bottom-end,
	.swal2-container.swal2-bottom-right {
		align-items: flex-end;
		justify-content: flex-end
	}

	.swal2-container.swal2-bottom>:first-child,
	.swal2-container.swal2-bottom-start>:first-child,
	.swal2-container.swal2-bottom-left>:first-child,
	.swal2-container.swal2-bottom-end>:first-child,
	.swal2-container.swal2-bottom-right>:first-child {
		margin-top: auto
	}

	.swal2-container.swal2-grow-fullscreen>.swal2-modal {
		display: flex !important;
		flex: 1;
		align-self: stretch;
		justify-content: center
	}

	.swal2-container.swal2-grow-row>.swal2-modal {
		display: flex !important;
		flex: 1;
		align-content: center;
		justify-content: center
	}

	.swal2-container.swal2-grow-column {
		flex: 1;
		flex-direction: column
	}

	.swal2-container.swal2-grow-column.swal2-top,
	.swal2-container.swal2-grow-column.swal2-center,
	.swal2-container.swal2-grow-column.swal2-bottom {
		align-items: center
	}

	.swal2-container.swal2-grow-column.swal2-top-start,
	.swal2-container.swal2-grow-column.swal2-center-start,
	.swal2-container.swal2-grow-column.swal2-bottom-start,
	.swal2-container.swal2-grow-column.swal2-top-left,
	.swal2-container.swal2-grow-column.swal2-center-left,
	.swal2-container.swal2-grow-column.swal2-bottom-left {
		align-items: flex-start
	}

	.swal2-container.swal2-grow-column.swal2-top-end,
	.swal2-container.swal2-grow-column.swal2-center-end,
	.swal2-container.swal2-grow-column.swal2-bottom-end,
	.swal2-container.swal2-grow-column.swal2-top-right,
	.swal2-container.swal2-grow-column.swal2-center-right,
	.swal2-container.swal2-grow-column.swal2-bottom-right {
		align-items: flex-end
	}

	.swal2-container.swal2-grow-column>.swal2-modal {
		display: flex !important;
		flex: 1;
		align-content: center;
		justify-content: center
	}

	.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
		margin: auto
	}

	@media all and (-ms-high-contrast: none),
	(-ms-high-contrast: active) {
		.swal2-container .swal2-modal {
			margin: 0 !important
		}
	}

	.swal2-popup {
		display: none;
		position: relative;
		box-sizing: border-box;
		flex-direction: column;
		justify-content: center;
		width: 480px;
		max-width: 100%;
		padding: 2.75rem 2.5rem;
		border: none;
		border-radius: 4px;
		background: #fff;
		font-family: inherit;
		font-size: 1rem
	}

	.swal2-popup:focus {
		outline: none
	}

	.swal2-popup.swal2-loading {
		overflow-y: hidden
	}

	.swal2-header {
		display: flex;
		flex-direction: column;
		align-items: center
	}

	.swal2-title {
		position: relative;
		max-width: 100%;
		margin: 0 0 0.4em;
		padding: 0;
		color: #364a63;
		font-size: 1.5rem;
		font-weight: 700;
		text-align: center;
		text-transform: none;
		word-wrap: break-word
	}

	.swal2-html-container {
		margin-bottom: 1rem
	}

	.swal2-actions {
		display: flex;
		z-index: 1;
		flex-wrap: wrap;
		align-items: center;
		justify-content: center;
		width: 100%;
		margin: 1.5rem auto 0
	}

	.swal2-actions .btn,
	.swal2-actions .dual-listbox .dual-listbox__button,
	.dual-listbox .swal2-actions .dual-listbox__button {
		margin: 0 .75rem
	}

	.swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
		opacity: .4
	}

	.swal2-actions:not(.swal2-loading) .swal2-styled:hover {
		background-image: linear-gradient(rgba(31, 43, 58, 0.1), rgba(31, 43, 58, 0.1))
	}

	.swal2-actions:not(.swal2-loading) .swal2-styled:active {
		background-image: linear-gradient(rgba(31, 43, 58, 0.2), rgba(31, 43, 58, 0.2))
	}

	.swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
		box-sizing: border-box;
		width: 2.5em;
		height: 2.5em;
		margin: .46875em;
		padding: 0;
		animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
		border: .25em solid transparent;
		border-radius: 100%;
		border-color: transparent;
		background-color: transparent !important;
		color: transparent;
		cursor: default;
		user-select: none
	}

	.swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
		margin-right: 30px;
		margin-left: 30px
	}

	.swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
		content: '';
		display: inline-block;
		width: 15px;
		height: 15px;
		animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
		border: 3px solid #b4c4d7;
		border-radius: 50%;
		margin-left: 5px;
		border-right-color: transparent;
		box-shadow: 1px 1px 1px #fff
	}

	.swal2-styled {
		margin: 0 .75rem;
		box-shadow: none;
		padding: 0.6875rem 1.25rem;
		font-size: 0.9375rem;
		line-height: 1.25rem;
		border-radius: 5px;
		min-width: 90px
	}

	.swal2-loading .swal2-styled {
		min-width: 0
	}

	.swal2-styled:not([disabled]) {
		cursor: pointer
	}

	.swal2-styled.swal2-confirm {
		border: 0;
		border-radius: .25em;
		background: initial;
		background-color: #1ee0ac;
		color: #fff
	}

	.swal2-styled.swal2-confirm:focus {
		outline: none
	}

	.swal2-styled.swal2-cancel {
		border: 0;
		border-radius: .25em;
		background: initial;
		background-color: #e85347;
		color: #fff
	}

	.swal2-styled.swal2-cancel:focus {
		outline: none
	}

	.swal2-styled::-moz-focus-inner {
		border: 0
	}

	.swal2-footer {
		justify-content: center;
		margin: 1.25em 0 0;
		padding: 1em 0 0;
		border-top: 1px solid #eee;
		color: #5a7ca7;
		font-size: 1em
	}

	.swal2-timer-progress-bar {
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		height: .25em;
		background: rgba(31, 43, 58, 0.2)
	}

	.swal2-image {
		max-width: 100%;
		margin: 0 auto 1.5rem
	}

	.swal2-close {
		position: absolute;
		z-index: 2;
		top: 0;
		right: 0;
		justify-content: center;
		width: 1.2em;
		height: 1.2em;
		padding: 0;
		overflow: hidden;
		transition: color 0.1s ease-out;
		border: none;
		border-radius: 0;
		outline: initial;
		background: rgba(0, 0, 0, 0);
		color: #f7f8fa;
		font-family: serif;
		font-size: 2.5em;
		line-height: 1.2;
		cursor: pointer
	}

	.swal2-close:hover {
		transform: none;
		background: rgba(0, 0, 0, 0);
		color: #e85347
	}

	.swal2-close::-moz-focus-inner {
		border: 0
	}

	.swal2-content {
		z-index: 1;
		justify-content: center;
		margin: 0;
		padding: 0;
		color: #8094ae;
		font-size: .875rem;
		font-weight: normal;
		line-height: normal;
		text-align: center;
		word-wrap: break-word
	}

	.swal2-input,
	.swal2-file,
	.swal2-textarea,
	.swal2-select,
	.swal2-radio,
	.swal2-checkbox {
		margin: 1rem auto
	}

	.swal2-input,
	.swal2-file,
	.swal2-textarea {
		box-sizing: border-box;
		width: 100%;
		transition: border-color 0.3s, box-shadow 0.3s;
		border: 1px solid #dbdfea;
		border-radius: 4px;
		background: inherit;
		box-shadow: none;
		color: inherit;
		font-size: .875rem
	}

	.swal2-input.swal2-inputerror,
	.swal2-file.swal2-inputerror,
	.swal2-textarea.swal2-inputerror {
		border-color: #e85347 !important;
		box-shadow: 0 0 2px #e85347 !important
	}

	.swal2-input:focus,
	.swal2-file:focus,
	.swal2-textarea:focus {
		border: 1px solid #6576ff;
		outline: none;
		box-shadow: 0 0 0 3px rgba(101, 118, 255, 0.1)
	}

	.swal2-input::placeholder,
	.swal2-file::placeholder,
	.swal2-textarea::placeholder {
		color: #f7f8fa
	}

	.swal2-range {
		margin: 1rem auto;
		background: #fff
	}

	.swal2-range input {
		width: 80%
	}

	.swal2-range output {
		width: 20%;
		color: inherit;
		font-weight: 600;
		text-align: center
	}

	.swal2-range input,
	.swal2-range output {
		height: 2.75rem;
		padding: 0;
		font-size: .875rem;
		line-height: 2.75rem
	}

	.swal2-input {
		height: 2.75rem;
		padding: 0 1rem
	}

	.swal2-input[type='number'] {
		max-width: 10em
	}

	.swal2-file {
		background: inherit;
		font-size: .875rem
	}

	.swal2-textarea {
		height: 6.75em;
		padding: .75em
	}

	.swal2-select {
		min-width: 50%;
		max-width: 100%;
		padding: .375em .625em;
		background: inherit;
		color: inherit;
		font-size: .875rem
	}

	.swal2-radio,
	.swal2-checkbox {
		align-items: center;
		justify-content: center;
		background: #fff;
		color: inherit
	}

	.swal2-radio label,
	.swal2-checkbox label {
		margin: 0 .6em;
		font-size: .875rem
	}

	.swal2-radio input,
	.swal2-checkbox input {
		margin: 0 .4em
	}

	.swal2-validation-message {
		display: none;
		align-items: center;
		justify-content: center;
		padding: .625em;
		overflow: hidden;
		background: #fff;
		color: #728fb3;
		font-size: 1em;
		font-weight: 300
	}

	.swal2-validation-message::before {
		content: '!';
		display: inline-block;
		width: 1.5em;
		min-width: 1.5em;
		height: 1.5em;
		margin: 0 .625em;
		border-radius: 50%;
		background-color: #e85347;
		color: #fff;
		font-weight: 600;
		line-height: 1.5em;
		text-align: center
	}

	.swal2-icon {
		position: relative;
		box-sizing: content-box;
		justify-content: center;
		width: 5em;
		height: 5em;
		margin: -0.5rem auto 1.5rem;
		border: .25em solid transparent;
		border-radius: 50%;
		font-family: inherit;
		line-height: 5em;
		cursor: default;
		user-select: none;
		transform: scale(0.8)
	}

	.swal2-icon .swal2-icon-content {
		display: flex;
		align-items: center;
		font-size: 3.75em
	}

	.swal2-icon.swal2-error {
		border-color: #e85347;
		color: #e85347
	}

	.swal2-icon.swal2-error .swal2-x-mark {
		position: relative;
		flex-grow: 1
	}

	.swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
		display: block;
		position: absolute;
		top: 2.3125em;
		width: 2.9375em;
		height: .3125em;
		border-radius: .125em;
		background-color: #e85347
	}

	.swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
		left: 1.0625em;
		transform: rotate(45deg)
	}

	.swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
		right: 1em;
		transform: rotate(-45deg)
	}

	.swal2-icon.swal2-error.swal2-icon-show {
		animation: swal2-animate-error-icon .5s
	}

	.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
		animation: swal2-animate-error-x-mark .5s
	}

	.swal2-icon.swal2-warning {
		border-color: #f6c630;
		color: #f4bd0e
	}

	.swal2-icon.swal2-info {
		border-color: #55e3f8;
		color: #09c2de
	}

	.swal2-icon.swal2-question {
		border-color: #8798b5;
		color: #526484
	}

	.swal2-icon.swal2-success {
		border-color: #1ee0ac;
		color: #1ee0ac
	}

	.swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
		position: absolute;
		width: 3.75em;
		height: 7.5em;
		transform: rotate(45deg);
		border-radius: 50%
	}

	.swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
		top: -.4375em;
		left: -2.0635em;
		transform: rotate(-45deg);
		transform-origin: 3.75em 3.75em;
		border-radius: 7.5em 0 0 7.5em
	}

	.swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
		top: -.6875em;
		left: 1.875em;
		transform: rotate(-45deg);
		transform-origin: 0 3.75em;
		border-radius: 0 7.5em 7.5em 0
	}

	.swal2-icon.swal2-success .swal2-success-ring {
		position: absolute;
		z-index: 2;
		top: -.25em;
		left: -.25em;
		box-sizing: content-box;
		width: 100%;
		height: 100%;
		border: 0.25em solid rgba(30, 224, 172, 0.3);
		border-radius: 50%
	}

	.swal2-icon.swal2-success .swal2-success-fix {
		position: absolute;
		z-index: 1;
		top: .5em;
		left: 1.625em;
		width: .4375em;
		height: 5.625em;
		transform: rotate(-45deg)
	}

	.swal2-icon.swal2-success [class^='swal2-success-line'] {
		display: block;
		position: absolute;
		z-index: 2;
		height: .3125em;
		border-radius: .125em;
		background-color: #1ee0ac
	}

	.swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
		top: 2.875em;
		left: .875em;
		width: 1.5625em;
		transform: rotate(45deg)
	}

	.swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
		top: 2.375em;
		right: .5em;
		width: 2.9375em;
		transform: rotate(-45deg)
	}

	.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
		animation: swal2-animate-success-line-tip .75s
	}

	.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
		animation: swal2-animate-success-line-long .75s
	}

	.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
		animation: swal2-rotate-success-circular-line 4.25s ease-in
	}

	.swal2-progress-steps {
		align-items: center;
		margin: 0 0 1.25em;
		padding: 0;
		background: inherit;
		font-weight: 600
	}

	.swal2-progress-steps li {
		display: inline-block;
		position: relative
	}

	.swal2-progress-steps .swal2-progress-step {
		z-index: 20;
		width: 2em;
		height: 2em;
		border-radius: 2em;
		background: #3085d6;
		color: #fff;
		line-height: 2em;
		text-align: center
	}

	.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
		background: #3085d6
	}

	.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
		background: #add8e6;
		color: #fff
	}

	.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
		background: #add8e6
	}

	.swal2-progress-steps .swal2-progress-step-line {
		z-index: 10;
		width: 2.5em;
		height: .4em;
		margin: 0 -1px;
		background: #3085d6
	}

	[class^='swal2'] {
		-webkit-tap-highlight-color: transparent
	}

	.swal2-show {
		animation: swal2-show 0.3s
	}

	.swal2-hide {
		animation: swal2-hide 0.15s forwards
	}

	.swal2-noanimation {
		transition: none
	}

	.swal2-scrollbar-measure {
		position: absolute;
		top: -9999px;
		width: 50px;
		height: 50px;
		overflow: scroll
	}

	.swal2-rtl .swal2-close {
		right: auto;
		left: 0
	}

	.swal2-rtl .swal2-timer-progress-bar {
		right: 0;
		left: auto
	}

	@supports (-ms-accelerator: true) {
		.swal2-range input {
			width: 100% !important
		}

		.swal2-range output {
			display: none
		}
	}

	@media all and (-ms-high-contrast: none),
	(-ms-high-contrast: active) {
		.swal2-range input {
			width: 100% !important
		}

		.swal2-range output {
			display: none
		}
	}

	@-moz-document url-prefix() {
		.swal2-close:focus {
			outline: 2px solid rgba(101, 118, 255, 0.4)
		}
	}

	@keyframes swal2-toast-show {
		0% {
			transform: translateY(-0.625em) rotateZ(2deg)
		}

		33% {
			transform: translateY(0) rotateZ(-2deg)
		}

		66% {
			transform: translateY(0.3125em) rotateZ(2deg)
		}

		100% {
			transform: translateY(0) rotateZ(0deg)
		}
	}

	@keyframes swal2-toast-hide {
		100% {
			transform: rotateZ(1deg);
			opacity: 0
		}
	}

	@keyframes swal2-toast-animate-success-line-tip {
		0% {
			top: .5625em;
			left: .0625em;
			width: 0
		}

		54% {
			top: .125em;
			left: .125em;
			width: 0
		}

		70% {
			top: .625em;
			left: -.25em;
			width: 1.625em
		}

		84% {
			top: 1.0625em;
			left: .75em;
			width: .5em
		}

		100% {
			top: 1.125em;
			left: .1875em;
			width: .75em
		}
	}

	@keyframes swal2-toast-animate-success-line-long {
		0% {
			top: 1.625em;
			right: 1.375em;
			width: 0
		}

		65% {
			top: 1.25em;
			right: .9375em;
			width: 0
		}

		84% {
			top: .9375em;
			right: 0;
			width: 1.125em
		}

		100% {
			top: .9375em;
			right: .1875em;
			width: 1.375em
		}
	}

	@keyframes swal2-show {
		0% {
			opacity: 0;
			transform: translate(0, 20px)
		}

		40% {
			opacity: 1
		}

		100% {
			transform: translate(0, 0)
		}
	}

	@keyframes swal2-hide {
		0% {
			transform: scale(1);
			opacity: 1
		}

		100% {
			transform: scale(0.7);
			opacity: 0
		}
	}

	@keyframes swal2-animate-success-line-tip {
		0% {
			top: 1.1875em;
			left: .0625em;
			width: 0
		}

		54% {
			top: 1.0625em;
			left: .125em;
			width: 0
		}

		70% {
			top: 2.1875em;
			left: -.375em;
			width: 3.125em
		}

		84% {
			top: 3em;
			left: 1.3125em;
			width: 1.0625em
		}

		100% {
			top: 2.8125em;
			left: .875em;
			width: 1.5625em
		}
	}

	@keyframes swal2-animate-success-line-long {
		0% {
			top: 3.375em;
			right: 2.875em;
			width: 0
		}

		65% {
			top: 3.375em;
			right: 2.875em;
			width: 0
		}

		84% {
			top: 2.1875em;
			right: 0;
			width: 3.4375em
		}

		100% {
			top: 2.375em;
			right: .5em;
			width: 2.9375em
		}
	}

	@keyframes swal2-rotate-success-circular-line {
		0% {
			transform: rotate(-45deg)
		}

		5% {
			transform: rotate(-45deg)
		}

		12% {
			transform: rotate(-405deg)
		}

		100% {
			transform: rotate(-405deg)
		}
	}

	@keyframes swal2-animate-error-x-mark {
		0% {
			margin-top: 1.625em;
			transform: scale(0.4);
			opacity: 0
		}

		50% {
			margin-top: 1.625em;
			transform: scale(0.4);
			opacity: 0
		}

		80% {
			margin-top: -.375em;
			transform: scale(1.15)
		}

		100% {
			margin-top: 0;
			transform: scale(1);
			opacity: 1
		}
	}

	@keyframes swal2-animate-error-icon {
		0% {
			transform: scale(0.8) rotateX(100deg);
			opacity: 0
		}

		100% {
			transform: scale(0.8) rotateX(0deg);
			opacity: 1
		}
	}

	@keyframes swal2-rotate-loading {
		0% {
			transform: rotate(0deg)
		}

		100% {
			transform: rotate(360deg)
		}
	}

	body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
		overflow: hidden
	}

	body.swal2-height-auto {
		height: auto !important
	}

	body.swal2-no-backdrop .swal2-container {
		top: auto;
		right: auto;
		bottom: auto;
		left: auto;
		max-width: calc(100% - .625em * 2);
		background-color: transparent !important
	}

	body.swal2-no-backdrop .swal2-container>.swal2-modal {
		box-shadow: 0 0 10px rgba(28, 43, 70, 0.4)
	}

	body.swal2-no-backdrop .swal2-container.swal2-top {
		top: 0;
		left: 50%;
		transform: translateX(-50%)
	}

	body.swal2-no-backdrop .swal2-container.swal2-top-start,
	body.swal2-no-backdrop .swal2-container.swal2-top-left {
		top: 0;
		left: 0
	}

	body.swal2-no-backdrop .swal2-container.swal2-top-end,
	body.swal2-no-backdrop .swal2-container.swal2-top-right {
		top: 0;
		right: 0
	}

	body.swal2-no-backdrop .swal2-container.swal2-center {
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%)
	}

	body.swal2-no-backdrop .swal2-container.swal2-center-start,
	body.swal2-no-backdrop .swal2-container.swal2-center-left {
		top: 50%;
		left: 0;
		transform: translateY(-50%)
	}

	body.swal2-no-backdrop .swal2-container.swal2-center-end,
	body.swal2-no-backdrop .swal2-container.swal2-center-right {
		top: 50%;
		right: 0;
		transform: translateY(-50%)
	}

	body.swal2-no-backdrop .swal2-container.swal2-bottom {
		bottom: 0;
		left: 50%;
		transform: translateX(-50%)
	}

	body.swal2-no-backdrop .swal2-container.swal2-bottom-start,
	body.swal2-no-backdrop .swal2-container.swal2-bottom-left {
		bottom: 0;
		left: 0
	}

	body.swal2-no-backdrop .swal2-container.swal2-bottom-end,
	body.swal2-no-backdrop .swal2-container.swal2-bottom-right {
		right: 0;
		bottom: 0
	}

	@media print {
		body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
			overflow-y: scroll !important
		}

		body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden='true'] {
			display: none
		}

		body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
			position: static !important
		}
	}

	body.swal2-toast-shown .swal2-container {
		background-color: transparent
	}

	body.swal2-toast-shown .swal2-container.swal2-top {
		top: 0;
		right: auto;
		bottom: auto;
		left: 50%;
		transform: translateX(-50%)
	}

	body.swal2-toast-shown .swal2-container.swal2-top-end,
	body.swal2-toast-shown .swal2-container.swal2-top-right {
		top: 0;
		bottom: auto;
		right: 0;
		left: auto
	}

	body.swal2-toast-shown .swal2-container.swal2-top-start,
	body.swal2-toast-shown .swal2-container.swal2-top-left {
		top: 0;
		bottom: auto;
		left: 0;
		right: auto
	}

	body.swal2-toast-shown .swal2-container.swal2-center-start,
	body.swal2-toast-shown .swal2-container.swal2-center-left {
		top: 50%;
		bottom: auto;
		right: auto;
		left: 0;
		transform: translateY(-50%)
	}

	body.swal2-toast-shown .swal2-container.swal2-center {
		top: 50%;
		right: auto;
		bottom: auto;
		left: 50%;
		transform: translate(-50%, -50%)
	}

	body.swal2-toast-shown .swal2-container.swal2-center-end,
	body.swal2-toast-shown .swal2-container.swal2-center-right {
		top: 50%;
		bottom: auto;
		right: 0;
		left: auto;
		transform: translateY(-50%)
	}

	body.swal2-toast-shown .swal2-container.swal2-bottom-start,
	body.swal2-toast-shown .swal2-container.swal2-bottom-left {
		top: auto;
		bottom: 0;
		right: auto;
		left: 0
	}

	body.swal2-toast-shown .swal2-container.swal2-bottom {
		top: auto;
		right: auto;
		bottom: 0;
		left: 50%;
		transform: translateX(-50%)
	}

	body.swal2-toast-shown .swal2-container.swal2-bottom-end,
	body.swal2-toast-shown .swal2-container.swal2-bottom-right {
		top: auto;
		bottom: 0;
		right: 0;
		left: auto
	}

	body.swal2-toast-column .swal2-toast {
		flex-direction: column;
		align-items: stretch
	}

	body.swal2-toast-column .swal2-toast .swal2-actions {
		flex: 1;
		align-self: stretch;
		height: 2.2em;
		margin-top: .3125em
	}

	body.swal2-toast-column .swal2-toast .swal2-loading {
		justify-content: center
	}

	body.swal2-toast-column .swal2-toast .swal2-input {
		height: 2em;
		margin: .3125em auto;
		font-size: 1em
	}

	body.swal2-toast-column .swal2-toast .swal2-validation-message {
		font-size: 1em
	}

	table.dataTable {
		clear: both;
		max-width: none !important;
		border-collapse: separate !important;
		border-spacing: 0
	}

	table.dataTable td.dataTables_empty,
	table.dataTable th.dataTables_empty {
		text-align: center
	}

	table.dataTable.nowrap th,
	table.dataTable.nowrap td {
		white-space: nowrap
	}

	div.dataTables_wrapper div.dataTables_length label {
		font-weight: normal;
		text-align: left;
		white-space: nowrap
	}

	div.dataTables_wrapper div.dataTables_length select {
		width: auto;
		display: inline-block
	}

	div.dataTables_wrapper div.dataTables_length label {
		display: inline-flex;
		align-items: center
	}

	div.dataTables_wrapper div.dataTables_length span {
		margin-left: .5rem;
		margin-right: .5rem
	}

	div.dataTables_wrapper div.dataTables_filter label {
		font-weight: normal;
		white-space: nowrap
	}

	div.dataTables_wrapper div.dataTables_filter input {
		display: inline-block
	}

	div.dataTables_wrapper div.dataTables_info {
		padding: .5rem 0;
		white-space: nowrap;
		font-size: .75rem
	}

	div.dataTables_wrapper div.dataTables_paginate {
		margin: 0;
		white-space: nowrap;
		text-align: right
	}

	div.dataTables_wrapper div.dataTables_paginate ul.pagination {
		margin: 2px 0;
		justify-content: center
	}

	div.dataTables_wrapper div.dataTables_processing {
		position: absolute;
		top: 50%;
		left: 50%;
		margin-left: -100px;
		width: 200px;
		margin-top: -26px;
		text-align: center;
		padding: 1em 0
	}

	div.dataTables_wrapper label {
		margin-bottom: 0
	}

	table.dataTable thead>tr>th.sorting_asc,
	table.dataTable thead>tr>th.sorting_desc,
	table.dataTable thead>tr>th.sorting,
	table.dataTable thead>tr>td.sorting_asc,
	table.dataTable thead>tr>td.sorting_desc,
	table.dataTable thead>tr>td.sorting {
		padding-right: 30px
	}

	table.dataTable thead>tr>th:active,
	table.dataTable thead>tr>td:active {
		outline: none
	}

	table.dataTable thead .sorting,
	table.dataTable thead .sorting_asc,
	table.dataTable thead .sorting_desc,
	table.dataTable thead .sorting_asc_disabled,
	table.dataTable thead .sorting_desc_disabled {
		cursor: pointer;
		position: relative
	}

	table.dataTable thead .sorting:before,
	table.dataTable thead .sorting:after,
	table.dataTable thead .sorting_asc:before,
	table.dataTable thead .sorting_asc:after,
	table.dataTable thead .sorting_desc:before,
	table.dataTable thead .sorting_desc:after,
	table.dataTable thead .sorting_asc_disabled:before,
	table.dataTable thead .sorting_asc_disabled:after,
	table.dataTable thead .sorting_desc_disabled:before,
	table.dataTable thead .sorting_desc_disabled:after {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		display: block;
		opacity: 0.3
	}

	table.dataTable thead .sorting:before,
	table.dataTable thead .sorting_asc:before,
	table.dataTable thead .sorting_desc:before,
	table.dataTable thead .sorting_asc_disabled:before,
	table.dataTable thead .sorting_desc_disabled:before {
		right: 1em;
		content: "\2191"
	}

	table.dataTable thead .sorting:after,
	table.dataTable thead .sorting_asc:after,
	table.dataTable thead .sorting_desc:after,
	table.dataTable thead .sorting_asc_disabled:after,
	table.dataTable thead .sorting_desc_disabled:after {
		right: 0.5em;
		content: "\2193"
	}

	table.dataTable thead .sorting_asc:before,
	table.dataTable thead .sorting_desc:after {
		opacity: 1
	}

	table.dataTable thead .sorting_asc_disabled:before,
	table.dataTable thead .sorting_desc_disabled:after {
		opacity: 0
	}

	div.dataTables_scrollHead table.dataTable {
		margin-bottom: 0 !important
	}

	div.dataTables_scrollBody table {
		border-top: none;
		margin-top: 0 !important;
		margin-bottom: 0 !important
	}

	div.dataTables_scrollBody table thead .sorting:before,
	div.dataTables_scrollBody table thead .sorting_asc:before,
	div.dataTables_scrollBody table thead .sorting_desc:before,
	div.dataTables_scrollBody table thead .sorting:after,
	div.dataTables_scrollBody table thead .sorting_asc:after,
	div.dataTables_scrollBody table thead .sorting_desc:after {
		display: none
	}

	div.dataTables_scrollBody table tbody tr:first-child th,
	div.dataTables_scrollBody table tbody tr:first-child td {
		border-top: none
	}

	div.dataTables_scrollFoot>.dataTables_scrollFootInner {
		box-sizing: content-box
	}

	div.dataTables_scrollFoot>.dataTables_scrollFootInner>table {
		margin-top: 0 !important;
		border-top: none
	}

	@media screen and (max-width: 767px) {

		div.dataTables_wrapper div.dataTables_info,
		div.dataTables_wrapper div.dataTables_paginate {
			text-align: center
		}
	}

	table.dataTable.table-sm>thead>tr>th {
		padding-right: 20px
	}

	table.dataTable.table-sm .sorting:before,
	table.dataTable.table-sm .sorting_asc:before,
	table.dataTable.table-sm .sorting_desc:before {
		top: 5px;
		right: 0.85em
	}

	table.dataTable.table-sm .sorting:after,
	table.dataTable.table-sm .sorting_asc:after,
	table.dataTable.table-sm .sorting_desc:after {
		top: 5px
	}

	table.table-bordered.dataTable th,
	table.table-bordered.dataTable td {
		border-left-width: 0
	}

	table.table-bordered.dataTable th:last-child,
	table.table-bordered.dataTable th:last-child,
	table.table-bordered.dataTable td:last-child,
	table.table-bordered.dataTable td:last-child {
		border-right-width: 0
	}

	table.table-bordered.dataTable tbody th,
	table.table-bordered.dataTable tbody td {
		border-bottom-width: 0
	}

	div.dataTables_scrollHead table.table-bordered {
		border-bottom-width: 0
	}

	div.table-responsive>div.dataTables_wrapper>div.row {
		margin: 0
	}

	div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:first-child {
		padding-left: 0
	}

	div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:last-child {
		padding-right: 0
	}

	@media (min-width: 768px) {
		div.dataTables_wrapper div.dataTables_paginate ul.pagination {
			justify-content: flex-start
		}
	}

	table.dataTable.dtr-inline.collapsed>tbody>tr:not(.child)>td:first-child,
	table.dataTable.dtr-inline.collapsed>tbody>tr:not(.child)>th:first-child {
		cursor: pointer
	}

	table.dataTable.dtr-inline.collapsed>tbody>tr:not(.child)>td:first-child:before,
	table.dataTable.dtr-inline.collapsed>tbody>tr:not(.child)>th:first-child:before {
		content: "";
		font-family: "Nioicon";
		margin-right: 0.4rem
	}

	table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td:first-child:before,
	table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th:first-child:before {
		content: ""
	}

	@media (max-width: 575px) {
		div.dataTables_wrapper div.dataTables_paginate ul.pagination {
			justify-content: flex-start
		}

		div.dataTables_wrapper div.dataTables_paginate ul.pagination li:not(.previous):not(.next) {
			display: none
		}

		div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-link {
			padding-left: 1rem;
			padding-right: 1rem
		}

		div.dataTables_wrapper div.dataTables_info {
			text-align: right !important
		}
	}

	.dataTable td:focus {
		outline: none
	}

	.datatable-wrap {
		border: 1px solid #e5e9f2;
		border-radius: 4px
	}

	.dtr-details {
		padding-left: 0.25rem
	}

	.dtr-details .dtr-title {
		font-weight: 700;
		margin-right: 0.25rem
	}

	.nk-tb-col-check,
	.nk-tb-col-tools {
		pointer-events: none
	}

	.nk-tb-col-check>*,
	.nk-tb-col-tools>* {
		pointer-events: auto
	}

	.nk-tb-col-check:before,
	.nk-tb-col-check:after,
	.nk-tb-col-tools:before,
	.nk-tb-col-tools:after {
		display: none !important
	}

	.nk-tb-col-check {
		padding-right: .5rem !important
	}

	@keyframes dtb-spinner {
		100% {
			transform: rotate(360deg)
		}
	}

	@-o-keyframes dtb-spinner {
		100% {
			-o-transform: rotate(360deg);
			transform: rotate(360deg)
		}
	}

	@-ms-keyframes dtb-spinner {
		100% {
			-ms-transform: rotate(360deg);
			transform: rotate(360deg)
		}
	}

	@-webkit-keyframes dtb-spinner {
		100% {
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg)
		}
	}

	@-moz-keyframes dtb-spinner {
		100% {
			-moz-transform: rotate(360deg);
			transform: rotate(360deg)
		}
	}

	div.dt-button-info {
		position: fixed;
		top: 50%;
		left: 50%;
		width: 400px;
		margin-top: -100px;
		margin-left: -200px;
		background-color: #f5f6fa;
		box-shadow: 0 0 0 200vh rgba(31, 43, 58, 0.3);
		border-radius: 4px;
		text-align: center;
		z-index: 2020;
		overflow: hidden;
		border: 1px solid #e5e9f2
	}

	div.dt-button-info h2 {
		padding: 2rem;
		margin: 0;
		font-weight: normal;
		border-bottom: 1px solid #e5e9f2;
		background-color: #fff;
		font-size: 1.75rem
	}

	div.dt-button-info>div {
		padding: 1.25rem
	}

	div.dt-button-collection-title {
		text-align: center;
		padding: 0.3em 0 0.5em;
		font-size: 0.9em
	}

	div.dt-button-collection-title:empty {
		display: none
	}

	div.dt-button-collection {
		position: absolute;
		z-index: 1000;
		width: 100%
	}

	div.dt-button-collection div.dropdown-menu {
		display: block;
		z-index: 1001;
		min-width: 100px;
		top: 10px
	}

	.dropdown-position-right div.dt-button-collection div.dropdown-menu {
		right: 0;
		left: auto
	}

	div.dt-button-collection div.dt-button-collection-title {
		background-color: white;
		border: 1px solid rgba(0, 0, 0, 0.15)
	}

	div.dt-button-collection.fixed {
		position: fixed;
		top: 50%;
		left: 50%;
		margin-left: -75px;
		border-radius: 0
	}

	div.dt-button-collection.fixed.two-column {
		margin-left: -200px
	}

	div.dt-button-collection.fixed.three-column {
		margin-left: -225px
	}

	div.dt-button-collection.fixed.four-column {
		margin-left: -300px
	}

	div.dt-button-collection>:last-child {
		display: block !important;
		-webkit-column-gap: 8px;
		-moz-column-gap: 8px;
		-ms-column-gap: 8px;
		-o-column-gap: 8px;
		column-gap: 8px
	}

	div.dt-button-collection>:last-child>* {
		-webkit-column-break-inside: avoid;
		break-inside: avoid
	}

	div.dt-button-collection.two-column {
		width: 400px
	}

	div.dt-button-collection.two-column>:last-child {
		padding-bottom: 1px;
		-webkit-column-count: 2;
		-moz-column-count: 2;
		-ms-column-count: 2;
		-o-column-count: 2;
		column-count: 2
	}

	div.dt-button-collection.three-column {
		width: 450px
	}

	div.dt-button-collection.three-column>:last-child {
		padding-bottom: 1px;
		-webkit-column-count: 3;
		-moz-column-count: 3;
		-ms-column-count: 3;
		-o-column-count: 3;
		column-count: 3
	}

	div.dt-button-collection.four-column {
		width: 600px
	}

	div.dt-button-collection.four-column>:last-child {
		padding-bottom: 1px;
		-webkit-column-count: 4;
		-moz-column-count: 4;
		-ms-column-count: 4;
		-o-column-count: 4;
		column-count: 4
	}

	div.dt-button-collection .dt-button {
		border-radius: 0
	}

	div.dt-button-collection.fixed {
		max-width: none
	}

	div.dt-button-collection.fixed:before,
	div.dt-button-collection.fixed:after {
		display: none
	}

	div.dt-button-background {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 1000;
		background-color: rgba(31, 43, 58, 0.3);
		display: none !important
	}

	@media screen and (max-width: 767px) {
		div.dt-buttons {
			float: none;
			width: 100%;
			text-align: center;
			margin-bottom: 0.5em
		}

		div.dt-buttons a.btn,
		div.dt-buttons .dual-listbox a.dual-listbox__button,
		.dual-listbox div.dt-buttons a.dual-listbox__button {
			float: none
		}
	}

	div.dt-buttons button.btn.processing,
	div.dt-buttons .dual-listbox button.processing.dual-listbox__button,
	.dual-listbox div.dt-buttons button.processing.dual-listbox__button,
	div.dt-buttons div.btn.processing,
	div.dt-buttons .dual-listbox div.processing.dual-listbox__button,
	.dual-listbox div.dt-buttons div.processing.dual-listbox__button,
	div.dt-buttons a.btn.processing,
	div.dt-buttons .dual-listbox a.processing.dual-listbox__button,
	.dual-listbox div.dt-buttons a.processing.dual-listbox__button {
		color: rgba(0, 0, 0, 0.2)
	}

	div.dt-buttons button.btn.processing:after,
	div.dt-buttons .dual-listbox button.processing.dual-listbox__button:after,
	.dual-listbox div.dt-buttons button.processing.dual-listbox__button:after,
	div.dt-buttons div.btn.processing:after,
	div.dt-buttons .dual-listbox div.processing.dual-listbox__button:after,
	.dual-listbox div.dt-buttons div.processing.dual-listbox__button:after,
	div.dt-buttons a.btn.processing:after,
	div.dt-buttons .dual-listbox a.processing.dual-listbox__button:after,
	.dual-listbox div.dt-buttons a.processing.dual-listbox__button:after {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 16px;
		height: 16px;
		margin: -8px 0 0 -8px;
		box-sizing: border-box;
		display: block;
		content: " ";
		border: 2px solid #282828;
		border-radius: 50%;
		border-left-color: transparent;
		border-right-color: transparent;
		animation: dtb-spinner 1500ms infinite linear;
		-o-animation: dtb-spinner 1500ms infinite linear;
		-ms-animation: dtb-spinner 1500ms infinite linear;
		-webkit-animation: dtb-spinner 1500ms infinite linear;
		-moz-animation: dtb-spinner 1500ms infinite linear
	}

	.dt-buttons .btn-secondary span {
		display: none
	}

	.dt-buttons .btn-secondary:before {
		font-size: 1.125rem;
		font-weight: normal;
		font-style: normal;
		width: 2.125rem;
		font-family: "Nioicon"
	}

	.dt-export-title {
		margin-left: 0.5rem;
		margin-right: 0.5rem
	}

	.buttons-copy:before {
		content: ""
	}

	.buttons-pdf:before {
		content: ""
	}

	.buttons-excel:before {
		content: ""
	}

	.buttons-csv:before {
		content: ""
	}

	.buttons-print:before {
		content: ""
	}

	.buttons-colvis:before {
		content: ""
	}

	.buttons-columnVisibility {
		position: relative;
		padding-right: 42px;
		font-size: 12px;
		font-weight: 500;
		color: #526484;
		transition: all .4s
	}

	.buttons-columnVisibility.active:not(:hover) {
		color: #526484;
		background-color: transparent
	}

	.buttons-columnVisibility.active:after {
		content: "";
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		right: 1rem;
		font-family: "Nioicon"
	}

	@media (max-width: 600px) {

		.with-export>.col-5,
		.with-export>.col-7,
		.with-export>.col-sm-4,
		.with-export>.col-sm-8 {
			width: 100% !important;
			flex: 0 0 100%;
			max-width: 100%
		}

		.with-export .datatable-filter .justify-content-end,
		.with-export .datatable-filter .justify-end {
			justify-content: space-between !important
		}

		.with-export .dataTables_filter label {
			display: block
		}

		.with-export .dataTables_filter .form-control,
		.with-export div.dataTables_wrapper div.dataTables_filter input,
		div.dataTables_wrapper .with-export div.dataTables_filter input,
		.with-export .dataTables_filter .dual-listbox .dual-listbox__search,
		.dual-listbox .with-export .dataTables_filter .dual-listbox__search {
			width: 100% !important
		}
	}

	.jqvmap-label {
		position: absolute;
		display: none;
		border-radius: 4px;
		background: rgba(31, 43, 58, 0.9);
		color: #fff;
		padding: .25rem .75rem;
		pointer-events: none;
		font-size: 12px
	}

	.jqvmap-pin {
		pointer-events: none
	}

	.jqvmap-zoomin,
	.jqvmap-zoomout {
		position: absolute;
		left: 10px;
		border-radius: 3px;
		background: rgba(31, 43, 58, 0.9);
		padding: .125rem;
		color: #fff;
		width: 1rem;
		height: 1rem;
		cursor: pointer;
		line-height: .75rem;
		text-align: center
	}

	.jqvmap-zoomin {
		top: 10px
	}

	.jqvmap-zoomout {
		top: 30px
	}

	.jqvmap-region {
		cursor: pointer
	}

	.jqvmap-ajax_response {
		width: 100%;
		height: 500px
	}

	.tagify {
		display: flex;
		align-items: flex-start;
		flex-wrap: wrap;
		border: 1px solid #e5e9f2;
		padding: 3px;
		line-height: 1.1;
		cursor: text;
		outline: none;
		position: relative;
		transition: .1s;
		font-size: 14px
	}

	@keyframes tags--bump {
		30% {
			transform: scale(1.2)
		}
	}

	@keyframes rotateLoader {
		to {
			transform: rotate(1turn)
		}
	}

	@media (max-width: 576px) {
		.tagify {
			padding: 4px;
			font-size: 12px
		}
	}

	.tagify:hover {
		border-color: #dbdfea
	}

	.tagify.tagify--focus {
		transition: 0s;
		border-color: #6576ff
	}

	.tagify[readonly] {
		cursor: default
	}

	.tagify[readonly]>.tagify__input {
		visibility: hidden;
		width: 0;
		margin: 5px 0
	}

	.tagify[readonly] .tagify__tag__removeBtn {
		display: none
	}

	.tagify[readonly] .tagify__tag>div {
		padding: 0.25rem 0.5rem 0.25rem 0.675rem
	}

	.tagify[readonly] .tagify__tag>div::before {
		background: linear-gradient(45deg, #fff 25%, transparent 25%, transparent 50%, #fff 50%, #fff 75%, transparent 75%, transparent) 0/5px 5px;
		box-shadow: none;
		filter: brightness(0.95)
	}

	.tagify--loading .tagify__input::before {
		content: none
	}

	.tagify--loading .tagify__input::after {
		content: '';
		vertical-align: middle;
		margin: -2px 0 -2px .5em;
		opacity: 1;
		width: .7em;
		height: .7em;
		border: 3px solid;
		border-color: #EEE #BBB #888 transparent;
		border-radius: 50%;
		animation: rotateLoader .4s infinite linear
	}

	.tagify--loading .tagify__input:empty::after {
		margin-left: 0
	}

	.tagify+input,
	.tagify+textarea {
		display: none !important
	}

	.tagify__tag {
		display: inline-flex;
		align-items: center;
		margin: 2px;
		position: relative;
		z-index: 1;
		outline: none;
		cursor: default;
		transition: .13s ease-out
	}

	.tagify__tag>div {
		vertical-align: top;
		box-sizing: border-box;
		max-width: 100%;
		padding: 0.25rem 0.5rem 0.25rem 0.675rem;
		color: #526484;
		line-height: inherit;
		border-radius: 15px;
		user-select: none;
		transition: .13s ease-out
	}

	.tagify__tag>div>* {
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		display: inline-block;
		vertical-align: top;
		min-width: var(--tag--min-width);
		max-width: var(--tag--max-width);
		transition: .8s ease, .1s color
	}

	.tagify__tag>div>*[contenteditable] {
		outline: none;
		user-select: text;
		cursor: text;
		margin: -2px;
		padding: 2px;
		max-width: 350px
	}

	.tagify__tag>div::before {
		content: '';
		position: absolute;
		border-radius: inherit;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		z-index: -1;
		pointer-events: none;
		transition: 120ms ease;
		box-shadow: 0 0 0 1.1em #fff inset;
		border: 1px solid #e5e9f2
	}

	.tagify__tag:hover:not([readonly]) div::before {
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		box-shadow: 0 0 0 1.1em #f5f6fa inset
	}

	.tagify__tag.tagify--noAnim>div::before {
		animation: none
	}

	.tagify__tag.tagify--hide {
		width: 0 !important;
		padding-left: 0;
		padding-right: 0;
		margin-left: 0;
		margin-right: 0;
		opacity: 0;
		transform: scale(0);
		transition: .3s;
		pointer-events: none
	}

	.tagify__tag.tagify--mark div::before {
		animation: none
	}

	.tagify__tag.tagify--notAllowed:not(.tagify__tag--editable) div>span {
		opacity: .5
	}

	.tagify__tag.tagify--notAllowed:not(.tagify__tag--editable) div::before {
		box-shadow: 0 0 0 1.1em rgba(114, 128, 146, 0.5) inset !important;
		transition: .2s
	}

	.tagify__tag[readonly] .tagify__tag__removeBtn {
		display: none
	}

	.tagify__tag[readonly]>div::before {
		background: linear-gradient(45deg, #fff 25%, transparent 25%, transparent 50%, #fff 50%, #fff 75%, transparent 75%, transparent) 0/5px 5px;
		box-shadow: none;
		filter: brightness(0.95);
		border-color: none
	}

	.tagify__tag--editable>div {
		color: #526484
	}

	.tagify__tag--editable>div::before {
		box-shadow: 0 0 0 2px #f5f6fa inset !important
	}

	.tagify__tag--editable.tagify--invalid>div::before {
		box-shadow: 0 0 0 2px #728092 inset !important
	}

	.tagify__tag__removeBtn {
		order: 5;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		border-radius: 50px;
		cursor: pointer;
		font: 14px Serif;
		background: none;
		color: #364a63;
		width: 14px;
		height: 14px;
		margin-right: 4.66667px;
		margin-left: -4.66667px;
		transition: .2s ease-out
	}

	.tagify__tag__removeBtn::after {
		position: relative;
		content: "\00D7";
		top: 1px
	}

	.tagify__tag__removeBtn:hover {
		color: white;
		background: #606c7c
	}

	.tagify__tag__removeBtn:hover+div::before {
		transition: .2s
	}

	.tagify:not(.tagify--mix) .tagify__input br {
		display: none
	}

	.tagify:not(.tagify--mix) .tagify__input * {
		display: inline;
		white-space: nowrap
	}

	.tagify__input {
		display: block;
		min-width: 60px;
		margin: 2px;
		padding: 0.25rem 0.5rem 0.25rem 0.675rem;
		line-height: inherit;
		position: relative;
		white-space: pre-line
	}

	.tagify__input::before {
		display: inline-block;
		width: 0
	}

	.tagify__input:empty {
		display: flex
	}

	.tagify__input:empty::before {
		transition: .2s ease-out;
		opacity: .7;
		transform: none;
		width: auto
	}

	.tagify__input:focus {
		outline: none
	}

	.tagify__input:focus::before {
		transition: .2s ease-out;
		opacity: 0;
		transform: translatex(6px)
	}

	@supports (-moz-appearance: none) {
		.tagify__input:focus::before {
			display: none
		}
	}

	.tagify__input:focus:empty::before {
		transition: .2s ease-out;
		opacity: .5;
		transform: none
	}

	@supports (-moz-appearance: none) {
		.tagify__input:focus:empty::before {
			display: inline-block
		}
	}

	.tagify__input::before {
		content: attr(data-placeholder);
		line-height: 1.8;
		position: absolute;
		top: 0;
		z-index: 1;
		color: #526484;
		white-space: nowrap;
		pointer-events: none;
		opacity: 0
	}

	.tagify--mix .tagify__input::before {
		position: static;
		line-height: inherit
	}

	@supports (-moz-appearance: none) {
		.tagify__input::before {
			line-height: inherit;
			position: relative
		}
	}

	.tagify__input::after {
		content: attr(data-suggest);
		display: inline-block;
		white-space: pre;
		color: #526484;
		opacity: .3;
		pointer-events: none;
		max-width: 100px
	}

	.tagify__input .tagify__tag {
		margin: 0
	}

	.tagify__input .tagify__tag>div {
		padding-top: 0;
		padding-bottom: 0
	}

	.tagify--mix {
		line-height: 1.7
	}

	.tagify--mix .tagify__input {
		padding: 5px;
		margin: 0;
		width: 100%;
		height: 100%;
		line-height: inherit
	}

	.tagify--mix .tagify__input::after {
		content: none
	}

	.tagify--select::after {
		content: '>';
		opacity: .5;
		position: absolute;
		top: 50%;
		right: 0;
		bottom: 0;
		font: 16px monospace;
		line-height: 8px;
		height: 8px;
		pointer-events: none;
		transform: translate(-150%, -50%) scaleX(1.2) rotate(90deg);
		transition: .2s ease-in-out
	}

	.tagify--select[aria-expanded=true]::after {
		transform: translate(-150%, -50%) rotate(270deg) scaleY(1.2)
	}

	.tagify--select .tagify__tag {
		position: absolute;
		top: 0;
		right: 1.8em;
		bottom: 0
	}

	.tagify--select .tagify__tag div {
		display: none
	}

	.tagify--select .tagify__input {
		width: 100%
	}

	.tagify--invalid {
		border-color: #728092
	}

	.tagify__dropdown {
		position: absolute;
		z-index: 9999;
		transform: translateY(4px);
		overflow: hidden;
		box-shadow: 0 1px 4px rgba(54, 74, 99, 0.1);
		border-radius: 4px
	}

	.tagify__dropdown[placement="top"] {
		margin-top: 0;
		transform: translateY(-4px);
		box-shadow: 0 -1px 4px rgba(54, 74, 99, 0.1)
	}

	.tagify__dropdown--text {
		box-shadow: 0 0 0 3px rgba(101, 118, 255, 0.1);
		font-size: .9em
	}

	.tagify__dropdown--text .tagify__dropdown__wrapper {
		border-width: 1px
	}

	.tagify__dropdown__wrapper {
		max-height: 300px;
		overflow: hidden;
		background: white;
		border: 1px solid #e5e9f2;
		padding: .25rem;
		border-radius: 4px;
		transition: 0.25s cubic-bezier(0, 1, 0.5, 1)
	}

	.tagify__dropdown__wrapper:hover {
		overflow: auto
	}

	.tagify__dropdown--initial .tagify__dropdown__wrapper {
		max-height: 20px;
		transform: translateY(-1em)
	}

	.tagify__dropdown--initial[placement="top"] .tagify__dropdown__wrapper {
		transform: translateY(2em)
	}

	.tagify__dropdown__item {
		box-sizing: inherit;
		padding: 0.25rem 0.5rem 0.25rem 0.675rem;
		margin: 1px;
		cursor: pointer;
		border-radius: 2px;
		position: relative;
		outline: none
	}

	.tagify__dropdown__item--active {
		background: #6576ff;
		color: white
	}

	.tagify__dropdown__item:active {
		filter: brightness(105%)
	}

	.tagify__dropdown__createTagBtn {
		width: 100%;
		background: #6576ff;
		color: white;
		border: none
	}

	.fc-not-allowed,
	.fc-not-allowed .fc-event {
		cursor: not-allowed
	}

	.fc-unselectable {
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		-webkit-touch-callout: none;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0)
	}

	.fc {
		display: flex;
		flex-direction: column;
		font-size: 1em
	}

	.fc,
	.fc *,
	.fc *:before,
	.fc *:after {
		box-sizing: border-box
	}

	.fc table {
		border-collapse: collapse;
		border-spacing: 0;
		font-size: 1em
	}

	.fc th {
		text-align: center
	}

	.fc th,
	.fc td {
		vertical-align: top;
		padding: 0
	}

	.fc .table-bordered {
		border-radius: 4px
	}

	.fc .table-bordered thead th,
	.fc .table-bordered thead td {
		border-bottom-width: 0
	}

	.fc .table-bordered thead>tr>th,
	.fc .table-bordered thead>tr>td {
		border-bottom-width: 1px
	}

	.fc thead tr:first-child td:first-child,
	.fc thead tr:first-child th:first-child {
		border-radius: 4px 0 0 0
	}

	.fc thead tr:first-child td:last-child,
	.fc thead tr:first-child th:last-child {
		border-radius: 0 4px 0 0
	}

	.fc tbody tr:last-child td:first-child,
	.fc tbody tr:last-child th:first-child {
		border-radius: 0 0 0 4px
	}

	.fc tbody tr:last-child td:last-child,
	.fc tbody tr:last-child th:last-child {
		border-radius: 0 0 4px 0
	}

	.fc a[data-navlink] {
		cursor: pointer
	}

	.fc a[data-navlink]:hover {
		text-decoration: underline
	}

	.fc-direction-ltr {
		direction: ltr;
		text-align: left
	}

	.fc-direction-rtl {
		direction: rtl;
		text-align: right
	}

	.fc-theme-standard td,
	.fc-theme-standard th {
		border: 1px solid #ddd;
		border: 1px solid var(--fc-border-color, #ddd)
	}

	.fc-liquid-hack td,
	.fc-liquid-hack th {
		position: relative
	}

	@font-face {
		font-family: 'fcicons';
		src: url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SBfAAAAC8AAAAYGNtYXAXVtKNAAABHAAAAFRnYXNwAAAAEAAAAXAAAAAIZ2x5ZgYydxIAAAF4AAAFNGhlYWQUJ7cIAAAGrAAAADZoaGVhB20DzAAABuQAAAAkaG10eCIABhQAAAcIAAAALGxvY2ED4AU6AAAHNAAAABhtYXhwAA8AjAAAB0wAAAAgbmFtZXsr690AAAdsAAABhnBvc3QAAwAAAAAI9AAAACAAAwPAAZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpBgPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAOAAAAAoACAACAAIAAQAg6Qb//f//AAAAAAAg6QD//f//AAH/4xcEAAMAAQAAAAAAAAAAAAAAAQAB//8ADwABAAAAAAAAAAAAAgAANzkBAAAAAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAWIAjQKeAskAEwAAJSc3NjQnJiIHAQYUFwEWMjc2NCcCnuLiDQ0MJAz/AA0NAQAMJAwNDcni4gwjDQwM/wANIwz/AA0NDCMNAAAAAQFiAI0CngLJABMAACUBNjQnASYiBwYUHwEHBhQXFjI3AZ4BAA0N/wAMJAwNDeLiDQ0MJAyNAQAMIw0BAAwMDSMM4uINIwwNDQAAAAIA4gC3Ax4CngATACcAACUnNzY0JyYiDwEGFB8BFjI3NjQnISc3NjQnJiIPAQYUHwEWMjc2NCcB87e3DQ0MIw3VDQ3VDSMMDQ0BK7e3DQ0MJAzVDQ3VDCQMDQ3zuLcMJAwNDdUNIwzWDAwNIwy4twwkDA0N1Q0jDNYMDA0jDAAAAgDiALcDHgKeABMAJwAAJTc2NC8BJiIHBhQfAQcGFBcWMjchNzY0LwEmIgcGFB8BBwYUFxYyNwJJ1Q0N1Q0jDA0Nt7cNDQwjDf7V1Q0N1QwkDA0Nt7cNDQwkDLfWDCMN1Q0NDCQMt7gMIw0MDNYMIw3VDQ0MJAy3uAwjDQwMAAADAFUAAAOrA1UAMwBoAHcAABMiBgcOAQcOAQcOARURFBYXHgEXHgEXHgEzITI2Nz4BNz4BNz4BNRE0JicuAScuAScuASMFITIWFx4BFx4BFx4BFREUBgcOAQcOAQcOASMhIiYnLgEnLgEnLgE1ETQ2Nz4BNz4BNz4BMxMhMjY1NCYjISIGFRQWM9UNGAwLFQkJDgUFBQUFBQ4JCRULDBgNAlYNGAwLFQkJDgUFBQUFBQ4JCRULDBgN/aoCVgQIBAQHAwMFAQIBAQIBBQMDBwQECAT9qgQIBAQHAwMFAQIBAQIBBQMDBwQECASAAVYRGRkR/qoRGRkRA1UFBAUOCQkVDAsZDf2rDRkLDBUJCA4FBQUFBQUOCQgVDAsZDQJVDRkLDBUJCQ4FBAVVAgECBQMCBwQECAX9qwQJAwQHAwMFAQICAgIBBQMDBwQDCQQCVQUIBAQHAgMFAgEC/oAZEhEZGRESGQAAAAADAFUAAAOrA1UAMwBoAIkAABMiBgcOAQcOAQcOARURFBYXHgEXHgEXHgEzITI2Nz4BNz4BNz4BNRE0JicuAScuAScuASMFITIWFx4BFx4BFx4BFREUBgcOAQcOAQcOASMhIiYnLgEnLgEnLgE1ETQ2Nz4BNz4BNz4BMxMzFRQWMzI2PQEzMjY1NCYrATU0JiMiBh0BIyIGFRQWM9UNGAwLFQkJDgUFBQUFBQ4JCRULDBgNAlYNGAwLFQkJDgUFBQUFBQ4JCRULDBgN/aoCVgQIBAQHAwMFAQIBAQIBBQMDBwQECAT9qgQIBAQHAwMFAQIBAQIBBQMDBwQECASAgBkSEhmAERkZEYAZEhIZgBEZGREDVQUEBQ4JCRUMCxkN/asNGQsMFQkIDgUFBQUFBQ4JCBUMCxkNAlUNGQsMFQkJDgUEBVUCAQIFAwIHBAQIBf2rBAkDBAcDAwUBAgICAgEFAwMHBAMJBAJVBQgEBAcCAwUCAQL+gIASGRkSgBkSERmAEhkZEoAZERIZAAABAOIAjQMeAskAIAAAExcHBhQXFjI/ARcWMjc2NC8BNzY0JyYiDwEnJiIHBhQX4uLiDQ0MJAzi4gwkDA0N4uINDQwkDOLiDCQMDQ0CjeLiDSMMDQ3h4Q0NDCMN4uIMIw0MDOLiDAwNIwwAAAABAAAAAQAAa5n0y18PPPUACwQAAAAAANivOVsAAAAA2K85WwAAAAADqwNVAAAACAACAAAAAAAAAAEAAAPA/8AAAAQAAAAAAAOrAAEAAAAAAAAAAAAAAAAAAAALBAAAAAAAAAAAAAAAAgAAAAQAAWIEAAFiBAAA4gQAAOIEAABVBAAAVQQAAOIAAAAAAAoAFAAeAEQAagCqAOoBngJkApoAAQAAAAsAigADAAAAAAACAAAAAAAAAAAAAAAAAAAAAAAAAA4ArgABAAAAAAABAAcAAAABAAAAAAACAAcAYAABAAAAAAADAAcANgABAAAAAAAEAAcAdQABAAAAAAAFAAsAFQABAAAAAAAGAAcASwABAAAAAAAKABoAigADAAEECQABAA4ABwADAAEECQACAA4AZwADAAEECQADAA4APQADAAEECQAEAA4AfAADAAEECQAFABYAIAADAAEECQAGAA4AUgADAAEECQAKADQApGZjaWNvbnMAZgBjAGkAYwBvAG4Ac1ZlcnNpb24gMS4wAFYAZQByAHMAaQBvAG4AIAAxAC4AMGZjaWNvbnMAZgBjAGkAYwBvAG4Ac2ZjaWNvbnMAZgBjAGkAYwBvAG4Ac1JlZ3VsYXIAUgBlAGcAdQBsAGEAcmZjaWNvbnMAZgBjAGkAYwBvAG4Ac0ZvbnQgZ2VuZXJhdGVkIGJ5IEljb01vb24uAEYAbwBuAHQAIABnAGUAbgBlAHIAYQB0AGUAZAAgAGIAeQAgAEkAYwBvAE0AbwBvAG4ALgAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=") format("truetype");
		font-weight: normal;
		font-style: normal
	}

	.fc-icon,
	.fa {
		display: inline-block;
		width: 1em;
		height: 1em;
		text-align: center;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		font-family: 'fcicons' !important;
		speak: none;
		font-style: normal;
		font-weight: normal;
		font-variant: normal;
		text-transform: none;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale
	}

	.fc-icon-chevron-left:before,
	.fa-chevron-left:before {
		content: "\e900"
	}

	.fc-icon-chevron-right:before,
	.fa-chevron-right:before {
		content: "\e901"
	}

	.fc-icon-chevrons-left:before,
	.fa-chevrons-left:before {
		content: "\e902"
	}

	.fc-icon-chevrons-right:before,
	.fa-chevrons-right:before {
		content: "\e903"
	}

	.fc-icon-minus-square:before,
	.fa-minus-square:before {
		content: "\e904"
	}

	.fc-icon-plus-square:before,
	.fa-plus-square:before {
		content: "\e905"
	}

	.fc-icon-x:before,
	.fa-times:before {
		content: "\e906"
	}

	.fc .fc-button {
		border-radius: 0;
		overflow: visible;
		text-transform: none;
		margin: 0;
		font-family: inherit;
		font-size: inherit;
		line-height: inherit
	}

	.fc .fc-button:focus {
		outline: 1px dotted;
		outline: 5px auto -webkit-focus-ring-color
	}

	.fc .fc-button {
		-webkit-appearance: button
	}

	.fc .fc-button:not(:disabled) {
		cursor: pointer
	}

	.fc .fc-button::-moz-focus-inner {
		padding: 0;
		border-style: none
	}

	.fc .fc-button {
		display: inline-block;
		font-weight: 400;
		text-align: center;
		vertical-align: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		background-color: transparent;
		border: 1px solid transparent;
		padding: 0.4em 0.65em;
		font-size: 1em;
		line-height: 1.5;
		border-radius: 0.25em
	}

	.fc .fc-button:hover {
		text-decoration: none
	}

	.fc .fc-button:focus {
		outline: 0;
		box-shadow: 0 0 0 0.2rem rgba(44, 62, 80, 0.25)
	}

	.fc .fc-button:disabled {
		opacity: 0.65
	}

	.fc .fc-button-primary {
		color: #fff;
		color: var(--fc-button-text-color, #fff);
		background-color: #2C3E50;
		background-color: var(--fc-button-bg-color, #2C3E50);
		border-color: #2C3E50;
		border-color: var(--fc-button-border-color, #2C3E50)
	}

	.fc .fc-button-primary:hover {
		color: #fff;
		color: var(--fc-button-text-color, #fff);
		background-color: #1e2b37;
		background-color: var(--fc-button-hover-bg-color, #1e2b37);
		border-color: #1a252f;
		border-color: var(--fc-button-hover-border-color, #1a252f)
	}

	.fc .fc-button-primary:disabled {
		color: #fff;
		color: var(--fc-button-text-color, #fff);
		background-color: #2C3E50;
		background-color: var(--fc-button-bg-color, #2C3E50);
		border-color: #2C3E50;
		border-color: var(--fc-button-border-color, #2C3E50)
	}

	.fc .fc-button-primary:focus {
		box-shadow: 0 0 0 0.2rem rgba(76, 91, 106, 0.5)
	}

	.fc .fc-button-primary:not(:disabled):active,
	.fc .fc-button-primary:not(:disabled).fc-button-active {
		color: #fff;
		color: var(--fc-button-text-color, #fff);
		background-color: #1a252f;
		background-color: var(--fc-button-active-bg-color, #1a252f);
		border-color: #151e27;
		border-color: var(--fc-button-active-border-color, #151e27)
	}

	.fc .fc-button-primary:not(:disabled):active:focus,
	.fc .fc-button-primary:not(:disabled).fc-button-active:focus {
		box-shadow: 0 0 0 0.2rem rgba(76, 91, 106, 0.5)
	}

	.fc .fc-button .fc-icon {
		vertical-align: middle;
		font-size: 1.5em
	}

	.fc .fc-button-group {
		position: relative;
		display: inline-flex;
		vertical-align: middle
	}

	.fc .fc-button-group>.fc-button {
		position: relative;
		flex: 1 1 auto
	}

	.fc .fc-button-group>.fc-button:hover {
		z-index: 1
	}

	.fc .fc-button-group>.fc-button:focus,
	.fc .fc-button-group>.fc-button:active,
	.fc .fc-button-group>.fc-button.fc-button-active {
		z-index: 1
	}

	.fc-direction-ltr .fc-button-group>.fc-button:not(:first-child) {
		margin-left: -1px;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.fc-direction-ltr .fc-button-group>.fc-button:not(:last-child) {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.fc-direction-rtl .fc-button-group>.fc-button:not(:first-child) {
		margin-right: -1px;
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.fc-direction-rtl .fc-button-group>.fc-button:not(:last-child) {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.fc .fc-toolbar {
		display: flex;
		justify-content: space-between;
		align-items: center
	}

	@media (max-width: 767.98px) {
		.fc .fc-toolbar {
			flex-direction: column
		}
	}

	.fc .fc-toolbar.fc-header-toolbar {
		margin: -.5rem 0 .75rem
	}

	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk {
		display: flex;
		align-items: center;
		padding: .5rem 0
	}

	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk:empty {
		display: none
	}

	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .btn,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox .dual-listbox__button,
	.dual-listbox .fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox__button {
		position: relative;
		font-family: Roboto, sans-serif;
		font-weight: 700;
		font-size: 12px;
		background: transparent;
		color: #8094ae;
		border: 1px solid #dbdfea;
		text-transform: capitalize
	}

	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .btn:disabled,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox .dual-listbox__button:disabled,
	.dual-listbox .fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox__button:disabled {
		background: transparent;
		color: #8094ae;
		border: 1px solid #dbdfea
	}

	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .btn:hover,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox .dual-listbox__button:hover,
	.dual-listbox .fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox__button:hover,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .btn:focus,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox .dual-listbox__button:focus,
	.dual-listbox .fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox__button:focus {
		color: #526484;
		background: #f5f6fa;
		border: 1px solid #dbdfea
	}

	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .btn:focus,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox .dual-listbox__button:focus,
	.dual-listbox .fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox__button:focus {
		box-shadow: 0 0 0 0.2rem rgba(219, 223, 234, 0.5)
	}

	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .btn.active,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .dual-listbox .active.dual-listbox__button,
	.dual-listbox .fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .active.dual-listbox__button {
		color: #364a63;
		border: 1px solid #dbdfea;
		background: #f5f6fa;
		box-shadow: inset 0 0 4px -1px rgba(128, 148, 174, 0.25)
	}

	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-prev-button,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-next-button {
		border: none !important
	}

	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-prev-button:hover,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-prev-button:focus,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-next-button:hover,
	.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-next-button:focus {
		background: transparent !important;
		box-shadow: none !important
	}

	@media (max-width: 767.98px) {
		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk {
			justify-content: space-between;
			width: 100%
		}

		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-dayGridMonth-button,
		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-timeGridWeek-button,
		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-timeGridDay-button,
		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-listWeek-button {
			color: transparent !important;
			width: 2.125rem
		}

		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-dayGridMonth-button:before,
		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-timeGridWeek-button:before,
		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-timeGridDay-button:before,
		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-listWeek-button:before {
			color: #8094ae;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%)
		}

		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-dayGridMonth-button:before {
			content: 'M'
		}

		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-timeGridWeek-button:before {
			content: 'W'
		}

		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-timeGridDay-button:before {
			content: 'D'
		}

		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-chunk .fc-listWeek-button:before {
			content: 'L'
		}

		.fc .fc-toolbar.fc-header-toolbar .fc-toolbar-title+.btn-group {
			margin-right: -0.75rem
		}
	}

	.fc .fc-toolbar.fc-footer-toolbar {
		margin-top: 1.5em
	}

	.fc .fc-toolbar-title {
		font-size: 1.125rem;
		margin: 0
	}

	.fc-direction-ltr .fc-toolbar>*>:not(:first-child) {
		margin-left: .75em
	}

	.fc-direction-rtl .fc-toolbar>*>:not(:first-child) {
		margin-right: .75em
	}

	.fc-direction-rtl .fc-toolbar-ltr {
		flex-direction: row-reverse
	}

	.fc .fc-scroller {
		-webkit-overflow-scrolling: touch;
		position: relative
	}

	.fc .fc-scroller-liquid {
		height: 100%
	}

	.fc .fc-scroller-liquid-absolute {
		position: absolute;
		top: 0;
		right: 0;
		left: 0;
		bottom: 0
	}

	.fc .fc-scroller-harness {
		position: relative;
		overflow: hidden;
		direction: ltr
	}

	.fc .fc-scroller-harness-liquid {
		height: 100%
	}

	.fc-direction-rtl .fc-scroller-harness>.fc-scroller {
		direction: rtl
	}

	.fc-theme-standard .fc-scrollgrid {
		border: 1px solid #ddd;
		border: 1px solid var(--fc-border-color, #ddd)
	}

	.fc .fc-scrollgrid,
	.fc .fc-scrollgrid table {
		width: 100%;
		table-layout: fixed
	}

	.fc .fc-scrollgrid table {
		border-top-style: hidden;
		border-left-style: hidden;
		border-right-style: hidden
	}

	.fc .fc-scrollgrid {
		border-collapse: separate;
		border-right-width: 0;
		border-bottom-width: 0
	}

	.fc .fc-scrollgrid-liquid {
		height: 100%
	}

	.fc .fc-scrollgrid-section {
		height: 1px
	}

	.fc .fc-scrollgrid-section>td {
		height: 1px
	}

	.fc .fc-scrollgrid-section table {
		height: 1px
	}

	.fc .fc-scrollgrid-section-liquid {
		height: auto
	}

	.fc .fc-scrollgrid-section-liquid>td {
		height: 100%
	}

	.fc .fc-scrollgrid-section>* {
		border-top-width: 0;
		border-left-width: 0
	}

	.fc .fc-scrollgrid-section-header>*,
	.fc .fc-scrollgrid-section-footer>* {
		border-bottom-width: 0
	}

	.fc .fc-scrollgrid-section-body table,
	.fc .fc-scrollgrid-section-footer table {
		border-bottom-style: hidden
	}

	.fc .fc-scrollgrid-section-sticky>* {
		background: #fff;
		background: var(--fc-page-bg-color, #fff);
		position: -webkit-sticky;
		position: sticky;
		z-index: 2
	}

	.fc .fc-scrollgrid-section-header.fc-scrollgrid-section-sticky>* {
		top: 0
	}

	.fc .fc-scrollgrid-section-footer.fc-scrollgrid-section-sticky>* {
		bottom: 0
	}

	.fc .fc-scrollgrid-sticky-shim {
		height: 1px;
		margin-bottom: -1px
	}

	.fc-sticky {
		position: -webkit-sticky;
		position: sticky
	}

	.fc .fc-view-harness {
		flex-grow: 1;
		position: relative
	}

	.fc .fc-view-harness-active>.fc-view {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0
	}

	.fc .fc-col-header-cell-cushion {
		display: inline-block;
		padding: 2px 4px
	}

	.fc .fc-bg-event,
	.fc .fc-non-business,
	.fc .fc-highlight {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0
	}

	.fc .fc-non-business {
		background: rgba(215, 215, 215, 0.3);
		background: var(--fc-non-business-color, rgba(215, 215, 215, 0.3))
	}

	.fc .fc-bg-event {
		background: #8fdf82;
		background: var(--fc-bg-event-color, #8fdf82);
		opacity: 0.3;
		opacity: var(--fc-bg-event-opacity, 0.3)
	}

	.fc .fc-bg-event .fc-event-title {
		margin: .5em;
		font-size: .85em;
		font-size: var(--fc-small-font-size, 0.85em);
		font-style: italic
	}

	.fc .fc-highlight {
		background: rgba(188, 232, 241, 0.3);
		background: var(--fc-highlight-color, rgba(188, 232, 241, 0.3))
	}

	.fc .fc-cell-shaded,
	.fc .fc-day-disabled {
		background: rgba(208, 208, 208, 0.3);
		background: var(--fc-neutral-bg-color, rgba(208, 208, 208, 0.3))
	}

	.fc .fc-event {
		padding: .125rem .375rem;
		margin: .5rem .375rem
	}

	a.fc-event,
	a.fc-event:hover {
		text-decoration: none
	}

	.fc-event[href],
	.fc-event.fc-event-draggable {
		cursor: pointer
	}

	.fc-event .fc-event-main {
		position: relative;
		z-index: 2
	}

	.fc-event-dragging:not(.fc-event-selected) {
		opacity: 0.75
	}

	.fc-event-dragging.fc-event-selected {
		box-shadow: 0 2px 7px rgba(0, 0, 0, 0.3)
	}

	.fc-event .fc-event-resizer {
		display: none;
		position: absolute;
		z-index: 4
	}

	.fc-event:hover .fc-event-resizer,
	.fc-event-selected .fc-event-resizer {
		display: block
	}

	.fc-event-selected .fc-event-resizer {
		border-radius: 4px;
		border-radius: calc(var(--fc-event-resizer-dot-total-width, 8px) / 2);
		border-width: 1px;
		border-width: var(--fc-event-resizer-dot-border-width, 1px);
		width: 8px;
		width: var(--fc-event-resizer-dot-total-width, 8px);
		height: 8px;
		height: var(--fc-event-resizer-dot-total-width, 8px);
		border-style: solid;
		border-color: inherit;
		background: #fff;
		background: var(--fc-page-bg-color, #fff)
	}

	.fc-event-selected .fc-event-resizer:before {
		content: '';
		position: absolute;
		top: -20px;
		left: -20px;
		right: -20px;
		bottom: -20px
	}

	.fc-event-selected {
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2)
	}

	.fc-event-selected:before {
		content: "";
		position: absolute;
		z-index: 3;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0
	}

	.fc-event-selected:after {
		content: "";
		background: rgba(0, 0, 0, 0.25);
		background: var(--fc-event-selected-overlay-color, rgba(0, 0, 0, 0.25));
		position: absolute;
		z-index: 1;
		top: -1px;
		left: -1px;
		right: -1px;
		bottom: -1px
	}

	.fc-h-event {
		display: block;
		border: 1px solid #6576ff;
		background-color: #6576ff
	}

	.fc-h-event .fc-event-main-frame {
		display: flex
	}

	.fc-h-event .fc-event-time {
		max-width: 100%;
		overflow: hidden
	}

	.fc-h-event .fc-event-title-container {
		flex-grow: 1;
		flex-shrink: 1;
		min-width: 0
	}

	.fc-h-event .fc-event-title {
		display: inline-block;
		vertical-align: top;
		left: 0;
		right: 0;
		max-width: 100%;
		overflow: hidden
	}

	.fc-h-event.fc-event-selected:before {
		top: -10px;
		bottom: -10px
	}

	.fc-direction-ltr .fc-daygrid-block-event:not(.fc-event-start),
	.fc-direction-rtl .fc-daygrid-block-event:not(.fc-event-end) {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		border-left-width: 0
	}

	.fc-direction-ltr .fc-daygrid-block-event:not(.fc-event-end),
	.fc-direction-rtl .fc-daygrid-block-event:not(.fc-event-start) {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0;
		border-right-width: 0
	}

	.fc-h-event:not(.fc-event-selected) .fc-event-resizer {
		top: 0;
		bottom: 0;
		width: 8px;
		width: var(--fc-event-resizer-thickness, 8px)
	}

	.fc-direction-ltr .fc-h-event:not(.fc-event-selected) .fc-event-resizer-start,
	.fc-direction-rtl .fc-h-event:not(.fc-event-selected) .fc-event-resizer-end {
		cursor: w-resize;
		left: -4px;
		left: calc(var(--fc-event-resizer-thickness, 8px) / -2)
	}

	.fc-direction-ltr .fc-h-event:not(.fc-event-selected) .fc-event-resizer-end,
	.fc-direction-rtl .fc-h-event:not(.fc-event-selected) .fc-event-resizer-start {
		cursor: e-resize;
		right: -4px;
		right: calc(var(--fc-event-resizer-thickness, 8px) / -2)
	}

	.fc-h-event.fc-event-selected .fc-event-resizer {
		top: 50%;
		margin-top: -4px;
		margin-top: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2)
	}

	.fc-direction-ltr .fc-h-event.fc-event-selected .fc-event-resizer-start,
	.fc-direction-rtl .fc-h-event.fc-event-selected .fc-event-resizer-end {
		left: -4px;
		left: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2)
	}

	.fc-direction-ltr .fc-h-event.fc-event-selected .fc-event-resizer-end,
	.fc-direction-rtl .fc-h-event.fc-event-selected .fc-event-resizer-start {
		right: -4px;
		right: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2)
	}

	:root {
		--fc-daygrid-event-dot-width: 8px
	}

	.fc .fc-popover {
		position: fixed;
		top: 0;
		box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15)
	}

	.fc .fc-popover-header {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		align-items: center;
		padding: 3px 4px
	}

	.fc .fc-popover-title {
		margin: 0 2px
	}

	.fc .fc-popover-close {
		cursor: pointer;
		opacity: 0.65;
		font-size: 1.1em
	}

	.fc-theme-standard .fc-popover {
		border: 1px solid #ddd;
		border: 1px solid var(--fc-border-color, #ddd);
		background: #fff;
		background: var(--fc-page-bg-color, #fff)
	}

	.fc-theme-standard .fc-popover-header {
		background: rgba(208, 208, 208, 0.3);
		background: var(--fc-neutral-bg-color, rgba(208, 208, 208, 0.3))
	}

	.fc-daygrid-day-frame:before,
	.fc-daygrid-day-events:before,
	.fc-daygrid-event-harness:before {
		content: "";
		clear: both;
		display: table
	}

	.fc-daygrid-day-frame:after,
	.fc-daygrid-day-events:after,
	.fc-daygrid-event-harness:after {
		content: "";
		clear: both;
		display: table
	}

	.fc .fc-daygrid-body {
		position: relative;
		z-index: 1
	}

	.fc .fc-daygrid-day.fc-day-today {
		background-color: rgba(101, 118, 255, 0.07)
	}

	.fc .fc-daygrid-day-frame {
		position: relative;
		min-height: 100%
	}

	.fc .fc-daygrid-day-top {
		display: flex;
		flex-direction: row-reverse
	}

	.fc .fc-day-other .fc-daygrid-day-top {
		opacity: 0.5
	}

	.fc .fc-daygrid-day-number {
		position: relative;
		z-index: 4;
		padding: 4px
	}

	.fc .fc-daygrid-day-events {
		margin-top: 1px
	}

	.fc .fc-daygrid-body-balanced .fc-daygrid-day-events {
		position: absolute;
		left: 0;
		right: 0
	}

	.fc .fc-daygrid-body-unbalanced .fc-daygrid-day-events {
		position: relative;
		min-height: 2em
	}

	.fc .fc-daygrid-body-natural .fc-daygrid-day-events {
		margin-bottom: 1em
	}

	.fc .fc-daygrid-event-harness {
		position: relative
	}

	.fc .fc-daygrid-event-harness-abs {
		position: absolute;
		top: 0;
		left: 0;
		right: 0
	}

	.fc .fc-daygrid-bg-harness {
		position: absolute;
		top: 0;
		bottom: 0
	}

	.fc .fc-daygrid-day-bg .fc-non-business {
		z-index: 1
	}

	.fc .fc-daygrid-day-bg .fc-bg-event {
		z-index: 2
	}

	.fc .fc-daygrid-day-bg .fc-highlight {
		z-index: 3
	}

	.fc .fc-daygrid-event {
		z-index: 6;
		margin: .375rem .5rem !important
	}

	.fc .fc-daygrid-event.fc-event-mirror {
		z-index: 7
	}

	.fc .fc-daygrid-day-bottom {
		font-size: .85em;
		margin: 2px 3px 0
	}

	.fc .fc-daygrid-more-link {
		position: relative;
		z-index: 4;
		cursor: pointer
	}

	.fc .fc-daygrid-week-number {
		position: absolute;
		z-index: 5;
		top: 0;
		padding: 2px;
		min-width: 1.5em;
		text-align: center;
		background-color: rgba(208, 208, 208, 0.3);
		background-color: var(--fc-neutral-bg-color, rgba(208, 208, 208, 0.3));
		color: #808080;
		color: var(--fc-neutral-text-color, gray)
	}

	.fc .fc-more-popover {
		z-index: 8
	}

	.fc .fc-more-popover .fc-popover-body {
		min-width: 220px;
		padding: 10px
	}

	.fc-direction-ltr .fc-daygrid-event.fc-event-start,
	.fc-direction-rtl .fc-daygrid-event.fc-event-end {
		margin-left: .25rem
	}

	.fc-direction-ltr .fc-daygrid-event.fc-event-end,
	.fc-direction-rtl .fc-daygrid-event.fc-event-start {
		margin-right: .25rem
	}

	.fc-direction-ltr .fc-daygrid-week-number {
		left: 0;
		border-radius: 0 0 3px 0
	}

	.fc-direction-rtl .fc-daygrid-week-number {
		right: 0;
		border-radius: 0 0 0 3px
	}

	.fc-liquid-hack .fc-daygrid-day-frame {
		position: static
	}

	.fc-daygrid-event {
		position: relative;
		white-space: nowrap;
		border-radius: 3px;
		font-size: .85em;
		font-size: var(--fc-small-font-size, 0.85em)
	}

	.fc-daygrid-block-event .fc-event-time {
		font-weight: bold
	}

	.fc-daygrid-block-event .fc-event-time,
	.fc-daygrid-block-event .fc-event-title {
		padding: 1px
	}

	.fc-daygrid-dot-event {
		display: flex;
		align-items: center;
		padding: .25rem .25rem
	}

	.fc-daygrid-dot-event .fc-event-title {
		flex-grow: 1;
		flex-shrink: 1;
		min-width: 0;
		overflow: hidden;
		font-weight: bold
	}

	.fc-daygrid-dot-event:hover,
	.fc-daygrid-dot-event.fc-event-mirror {
		background: rgba(0, 0, 0, 0.1)
	}

	.fc-daygrid-dot-event.fc-event-selected:before {
		top: -10px;
		bottom: -10px
	}

	.fc-daygrid-event-dot {
		margin: -2px 4px 0;
		box-sizing: content-box;
		width: 0;
		height: 0;
		border: 3px solid #6576ff;
		border-radius: 4px
	}

	.fc-direction-ltr .fc-daygrid-event .fc-event-time {
		margin-right: 3px
	}

	.fc-direction-rtl .fc-daygrid-event .fc-event-time {
		margin-left: 3px
	}

	.fc-v-event {
		display: block;
		border: 1px solid #6576ff;
		background-color: #6576ff
	}

	.fc-v-event .fc-event-main {
		height: 100%
	}

	.fc-v-event .fc-event-main-frame {
		height: 100%;
		display: flex;
		flex-direction: column
	}

	.fc-v-event .fc-event-time {
		flex-grow: 0;
		flex-shrink: 0;
		max-height: 100%;
		overflow: hidden
	}

	.fc-v-event .fc-event-title-container {
		flex-grow: 1;
		flex-shrink: 1;
		min-height: 0
	}

	.fc-v-event .fc-event-title {
		top: 0;
		bottom: 0;
		max-height: 100%;
		overflow: hidden
	}

	.fc-v-event:not(.fc-event-start) {
		border-top-width: 0;
		border-top-left-radius: 0;
		border-top-right-radius: 0
	}

	.fc-v-event:not(.fc-event-end) {
		border-bottom-width: 0;
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0
	}

	.fc-v-event.fc-event-selected:before {
		left: -10px;
		right: -10px
	}

	.fc-v-event .fc-event-resizer-start {
		cursor: n-resize
	}

	.fc-v-event .fc-event-resizer-end {
		cursor: s-resize
	}

	.fc-v-event:not(.fc-event-selected) .fc-event-resizer {
		height: 8px;
		height: var(--fc-event-resizer-thickness, 8px);
		left: 0;
		right: 0
	}

	.fc-v-event:not(.fc-event-selected) .fc-event-resizer-start {
		top: -4px;
		top: calc(var(--fc-event-resizer-thickness, 8px) / -2)
	}

	.fc-v-event:not(.fc-event-selected) .fc-event-resizer-end {
		bottom: -4px;
		bottom: calc(var(--fc-event-resizer-thickness, 8px) / -2)
	}

	.fc-v-event.fc-event-selected .fc-event-resizer {
		left: 50%;
		margin-left: -4px;
		margin-left: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2)
	}

	.fc-v-event.fc-event-selected .fc-event-resizer-start {
		top: -4px;
		top: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2)
	}

	.fc-v-event.fc-event-selected .fc-event-resizer-end {
		bottom: -4px;
		bottom: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2)
	}

	.fc .fc-timegrid .fc-daygrid-body {
		z-index: 2
	}

	.fc .fc-timegrid-divider {
		padding: 0 0 2px
	}

	.fc .fc-timegrid-body {
		position: relative;
		z-index: 1;
		min-height: 100%
	}

	.fc .fc-timegrid-axis-chunk {
		position: relative
	}

	.fc .fc-timegrid-axis-chunk>table {
		position: relative;
		z-index: 1
	}

	.fc .fc-timegrid-slots {
		position: relative;
		z-index: 1
	}

	.fc .fc-timegrid-slot {
		height: 1.5em;
		border-bottom: 0;
		padding: .25rem
	}

	.fc .fc-timegrid-slot:empty:before {
		content: '\00a0'
	}

	.fc .fc-timegrid-slot-minor {
		border-top-style: dotted
	}

	.fc .fc-timegrid-slot-label-cushion {
		display: inline-block;
		white-space: nowrap
	}

	.fc .fc-timegrid-slot-label {
		vertical-align: middle
	}

	.fc .fc-timegrid-axis-cushion,
	.fc .fc-timegrid-slot-label-cushion {
		padding: 0 4px
	}

	.fc .fc-timegrid-axis-frame-liquid {
		height: 100%
	}

	.fc .fc-timegrid-axis-frame {
		overflow: hidden;
		display: flex;
		align-items: center;
		justify-content: flex-end
	}

	.fc .fc-timegrid-axis-cushion {
		max-width: 60px;
		flex-shrink: 0
	}

	.fc-direction-ltr .fc-timegrid-slot-label-frame {
		text-align: right
	}

	.fc-direction-rtl .fc-timegrid-slot-label-frame {
		text-align: left
	}

	.fc-liquid-hack .fc-timegrid-axis-frame-liquid {
		height: auto;
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0
	}

	.fc .fc-timegrid-col.fc-day-today {
		background-color: rgba(101, 118, 255, 0.07)
	}

	.fc .fc-timegrid-col-frame {
		min-height: 100%;
		position: relative
	}

	.fc-liquid-hack .fc-timegrid-col-frame {
		height: auto;
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0
	}

	.fc-media-screen .fc-timegrid-cols {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0
	}

	.fc-media-screen .fc-timegrid-cols>table {
		height: 100%
	}

	.fc-media-screen .fc-timegrid-col-bg,
	.fc-media-screen .fc-timegrid-col-events,
	.fc-media-screen .fc-timegrid-now-indicator-container {
		position: absolute;
		top: 0;
		left: 0;
		right: 0
	}

	.fc-media-screen .fc-timegrid-event-harness {
		position: absolute
	}

	.fc .fc-timegrid-col-bg {
		z-index: 2
	}

	.fc .fc-timegrid-col-bg .fc-non-business {
		z-index: 1
	}

	.fc .fc-timegrid-col-bg .fc-bg-event {
		z-index: 2
	}

	.fc .fc-timegrid-col-bg .fc-highlight {
		z-index: 3
	}

	.fc .fc-timegrid-bg-harness {
		position: absolute;
		left: 0;
		right: 0
	}

	.fc .fc-timegrid-col-events {
		z-index: 3
	}

	.fc .fc-timegrid-now-indicator-container {
		bottom: 0;
		overflow: hidden
	}

	.fc-direction-ltr .fc-timegrid-col-events {
		margin: 0 2.5% 0 2px
	}

	.fc-direction-rtl .fc-timegrid-col-events {
		margin: 0 2px 0 2.5%
	}

	.fc-timegrid-event-harness-inset .fc-timegrid-event,
	.fc-timegrid-event.fc-event-mirror {
		box-shadow: 0px 0px 0px 1px #fff;
		box-shadow: 0px 0px 0px 1px var(--fc-page-bg-color, #fff)
	}

	.fc-timegrid-event {
		font-size: .85em;
		font-size: var(--fc-small-font-size, 0.85em);
		border-radius: 3px
	}

	.fc-timegrid-event .fc-event-main {
		padding: 1px 1px 0
	}

	.fc-timegrid-event .fc-event-time {
		white-space: nowrap;
		font-size: .85em;
		font-size: var(--fc-small-font-size, 0.85em);
		margin-bottom: 1px
	}

	.fc-timegrid-event-condensed .fc-event-main-frame {
		flex-direction: row;
		overflow: hidden
	}

	.fc-timegrid-event-condensed .fc-event-time:after {
		content: '\00a0-\00a0'
	}

	.fc-timegrid-event-condensed .fc-event-title {
		font-size: .85em;
		font-size: var(--fc-small-font-size, 0.85em)
	}

	.fc-media-screen .fc-timegrid-event {
		position: absolute;
		top: 0;
		bottom: 1px;
		left: 0;
		right: 0
	}

	.fc .fc-timegrid-now-indicator-line {
		position: absolute;
		z-index: 4;
		left: 0;
		right: 0;
		border-style: solid;
		border-color: #e85347;
		border-width: 1px 0 0
	}

	.fc .fc-timegrid-now-indicator-arrow {
		position: absolute;
		z-index: 4;
		margin-top: -5px;
		border-style: solid;
		border-color: #e85347
	}

	.fc-direction-ltr .fc-timegrid-now-indicator-arrow {
		left: 0;
		border-width: 5px 0 5px 6px;
		border-top-color: transparent;
		border-bottom-color: transparent
	}

	.fc-direction-rtl .fc-timegrid-now-indicator-arrow {
		right: 0;
		border-width: 5px 6px 5px 0;
		border-top-color: transparent;
		border-bottom-color: transparent
	}

	:root {
		--fc-list-event-dot-width: 10px;
		--fc-list-event-hover-bg-color: #f5f5f5
	}

	.fc-theme-standard .fc-list {
		border: 1px solid #ddd
	}

	.fc .fc-list-empty {
		background-color: #f5f6fa;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center
	}

	.fc .fc-list-empty-cushion {
		margin: 5em 0
	}

	.fc .fc-list-table {
		width: 100%;
		border-style: hidden
	}

	.fc .fc-list-table tr>* {
		border-left: 0;
		border-right: 0
	}

	.fc .fc-list-sticky .fc-list-day>* {
		position: -webkit-sticky;
		position: sticky;
		top: 0;
		background: #fff;
		background: var(--fc-page-bg-color, #fff)
	}

	.fc .fc-list-table th {
		padding: 0
	}

	.fc .fc-list-table td,
	.fc .fc-list-day-cushion {
		padding: .75rem 1rem
	}

	.fc .fc-list-table th .fc-list-day-cushion {
		padding: .5rem 1rem
	}

	.fc .fc-list-day-cushion:after {
		content: "";
		clear: both;
		display: table
	}

	.fc-theme-standard .fc-list-day-cushion {
		background-color: rgba(208, 208, 208, 0.3);
		background-color: var(--fc-neutral-bg-color, rgba(208, 208, 208, 0.3))
	}

	.fc-direction-ltr .fc-list-day-text,
	.fc-direction-rtl .fc-list-day-side-text {
		float: left
	}

	.fc-direction-ltr .fc-list-day-side-text,
	.fc-direction-rtl .fc-list-day-text {
		float: right
	}

	.fc-direction-ltr .fc-list-table .fc-list-event-graphic {
		padding-right: 0
	}

	.fc-direction-rtl .fc-list-table .fc-list-event-graphic {
		padding-left: 0
	}

	.fc .fc-list-event.fc-event-forced-url {
		cursor: pointer
	}

	.fc .fc-list-event-graphic,
	.fc .fc-list-event-time {
		white-space: nowrap;
		width: 1px
	}

	.fc .fc-list-event-dot {
		display: inline-block;
		width: 10px;
		height: 10px;
		background-color: #6576ff;
		border: 2px solid #6576ff;
		border-radius: 5px
	}

	.fc .fc-list-event-title a {
		color: inherit;
		text-decoration: none
	}

	.fc .fc-list-event.fc-event-forced-url:hover a {
		text-decoration: underline
	}

	.fc-theme-bootstrap a:not([href]) {
		color: inherit
	}

	.fc a.fc-event:not([href]) {
		color: #fff;
		background: #6576ff
	}

	.fc a.fc-event:not([href]) .fc-daygrid-event-dot {
		border-color: #fff
	}

	.fc-prev-button,
	.fc-next-button {
		padding-left: 0.5rem;
		padding-right: 0.5rem
	}

	.fc-prev-button>.fa,
	.fc-next-button>.fa {
		font-size: 1.25rem
	}

	span[class*="fc-event"] .dot {
		display: inline-block;
		border: 1px solid #6576ff;
		margin-right: 0.5rem
	}

	a.fc-event-primary {
		background-color: #6576ff !important;
		border-color: #6576ff !important;
		color: #fff !important
	}

	a.fc-event-primary .fc-daygrid-event-dot,
	a.fc-event-primary .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-primary {
		background-color: #6576ff !important;
		border-color: #6576ff !important
	}

	.modal-header.fc-event-primary .close,
	.modal-header.fc-event-primary .modal-title {
		color: #fff !important
	}

	span.fc-event-primary .dot {
		background-color: #6576ff !important;
		border-color: #6576ff !important
	}

	.fc-event-primary:not(a) .fc-list-event-dot {
		background-color: #6576ff !important;
		border-color: #6576ff !important
	}

	a.fc-event-success {
		background-color: #1ee0ac !important;
		border-color: #1ee0ac !important;
		color: #fff !important
	}

	a.fc-event-success .fc-daygrid-event-dot,
	a.fc-event-success .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-success {
		background-color: #1ee0ac !important;
		border-color: #1ee0ac !important
	}

	.modal-header.fc-event-success .close,
	.modal-header.fc-event-success .modal-title {
		color: #fff !important
	}

	span.fc-event-success .dot {
		background-color: #1ee0ac !important;
		border-color: #1ee0ac !important
	}

	.fc-event-success:not(a) .fc-list-event-dot {
		background-color: #1ee0ac !important;
		border-color: #1ee0ac !important
	}

	a.fc-event-info {
		background-color: #09c2de !important;
		border-color: #09c2de !important;
		color: #fff !important
	}

	a.fc-event-info .fc-daygrid-event-dot,
	a.fc-event-info .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-info {
		background-color: #09c2de !important;
		border-color: #09c2de !important
	}

	.modal-header.fc-event-info .close,
	.modal-header.fc-event-info .modal-title {
		color: #fff !important
	}

	span.fc-event-info .dot {
		background-color: #09c2de !important;
		border-color: #09c2de !important
	}

	.fc-event-info:not(a) .fc-list-event-dot {
		background-color: #09c2de !important;
		border-color: #09c2de !important
	}

	a.fc-event-warning {
		background-color: #f4bd0e !important;
		border-color: #f4bd0e !important;
		color: #fff !important
	}

	a.fc-event-warning .fc-daygrid-event-dot,
	a.fc-event-warning .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-warning {
		background-color: #f4bd0e !important;
		border-color: #f4bd0e !important
	}

	.modal-header.fc-event-warning .close,
	.modal-header.fc-event-warning .modal-title {
		color: #fff !important
	}

	span.fc-event-warning .dot {
		background-color: #f4bd0e !important;
		border-color: #f4bd0e !important
	}

	.fc-event-warning:not(a) .fc-list-event-dot {
		background-color: #f4bd0e !important;
		border-color: #f4bd0e !important
	}

	a.fc-event-danger {
		background-color: #e85347 !important;
		border-color: #e85347 !important;
		color: #fff !important
	}

	a.fc-event-danger .fc-daygrid-event-dot,
	a.fc-event-danger .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-danger {
		background-color: #e85347 !important;
		border-color: #e85347 !important
	}

	.modal-header.fc-event-danger .close,
	.modal-header.fc-event-danger .modal-title {
		color: #fff !important
	}

	span.fc-event-danger .dot {
		background-color: #e85347 !important;
		border-color: #e85347 !important
	}

	.fc-event-danger:not(a) .fc-list-event-dot {
		background-color: #e85347 !important;
		border-color: #e85347 !important
	}

	a.fc-event-secondary {
		background-color: #364a63 !important;
		border-color: #364a63 !important;
		color: #fff !important
	}

	a.fc-event-secondary .fc-daygrid-event-dot,
	a.fc-event-secondary .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-secondary {
		background-color: #364a63 !important;
		border-color: #364a63 !important
	}

	.modal-header.fc-event-secondary .close,
	.modal-header.fc-event-secondary .modal-title {
		color: #fff !important
	}

	span.fc-event-secondary .dot {
		background-color: #364a63 !important;
		border-color: #364a63 !important
	}

	.fc-event-secondary:not(a) .fc-list-event-dot {
		background-color: #364a63 !important;
		border-color: #364a63 !important
	}

	a.fc-event-dark {
		background-color: #1f2b3a !important;
		border-color: #1f2b3a !important;
		color: #fff !important
	}

	a.fc-event-dark .fc-daygrid-event-dot,
	a.fc-event-dark .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-dark {
		background-color: #1f2b3a !important;
		border-color: #1f2b3a !important
	}

	.modal-header.fc-event-dark .close,
	.modal-header.fc-event-dark .modal-title {
		color: #fff !important
	}

	span.fc-event-dark .dot {
		background-color: #1f2b3a !important;
		border-color: #1f2b3a !important
	}

	.fc-event-dark:not(a) .fc-list-event-dot {
		background-color: #1f2b3a !important;
		border-color: #1f2b3a !important
	}

	a.fc-event-blue {
		background-color: #559bfb !important;
		border-color: #559bfb !important;
		color: #fff !important
	}

	a.fc-event-blue .fc-daygrid-event-dot,
	a.fc-event-blue .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-blue {
		background-color: #559bfb !important;
		border-color: #559bfb !important
	}

	.modal-header.fc-event-blue .close,
	.modal-header.fc-event-blue .modal-title {
		color: #fff !important
	}

	span.fc-event-blue .dot {
		background-color: #559bfb !important;
		border-color: #559bfb !important
	}

	.fc-event-blue:not(a) .fc-list-event-dot {
		background-color: #559bfb !important;
		border-color: #559bfb !important
	}

	a.fc-event-azure {
		background-color: #1676fb !important;
		border-color: #1676fb !important;
		color: #fff !important
	}

	a.fc-event-azure .fc-daygrid-event-dot,
	a.fc-event-azure .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-azure {
		background-color: #1676fb !important;
		border-color: #1676fb !important
	}

	.modal-header.fc-event-azure .close,
	.modal-header.fc-event-azure .modal-title {
		color: #fff !important
	}

	span.fc-event-azure .dot {
		background-color: #1676fb !important;
		border-color: #1676fb !important
	}

	.fc-event-azure:not(a) .fc-list-event-dot {
		background-color: #1676fb !important;
		border-color: #1676fb !important
	}

	a.fc-event-indigo {
		background-color: #2c3782 !important;
		border-color: #2c3782 !important;
		color: #fff !important
	}

	a.fc-event-indigo .fc-daygrid-event-dot,
	a.fc-event-indigo .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-indigo {
		background-color: #2c3782 !important;
		border-color: #2c3782 !important
	}

	.modal-header.fc-event-indigo .close,
	.modal-header.fc-event-indigo .modal-title {
		color: #fff !important
	}

	span.fc-event-indigo .dot {
		background-color: #2c3782 !important;
		border-color: #2c3782 !important
	}

	.fc-event-indigo:not(a) .fc-list-event-dot {
		background-color: #2c3782 !important;
		border-color: #2c3782 !important
	}

	a.fc-event-purple {
		background-color: #816bff !important;
		border-color: #816bff !important;
		color: #fff !important
	}

	a.fc-event-purple .fc-daygrid-event-dot,
	a.fc-event-purple .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-purple {
		background-color: #816bff !important;
		border-color: #816bff !important
	}

	.modal-header.fc-event-purple .close,
	.modal-header.fc-event-purple .modal-title {
		color: #fff !important
	}

	span.fc-event-purple .dot {
		background-color: #816bff !important;
		border-color: #816bff !important
	}

	.fc-event-purple:not(a) .fc-list-event-dot {
		background-color: #816bff !important;
		border-color: #816bff !important
	}

	a.fc-event-pink {
		background-color: #ff63a5 !important;
		border-color: #ff63a5 !important;
		color: #fff !important
	}

	a.fc-event-pink .fc-daygrid-event-dot,
	a.fc-event-pink .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-pink {
		background-color: #ff63a5 !important;
		border-color: #ff63a5 !important
	}

	.modal-header.fc-event-pink .close,
	.modal-header.fc-event-pink .modal-title {
		color: #fff !important
	}

	span.fc-event-pink .dot {
		background-color: #ff63a5 !important;
		border-color: #ff63a5 !important
	}

	.fc-event-pink:not(a) .fc-list-event-dot {
		background-color: #ff63a5 !important;
		border-color: #ff63a5 !important
	}

	a.fc-event-orange {
		background-color: #ffa353 !important;
		border-color: #ffa353 !important;
		color: #fff !important
	}

	a.fc-event-orange .fc-daygrid-event-dot,
	a.fc-event-orange .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-orange {
		background-color: #ffa353 !important;
		border-color: #ffa353 !important
	}

	.modal-header.fc-event-orange .close,
	.modal-header.fc-event-orange .modal-title {
		color: #fff !important
	}

	span.fc-event-orange .dot {
		background-color: #ffa353 !important;
		border-color: #ffa353 !important
	}

	.fc-event-orange:not(a) .fc-list-event-dot {
		background-color: #ffa353 !important;
		border-color: #ffa353 !important
	}

	a.fc-event-teal {
		background-color: #20c997 !important;
		border-color: #20c997 !important;
		color: #fff !important
	}

	a.fc-event-teal .fc-daygrid-event-dot,
	a.fc-event-teal .fc-list-event-dot {
		border-color: #fff !important
	}

	.modal-header.fc-event-teal {
		background-color: #20c997 !important;
		border-color: #20c997 !important
	}

	.modal-header.fc-event-teal .close,
	.modal-header.fc-event-teal .modal-title {
		color: #fff !important
	}

	span.fc-event-teal .dot {
		background-color: #20c997 !important;
		border-color: #20c997 !important
	}

	.fc-event-teal:not(a) .fc-list-event-dot {
		background-color: #20c997 !important;
		border-color: #20c997 !important
	}

	a.fc-event-primary-dim {
		background-color: #ebedff !important;
		border-color: #ebedff !important;
		color: #6576ff !important
	}

	a.fc-event-primary-dim .fc-daygrid-event-dot,
	a.fc-event-primary-dim .fc-list-event-dot {
		border-color: #6576ff !important
	}

	.modal-header.fc-event-primary-dim {
		background-color: #ebedff !important;
		color: #6576ff !important;
		border-color: #d2d6ff !important
	}

	.modal-header.fc-event-primary-dim .close,
	.modal-header.fc-event-primary-dim .modal-title {
		color: #6576ff !important
	}

	span.fc-event-primary-dim .dot {
		background-color: #ebedff !important;
		border-color: #6576ff !important
	}

	.fc-event-primary-dim:not(a) .fc-list-event-dot {
		background-color: #ebedff !important;
		border-color: #98a3ff !important
	}

	a.fc-event-success-dim {
		background-color: #e2fbf4 !important;
		border-color: #e2fbf4 !important;
		color: #1ee0ac !important
	}

	a.fc-event-success-dim .fc-daygrid-event-dot,
	a.fc-event-success-dim .fc-list-event-dot {
		border-color: #1ee0ac !important
	}

	.modal-header.fc-event-success-dim {
		background-color: #e2fbf4 !important;
		color: #1ee0ac !important;
		border-color: #ccf8ec !important
	}

	.modal-header.fc-event-success-dim .close,
	.modal-header.fc-event-success-dim .modal-title {
		color: #1ee0ac !important
	}

	span.fc-event-success-dim .dot {
		background-color: #e2fbf4 !important;
		border-color: #1ee0ac !important
	}

	.fc-event-success-dim:not(a) .fc-list-event-dot {
		background-color: #e2fbf4 !important;
		border-color: #4ae7bd !important
	}

	a.fc-event-info-dim {
		background-color: #dff7fb !important;
		border-color: #dff7fb !important;
		color: #09c2de !important
	}

	a.fc-event-info-dim .fc-daygrid-event-dot,
	a.fc-event-info-dim .fc-list-event-dot {
		border-color: #09c2de !important
	}

	.modal-header.fc-event-info-dim {
		background-color: #dff7fb !important;
		color: #09c2de !important;
		border-color: #c8f1f8 !important
	}

	.modal-header.fc-event-info-dim .close,
	.modal-header.fc-event-info-dim .modal-title {
		color: #09c2de !important
	}

	span.fc-event-info-dim .dot {
		background-color: #dff7fb !important;
		border-color: #09c2de !important
	}

	.fc-event-info-dim:not(a) .fc-list-event-dot {
		background-color: #dff7fb !important;
		border-color: #24daf6 !important
	}

	a.fc-event-warning-dim {
		background-color: #fef6e0 !important;
		border-color: #fef6e0 !important;
		color: #f4bd0e !important
	}

	a.fc-event-warning-dim .fc-daygrid-event-dot,
	a.fc-event-warning-dim .fc-list-event-dot {
		border-color: #f4bd0e !important
	}

	.modal-header.fc-event-warning-dim {
		background-color: #fef6e0 !important;
		color: #f4bd0e !important;
		border-color: #fdefc7 !important
	}

	.modal-header.fc-event-warning-dim .close,
	.modal-header.fc-event-warning-dim .modal-title {
		color: #f4bd0e !important
	}

	span.fc-event-warning-dim .dot {
		background-color: #fef6e0 !important;
		border-color: #f4bd0e !important
	}

	.fc-event-warning-dim:not(a) .fc-list-event-dot {
		background-color: #fef6e0 !important;
		border-color: #f6ca3f !important
	}

	a.fc-event-danger-dim {
		background-color: #fce9e7 !important;
		border-color: #fce9e7 !important;
		color: #e85347 !important
	}

	a.fc-event-danger-dim .fc-daygrid-event-dot,
	a.fc-event-danger-dim .fc-list-event-dot {
		border-color: #e85347 !important
	}

	.modal-header.fc-event-danger-dim {
		background-color: #fce9e7 !important;
		color: #e85347 !important;
		border-color: #f9d4d0 !important
	}

	.modal-header.fc-event-danger-dim .close,
	.modal-header.fc-event-danger-dim .modal-title {
		color: #e85347 !important
	}

	span.fc-event-danger-dim .dot {
		background-color: #fce9e7 !important;
		border-color: #e85347 !important
	}

	.fc-event-danger-dim:not(a) .fc-list-event-dot {
		background-color: #fce9e7 !important;
		border-color: #ee7d74 !important
	}

	a.fc-event-secondary-dim {
		background-color: #e5ecf5 !important;
		border-color: #e5ecf5 !important;
		color: #364a63 !important
	}

	a.fc-event-secondary-dim .fc-daygrid-event-dot,
	a.fc-event-secondary-dim .fc-list-event-dot {
		border-color: #364a63 !important
	}

	.modal-header.fc-event-secondary-dim {
		background-color: #e5ecf5 !important;
		color: #364a63 !important;
		border-color: #d3dfee !important
	}

	.modal-header.fc-event-secondary-dim .close,
	.modal-header.fc-event-secondary-dim .modal-title {
		color: #364a63 !important
	}

	span.fc-event-secondary-dim .dot {
		background-color: #e5ecf5 !important;
		border-color: #364a63 !important
	}

	.fc-event-secondary-dim:not(a) .fc-list-event-dot {
		background-color: #e5ecf5 !important;
		border-color: #486384 !important
	}

	a.fc-event-dark-dim {
		background-color: #d9e1ef !important;
		border-color: #d9e1ef !important;
		color: #1f2b3a !important
	}

	a.fc-event-dark-dim .fc-daygrid-event-dot,
	a.fc-event-dark-dim .fc-list-event-dot {
		border-color: #1f2b3a !important
	}

	.modal-header.fc-event-dark-dim {
		background-color: #d9e1ef !important;
		color: #1f2b3a !important;
		border-color: #c7d3e7 !important
	}

	.modal-header.fc-event-dark-dim .close,
	.modal-header.fc-event-dark-dim .modal-title {
		color: #1f2b3a !important
	}

	span.fc-event-dark-dim .dot {
		background-color: #d9e1ef !important;
		border-color: #1f2b3a !important
	}

	.fc-event-dark-dim:not(a) .fc-list-event-dot {
		background-color: #d9e1ef !important;
		border-color: #31445b !important
	}

	a.fc-event-blue-dim {
		background-color: #e9f2fe !important;
		border-color: #e9f2fe !important;
		color: #559bfb !important
	}

	a.fc-event-blue-dim .fc-daygrid-event-dot,
	a.fc-event-blue-dim .fc-list-event-dot {
		border-color: #559bfb !important
	}

	.modal-header.fc-event-blue-dim {
		background-color: #e9f2fe !important;
		color: #559bfb !important;
		border-color: #d1e4fd !important
	}

	.modal-header.fc-event-blue-dim .close,
	.modal-header.fc-event-blue-dim .modal-title {
		color: #559bfb !important
	}

	span.fc-event-blue-dim .dot {
		background-color: #e9f2fe !important;
		border-color: #559bfb !important
	}

	.fc-event-blue-dim:not(a) .fc-list-event-dot {
		background-color: #e9f2fe !important;
		border-color: #87b8fc !important
	}

	a.fc-event-azure-dim {
		background-color: #e1edfe !important;
		border-color: #e1edfe !important;
		color: #1676fb !important
	}

	a.fc-event-azure-dim .fc-daygrid-event-dot,
	a.fc-event-azure-dim .fc-list-event-dot {
		border-color: #1676fb !important
	}

	.modal-header.fc-event-azure-dim {
		background-color: #e1edfe !important;
		color: #1676fb !important;
		border-color: #c8defd !important
	}

	.modal-header.fc-event-azure-dim .close,
	.modal-header.fc-event-azure-dim .modal-title {
		color: #1676fb !important
	}

	span.fc-event-azure-dim .dot {
		background-color: #e1edfe !important;
		border-color: #1676fb !important
	}

	.fc-event-azure-dim:not(a) .fc-list-event-dot {
		background-color: #e1edfe !important;
		border-color: #4893fc !important
	}

	a.fc-event-indigo-dim {
		background-color: #e4e5ef !important;
		border-color: #e4e5ef !important;
		color: #2c3782 !important
	}

	a.fc-event-indigo-dim .fc-daygrid-event-dot,
	a.fc-event-indigo-dim .fc-list-event-dot {
		border-color: #2c3782 !important
	}

	.modal-header.fc-event-indigo-dim {
		background-color: #e4e5ef !important;
		color: #2c3782 !important;
		border-color: #d4d6e6 !important
	}

	.modal-header.fc-event-indigo-dim .close,
	.modal-header.fc-event-indigo-dim .modal-title {
		color: #2c3782 !important
	}

	span.fc-event-indigo-dim .dot {
		background-color: #e4e5ef !important;
		border-color: #2c3782 !important
	}

	.fc-event-indigo-dim:not(a) .fc-list-event-dot {
		background-color: #e4e5ef !important;
		border-color: #3947a8 !important
	}

	a.fc-event-purple-dim {
		background-color: #efecff !important;
		border-color: #efecff !important;
		color: #816bff !important
	}

	a.fc-event-purple-dim .fc-daygrid-event-dot,
	a.fc-event-purple-dim .fc-list-event-dot {
		border-color: #816bff !important
	}

	.modal-header.fc-event-purple-dim {
		background-color: #efecff !important;
		color: #816bff !important;
		border-color: #dad3ff !important
	}

	.modal-header.fc-event-purple-dim .close,
	.modal-header.fc-event-purple-dim .modal-title {
		color: #816bff !important
	}

	span.fc-event-purple-dim .dot {
		background-color: #efecff !important;
		border-color: #816bff !important
	}

	.fc-event-purple-dim:not(a) .fc-list-event-dot {
		background-color: #efecff !important;
		border-color: #ac9eff !important
	}

	a.fc-event-pink-dim {
		background-color: #ffebf3 !important;
		border-color: #ffebf3 !important;
		color: #ff63a5 !important
	}

	a.fc-event-pink-dim .fc-daygrid-event-dot,
	a.fc-event-pink-dim .fc-list-event-dot {
		border-color: #ff63a5 !important
	}

	.modal-header.fc-event-pink-dim {
		background-color: #ffebf3 !important;
		color: #ff63a5 !important;
		border-color: #ffd2e4 !important
	}

	.modal-header.fc-event-pink-dim .close,
	.modal-header.fc-event-pink-dim .modal-title {
		color: #ff63a5 !important
	}

	span.fc-event-pink-dim .dot {
		background-color: #ffebf3 !important;
		border-color: #ff63a5 !important
	}

	.fc-event-pink-dim:not(a) .fc-list-event-dot {
		background-color: #ffebf3 !important;
		border-color: #ff96c2 !important
	}

	a.fc-event-orange-dim {
		background-color: #fff3e9 !important;
		border-color: #fff3e9 !important;
		color: #ffa353 !important
	}

	a.fc-event-orange-dim .fc-daygrid-event-dot,
	a.fc-event-orange-dim .fc-list-event-dot {
		border-color: #ffa353 !important
	}

	.modal-header.fc-event-orange-dim {
		background-color: #fff3e9 !important;
		color: #ffa353 !important;
		border-color: #ffe5d0 !important
	}

	.modal-header.fc-event-orange-dim .close,
	.modal-header.fc-event-orange-dim .modal-title {
		color: #ffa353 !important
	}

	span.fc-event-orange-dim .dot {
		background-color: #fff3e9 !important;
		border-color: #ffa353 !important
	}

	.fc-event-orange-dim:not(a) .fc-list-event-dot {
		background-color: #fff3e9 !important;
		border-color: #ffbe86 !important
	}

	a.fc-event-teal-dim {
		background-color: #e2f8f1 !important;
		border-color: #e2f8f1 !important;
		color: #20c997 !important
	}

	a.fc-event-teal-dim .fc-daygrid-event-dot,
	a.fc-event-teal-dim .fc-list-event-dot {
		border-color: #20c997 !important
	}

	.modal-header.fc-event-teal-dim {
		background-color: #e2f8f1 !important;
		color: #20c997 !important;
		border-color: #cdf3e7 !important
	}

	.modal-header.fc-event-teal-dim .close,
	.modal-header.fc-event-teal-dim .modal-title {
		color: #20c997 !important
	}

	span.fc-event-teal-dim .dot {
		background-color: #e2f8f1 !important;
		border-color: #20c997 !important
	}

	.fc-event-teal-dim:not(a) .fc-list-event-dot {
		background-color: #e2f8f1 !important;
		border-color: #3ce0af !important
	}

	.fc-draggable {
		background-color: #6576ff;
		border-radius: 4px;
		margin: .75rem 0;
		padding: .25rem .5rem;
		font-size: 13px;
		color: #fff;
		list-style: none;
		display: inline-block
	}

	.fc-day {
		color: #364a63
	}

	.fc-day-other {
		color: #526484
	}

	.fc-col-header-cell {
		color: #526484
	}

	.nk-kanban {
		overflow: auto;
		padding-bottom: 1rem
	}

	.kanban-container {
		position: relative;
		box-sizing: border-box;
		width: auto;
		display: flex;
		margin-left: -14px;
		margin-right: -14px;
		overflow: auto
	}

	.kanban-container * {
		box-sizing: border-box
	}

	.kanban-board {
		padding: 14px;
		position: relative;
		transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
		flex-shrink: 0
	}

	.kanban-board.disabled-board {
		opacity: 0.3
	}

	.kanban-board.is-moving.gu-mirror {
		transform: rotate(3deg)
	}

	.kanban-board.is-moving.gu-mirror .kanban-drag {
		overflow: hidden;
		padding-right: 50px
	}

	.kanban-board-header {
		background: #fff;
		border: 1px solid #e5e9f2;
		border-top: 3px solid #dbdfea;
		border-radius: 4px;
		padding: .5rem 1.25rem;
		margin-bottom: 1rem
	}

	.kanban-primary {
		border-top-color: #6576ff
	}

	.kanban-success {
		border-top-color: #1ee0ac
	}

	.kanban-info {
		border-top-color: #09c2de
	}

	.kanban-warning {
		border-top-color: #f4bd0e
	}

	.kanban-danger {
		border-top-color: #e85347
	}

	.kanban-title-content {
		display: flex;
		align-items: center
	}

	.kanban-title-content .title {
		font-size: 0.9375rem;
		margin-bottom: 0;
		margin-right: 0.75rem;
		color: #526484
	}

	.kanban-title-board {
		display: flex;
		align-items: center;
		justify-content: space-between
	}

	.kanban-board header .kanban-title-button {
		float: right
	}

	.kanban-board .kanban-drag {
		min-height: 100px;
		margin-bottom: 1rem
	}

	.kanban-board .kanban-drag:empty {
		border-radius: 4px;
		border: 1px dashed #e5e9f2
	}

	.kanban-board:after {
		clear: both;
		display: block;
		content: ""
	}

	.kanban-item {
		border-radius: 4px;
		border: 1px solid #e5e9f2;
		padding: 1rem 1.25rem;
		margin-bottom: 0.75rem;
		background: #fff;
		transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1)
	}

	.kanban-item-title {
		display: flex;
		align-items: center;
		justify-content: space-between
	}

	.kanban-item-title+.kanban-item-text {
		margin-top: .5rem
	}

	.kanban-item-title .title {
		font-size: 0.9375rem;
		margin-bottom: 0;
		margin-right: 0.75rem
	}

	.kanban-item-tags {
		display: flex;
		padding-top: 0.5rem;
		margin: -.125rem
	}

	.kanban-item-tags li {
		padding: .125rem
	}

	.kanban-item-meta {
		display: flex;
		align-items: flex-end;
		justify-content: space-between;
		padding-top: 0.5rem
	}

	.kanban-item-meta-list {
		display: flex;
		align-items: center;
		flex-wrap: wrap;
		margin: 0 -.25rem
	}

	.kanban-item-meta-list:last-child {
		flex-wrap: nowrap
	}

	.kanban-item-meta-list:first-child {
		padding-right: 1rem
	}

	.kanban-item-meta-list li {
		font-size: 0.8125rem;
		padding: 0 .25rem;
		color: #8094ae
	}

	.kanban-item-meta-list li span {
		white-space: nowrap
	}

	.kanban-item-meta-list li .icon+span {
		margin-left: 0.25rem
	}

	.kanban-item:hover {
		cursor: move
	}

	.kanban-item:last-child {
		margin: 0
	}

	.kanban-item.is-moving.gu-mirror {
		transform: rotate(3deg);
		height: auto !important
	}

	.gu-mirror {
		position: fixed !important;
		margin: 0 !important;
		z-index: 9999 !important
	}

	.gu-hide {
		display: none !important
	}

	.gu-unselectable {
		-webkit-user-select: none !important;
		-moz-user-select: none !important;
		-ms-user-select: none !important;
		user-select: none !important
	}

	.gu-transit {
		opacity: 0.2 !important;
		transform: rotate(0deg) !important
	}

	.drag_handler {
		background: #fff;
		border-radius: 50%;
		width: 24px;
		height: 24px;
		position: relative;
		top: -3px;
		float: left;
		margin-right: 4px
	}

	.drag_handler:hover {
		cursor: move
	}

	.drag_handler_icon {
		position: relative;
		display: block;
		background: #000;
		width: 24px;
		height: 2px;
		top: 12px;
		transition: .5s ease-in-out
	}

	.drag_handler_icon:before,
	.drag_handler_icon:after {
		background: #000;
		content: '';
		display: block;
		width: 100%;
		height: 100%;
		position: absolute;
		transition: .5s ease-in-out
	}

	.drag_handler_icon:before {
		top: 6px
	}

	.drag_handler_icon:after {
		bottom: 6px
	}

	.kanban-add-task {
		color: #6576ff;
		background: #fff;
		border: 1px dashed #e5e9f2;
		padding-top: 0.675rem;
		padding-bottom: 0.675rem
	}

	.kanban-add-task:hover {
		color: #fff;
		background: #6576ff;
		border: 1px solid #6576ff
	}

	.kanban-add-task:focus {
		outline: none;
		box-shadow: none
	}

	.dual-listbox {
		display: flex;
		flex-direction: column
	}

	.dual-listbox .dual-listbox__container {
		display: flex;
		align-items: center;
		flex-direction: row;
		flex-wrap: wrap
	}

	.dual-listbox .dual-listbox__search {
		max-width: 300px
	}

	.dual-listbox .dual-listbox__search--hidden {
		display: none
	}

	.dual-listbox .dual-listbox__available,
	.dual-listbox .dual-listbox__selected {
		border: 1px solid #e5e9f2;
		height: 300px;
		overflow-y: auto;
		padding: 0;
		width: 300px;
		margin-top: 0;
		border-radius: 0 0 4px 4px
	}

	.dual-listbox .dual-listbox__buttons {
		display: flex;
		flex-direction: column;
		margin: 0 10px
	}

	.dual-listbox .dual-listbox__button {
		margin-bottom: 5px;
		justify-content: center;
		text-transform: capitalize
	}

	.dual-listbox .dual-listbox__title {
		font-size: 1rem;
		font-weight: 500;
		padding: .5rem 1rem;
		border-left: 1px solid #e5e9f2;
		border-right: 1px solid #e5e9f2;
		border-top: 1px solid #e5e9f2;
		margin-top: 1rem;
		-webkit-margin-before: 1rem;
		border-radius: 4px 4px 0 0
	}

	.dual-listbox .dual-listbox__item {
		display: block;
		padding: .5rem 1rem;
		cursor: pointer;
		user-select: none;
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
		border-bottom: 1px solid #e5e9f2;
		transition: background-color 0.2s ease
	}

	.mfp-bg {
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 1042;
		overflow: hidden;
		position: fixed;
		background: #0b0b0b;
		opacity: .8
	}

	.mfp-wrap {
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 1043;
		position: fixed;
		outline: none !important;
		-webkit-backface-visibility: hidden
	}

	.mfp-container {
		text-align: center;
		position: absolute;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
		padding: 0 8px;
		box-sizing: border-box
	}

	.mfp-container:before {
		content: '';
		display: inline-block;
		height: 100%;
		vertical-align: middle
	}

	.mfp-align-top .mfp-container:before {
		display: none
	}

	.mfp-content {
		position: relative;
		display: inline-block;
		vertical-align: middle;
		margin: 0 auto;
		text-align: left;
		z-index: 1045
	}

	.mfp-inline-holder .mfp-content,
	.mfp-ajax-holder .mfp-content {
		width: 100%;
		cursor: auto
	}

	.mfp-ajax-cur {
		cursor: progress
	}

	.mfp-zoom-out-cur,
	.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
		cursor: -moz-zoom-out;
		cursor: -webkit-zoom-out;
		cursor: zoom-out
	}

	.mfp-zoom {
		cursor: pointer;
		cursor: -webkit-zoom-in;
		cursor: -moz-zoom-in;
		cursor: zoom-in
	}

	.mfp-auto-cursor .mfp-content {
		cursor: auto
	}

	.mfp-close,
	.mfp-arrow,
	.mfp-preloader,
	.mfp-counter {
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none
	}

	.mfp-loading.mfp-figure {
		display: none
	}

	.mfp-hide {
		display: none !important
	}

	.mfp-preloader {
		color: #CCC;
		position: absolute;
		top: 50%;
		width: auto;
		text-align: center;
		margin-top: -0.8em;
		left: 8px;
		right: 8px;
		z-index: 1044
	}

	.mfp-preloader a {
		color: #CCC
	}

	.mfp-preloader a:hover {
		color: #fff
	}

	.mfp-s-ready .mfp-preloader {
		display: none
	}

	.mfp-s-error .mfp-content {
		display: none
	}

	button.mfp-arrow {
		overflow: visible;
		cursor: pointer;
		background: transparent;
		border: 0;
		-webkit-appearance: none;
		display: block;
		outline: none;
		padding: 0;
		z-index: 1046;
		box-shadow: none;
		touch-action: manipulation
	}

	button::-moz-focus-inner {
		padding: 0;
		border: 0
	}

	button.mfp-close {
		overflow: visible;
		cursor: pointer;
		border: 0;
		-webkit-appearance: none;
		display: flex;
		align-items: center;
		justify-content: center;
		outline: none;
		padding: 0;
		z-index: 1046;
		box-shadow: 0 3px 12px 1px rgba(43, 55, 72, 0.15);
		touch-action: manipulation
	}

	button::-moz-focus-inner {
		padding: 0;
		border: 0
	}

	.mfp-close {
		width: 44px;
		height: 44px;
		line-height: 44px;
		position: absolute;
		right: 0;
		top: 0;
		text-decoration: none;
		text-align: center;
		transform: translate(50%, -50%);
		color: #fff;
		font-style: normal;
		font-size: 28px;
		font-family: Arial, Baskerville, monospace;
		background-color: #fff;
		border-radius: 50%
	}

	.mfp-close:hover,
	.mfp-close:focus {
		opacity: 1
	}

	.mfp-close:active {
		top: 1px
	}

	.mfp-close:after {
		position: absolute;
		font-family: "Nioicon";
		content: "";
		color: #526484
	}

	.mfp-close-btn-in .mfp-close {
		color: #333
	}

	.mfp-image-holder .mfp-close,
	.mfp-iframe-holder .mfp-close {
		color: #fff
	}

	.mfp-counter {
		position: absolute;
		top: 0;
		right: 0;
		color: #CCC;
		font-size: 12px;
		line-height: 18px;
		white-space: nowrap
	}

	.mfp-arrow {
		position: absolute;
		opacity: .65;
		margin: 0;
		top: 50%;
		margin-top: -55px;
		padding: 0;
		width: 90px;
		height: 110px;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0)
	}

	.mfp-arrow:active {
		margin-top: -54px
	}

	.mfp-arrow:hover,
	.mfp-arrow:focus {
		opacity: 1
	}

	.mfp-arrow:before,
	.mfp-arrow:after {
		content: '';
		display: block;
		width: 0;
		height: 0;
		position: absolute;
		left: 0;
		top: 0;
		margin-top: 35px;
		margin-left: 35px;
		border: medium inset transparent
	}

	.mfp-arrow:after {
		border-top-width: 13px;
		border-bottom-width: 13px;
		top: 8px
	}

	.mfp-arrow:before {
		border-top-width: 21px;
		border-bottom-width: 21px;
		opacity: 0.7
	}

	.mfp-arrow-left {
		left: 0
	}

	.mfp-arrow-left:after {
		border-right: 17px solid #fff;
		margin-left: 31px
	}

	.mfp-arrow-left:before {
		margin-left: 25px;
		border-right: 27px solid #3F3F3F
	}

	.mfp-arrow-right {
		right: 0
	}

	.mfp-arrow-right:after {
		border-left: 17px solid #fff;
		margin-left: 39px
	}

	.mfp-arrow-right:before {
		border-left: 27px solid #3F3F3F
	}

	.mfp-iframe-holder {
		padding-top: 40px;
		padding-bottom: 40px
	}

	.mfp-iframe-holder .mfp-content {
		line-height: 0;
		width: 100%;
		max-width: 900px
	}

	.mfp-iframe-scaler {
		width: 100%;
		height: 0;
		overflow: hidden;
		padding-top: 56.25%
	}

	.mfp-iframe-scaler iframe {
		position: absolute;
		display: block;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
		background: #000;
		border-radius: 8px
	}

	img.mfp-img {
		width: auto;
		max-width: 100%;
		height: auto;
		display: block;
		line-height: 0;
		box-sizing: border-box;
		margin: 0 auto;
		border-radius: 8px
	}

	.mfp-figure {
		line-height: 0
	}

	.mfp-figure:after {
		content: '';
		position: absolute;
		left: 0;
		top: 40px;
		bottom: 40px;
		display: block;
		right: 0;
		width: auto;
		height: auto;
		z-index: -1;
		box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
		background: #444
	}

	.mfp-figure small {
		color: #BDBDBD;
		display: block;
		font-size: 12px;
		line-height: 14px
	}

	.mfp-figure figure {
		margin: 0
	}

	.mfp-bottom-bar {
		margin-top: -36px;
		position: absolute;
		top: 100%;
		left: 0;
		width: 100%;
		cursor: auto
	}

	.mfp-title {
		text-align: left;
		line-height: 18px;
		color: #F3F3F3;
		word-wrap: break-word;
		padding-right: 36px
	}

	.mfp-image-holder .mfp-content {
		max-width: 100%
	}

	.mfp-gallery .mfp-image-holder .mfp-figure {
		cursor: pointer
	}

	@media screen and (max-width: 800px) and (orientation: landscape),
	screen and (max-height: 300px) {
		.mfp-img-mobile .mfp-image-holder {
			padding-left: 0;
			padding-right: 0
		}

		.mfp-img-mobile img.mfp-img {
			padding: 0
		}

		.mfp-img-mobile .mfp-figure:after {
			top: 0;
			bottom: 0
		}

		.mfp-img-mobile .mfp-figure small {
			display: inline;
			margin-left: 5px
		}

		.mfp-img-mobile .mfp-bottom-bar {
			background: rgba(0, 0, 0, 0.6);
			bottom: 0;
			margin: 0;
			top: auto;
			padding: 3px 5px;
			position: fixed;
			box-sizing: border-box
		}

		.mfp-img-mobile .mfp-bottom-bar:empty {
			padding: 0
		}

		.mfp-img-mobile .mfp-counter {
			right: 5px;
			top: 3px
		}

		.mfp-img-mobile .mfp-close {
			top: 0;
			right: 0;
			width: 35px;
			height: 35px;
			line-height: 35px;
			background: rgba(0, 0, 0, 0.6);
			position: fixed;
			text-align: center;
			padding: 0
		}
	}

	@media all and (max-width: 900px) {
		.mfp-arrow {
			-webkit-transform: scale(0.75);
			transform: scale(0.75)
		}

		.mfp-arrow-left {
			-webkit-transform-origin: 0;
			transform-origin: 0
		}

		.mfp-arrow-right {
			-webkit-transform-origin: 100%;
			transform-origin: 100%
		}

		.mfp-container {
			padding-left: 6px;
			padding-right: 6px
		}
	}

	body {
		min-width: 320px
	}

	body.nav-shown {
		overflow: hidden
	}

	.nk-body {
		outline: none
	}

	.nk-app-root {
		outline: none
	}

	.nk-main {
		position: relative
	}

	.nk-wrap {
		display: flex;
		flex-direction: column;
		min-height: 100vh
	}

	.nk-content {
		padding: 24px 4px
	}

	.nk-content-fs {
		min-height: calc(100vh - (65px + 65px));
		display: flex;
		align-items: center
	}

	@media (min-width: 576px) {
		.nk-content {
			padding: 32px 22px
		}

		.nk-content-fluid {
			padding-left: 22px;
			padding-right: 22px
		}
	}

	@media (min-width: 992px) {
		.nk-content-lg {
			padding-top: 36px;
			padding-bottom: 36px
		}

		.nk-content-fluid {
			padding-left: 24px;
			padding-right: 24px
		}
	}

	@media (min-width: 1660px) {
		.nk-content-lg {
			padding-top: 54px;
			padding-bottom: 54px
		}

		.nk-content-fluid {
			padding-left: 44px;
			padding-right: 44px
		}
	}

	.nk-content-body {
		flex-grow: 1
	}

	.nk-wrap-nosidebar .nk-content {
		padding: 0 !important;
		min-height: 100vh;
		display: flex;
		flex-direction: column
	}

	.logo-link {
		position: relative;
		display: inline-block;
		align-items: center
	}

	.logo-dark {
		opacity: 1
	}

	.tc-light .logo-dark,
	.is-dark .logo-dark,
	.is-theme .logo-dark {
		opacity: 0
	}

	.logo-light {
		opacity: 0
	}

	.tc-light .logo-light,
	.is-dark .logo-light,
	.is-theme .logo-light {
		opacity: 1
	}

	.logo-img {
		max-height: 36px
	}

	.logo-img-lg {
		max-height: 60px
	}

	.logo-img-sm {
		max-height: 28px
	}

	.logo-img-icon {
		max-height: 33px
	}

	.logo-img:not(:first-child) {
		position: absolute;
		left: 0;
		top: 50%;
		transform: translateY(-50%)
	}

	.nk-header {
		background: #f5f6fa;
		border-bottom: 1px solid #e5e9f2;
		padding: 0 6px;
		z-index: 1010
	}

	.nk-header.is-dark:not([class*=bg-]) {
		background: #101924;
		border-color: #203247
	}

	.nk-header.is-light:not([class*=bg-]) {
		background: #fff
	}

	.nk-header.is-theme:not([class*=bg-]) {
		background: #29347a;
		border-color: #3644a0
	}

	.nk-header-fixed {
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		min-width: 320px
	}

	.nk-header-fixed+.nk-content {
		margin-top: 65px;
		position: relative
	}

	.nk-header-wrap {
		position: relative;
		display: flex;
		align-items: center;
		margin: 0 -.25rem
	}

	.nk-header-wrap>* {
		padding: 0 .25rem
	}

	.nk-header-right {
		align-items: center;
		justify-content: flex-end
	}

	.nk-header-center {
		justify-content: center
	}

	.nk-header-tools {
		margin-left: auto;
		padding-top: 14px;
		padding-bottom: 14px
	}

	.nk-header-brand {
		flex-shrink: 0;
		padding-top: 14px;
		padding-bottom: 14px
	}

	.nk-header .dropdown-menu .lead-text {
		color: #364a63
	}

	.nk-header .dropdown-menu .sub-text,
	.nk-header .dropdown-menu .overline-title,
	.nk-header .dropdown-menu .overline-title-alt {
		color: #8094ae
	}

	.nk-quick-nav {
		display: flex;
		align-items: center;
		margin: 0 -6px
	}

	.nk-quick-nav>li {
		padding: 0 6px
	}

	.nk-quick-nav>li.user-dropdown>a {
		padding: 0 2px
	}

	.nk-quick-nav-icon {
		display: inline-flex;
		position: relative;
		font-size: 1.5rem;
		z-index: 1;
		color: #526484;
		padding: .375rem
	}

	.is-dark .nk-quick-nav-icon {
		color: #9faec2
	}

	.is-theme .nk-quick-nav-icon {
		color: #c4cefe
	}

	.is-theme .nk-quick-nav-icon.nk-nav-toggle {
		color: #fff
	}

	.nk-quick-nav-icon:focus {
		box-shadow: none
	}

	.nk-quick-nav-icon:before {
		position: absolute;
		z-index: -1;
		height: 20px;
		width: 20px;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		transform-origin: 50% 50%;
		content: '';
		background-color: #e5e9f2;
		border-radius: 50%;
		opacity: 0;
		transition: all .3s
	}

	.is-dark .nk-quick-nav-icon:before {
		background-color: #0b1219
	}

	.is-theme .nk-quick-nav-icon:before {
		background-color: #1f275c
	}

	.show>.nk-quick-nav-icon:before {
		opacity: 1;
		height: 116%;
		width: 116%
	}

	.nk-quick-nav-icon:hover:before,
	.nk-quick-nav-icon.active:before {
		opacity: 1;
		height: 116%;
		width: 116%
	}

	@media (max-width: 359px) {
		.nk-quick-nav {
			margin: 0 -3px
		}

		.nk-quick-nav>li {
			padding: 0 3px
		}

		.hide-mb-xs {
			display: none
		}
	}

	@media (max-width: 575px) {
		.hide-mb-sm {
			display: none
		}
	}

	@media (min-width: 576px) {
		.nk-header {
			padding: 0 22px
		}

		.nk-quick-nav {
			margin: 0 -10px
		}

		.nk-quick-nav>li {
			padding: 0 10px
		}
	}

	@media (min-width: 992px) {
		.nk-header-fluid {
			padding-left: 24px;
			padding-right: 24px
		}
	}

	@media (min-width: 1660px) {
		.nk-header-fluid {
			padding-left: 44px;
			padding-right: 44px
		}
	}

	.nk-header-menu {
		position: fixed;
		left: 0;
		top: 0;
		width: 280px;
		height: 100vh;
		max-height: 100vh;
		z-index: 999;
		background: #fff;
		transform: translateX(-100%)
	}

	.nk-header-menu-inner {
		overflow: auto;
		max-height: 100%;
		min-height: 100%
	}

	.nk-header-menu.mobile-menu {
		padding-top: 65px;
		padding-left: 0;
		padding-right: 0;
		transition: transform .4s ease
	}

	.nk-header-menu.nk-sidebar-active {
		transform: translateX(0)
	}

	.nk-header-mobile {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 0 28px;
		border-bottom: 1px solid #e5e9f2
	}

	.nk-header-mobile .logo-dark {
		opacity: 1
	}

	.nk-header-mobile .logo-light {
		opacity: 0
	}

	.nk-header-mobile .nk-nav-toggle.nk-quick-nav-icon {
		color: #526484
	}

	.nk-header-mobile .nk-nav-toggle.nk-quick-nav-icon:before {
		background-color: #e5e9f2
	}

	@media (min-width: 992px) {
		.nk-header-menu {
			position: static;
			background: transparent;
			height: auto;
			max-height: auto;
			border-right: none;
			width: auto;
			padding: 0;
			overflow: visible;
			transform: translateX(0) !important
		}

		.nk-header-menu .nk-header-mobile {
			display: none
		}
	}

	.nk-sidebar {
		position: absolute;
		background: #f5f6fa;
		height: 100%;
		min-height: 100vh;
		top: 0;
		border-right: 1px solid #e5e9f2;
		left: 0;
		transform: translateX(-100%);
		z-index: 1021;
		width: 290px;
		transition: transform 450ms ease, width 450ms ease
	}

	.nk-sidebar+.nk-wrap {
		transition: padding 450ms ease
	}

	.nk-sidebar+.nk-wrap>.nk-header-fixed {
		transition: left 450ms ease
	}

	.nk-sidebar.is-light {
		background: #fff;
		border-right-color: #ebeef2
	}

	.nk-sidebar.is-dark {
		background: #101924;
		border-right-color: #203247
	}

	.nk-sidebar.is-theme {
		background: #29347a;
		border-right-color: #3644a0
	}

	.nk-sidebar-overlay {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(16, 25, 36, 0.4);
		z-index: 900;
		animation: overlay-fade-in .4s ease 1
	}

	.nk-sidebar-element {
		overflow: hidden;
		width: 100%;
		max-height: 100%
	}

	.nk-sidebar.nk-sidebar-active {
		transform: translateX(0)
	}

	.nk-sidebar-fixed {
		position: fixed;
		max-height: 100vh
	}

	.nk-sidebar-head {
		display: flex;
		align-items: center;
		padding: 14px 24px;
		min-width: 100%;
		width: 290px;
		height: 65px;
		border-bottom: 1px solid #e5e9f2
	}

	.is-dark .nk-sidebar-head {
		border-color: #203247
	}

	.is-theme .nk-sidebar-head {
		border-color: #3644a0
	}

	.nk-sidebar-brand {
		position: relative;
		flex-shrink: 0
	}

	.nk-sidebar-logo {
		transition: opacity .3s ease
	}

	.nk-sidebar-logo .logo-img:not(:first-child) {
		position: absolute;
		left: 0;
		top: 50%;
		transform: translateY(-50%)
	}

	.nk-sidebar-widget {
		padding-left: 24px;
		padding-right: 24px;
		padding-top: 2.5rem
	}

	.nk-sidebar-widget-full {
		padding-left: 0;
		padding-right: 0
	}

	.nk-sidebar-widget-full>* {
		padding-left: 24px;
		padding-right: 24px
	}

	.nk-sidebar-widget-full .toggle-expand-content {
		padding-left: 0;
		padding-right: 0
	}

	.nk-sidebar-widget-full .toggle-expand-content>* {
		padding-left: 24px;
		padding-right: 24px
	}

	.nk-sidebar-widget-sap {
		border-bottom: 1px solid #e5e9f2
	}

	.nk-sidebar-footer {
		background-color: #f5f6fa;
		margin-top: auto;
		padding: 1.75rem 24px 1.75rem
	}

	.is-light .nk-sidebar-footer {
		background: #fff
	}

	.is-dark .nk-sidebar-footer {
		background-color: #101924
	}

	.is-theme .nk-sidebar-footer {
		background-color: #29347a
	}

	.nk-sidebar-body {
		position: relative
	}

	.nk-sidebar-body .simplebar-content {
		padding-bottom: .25rem !important;
		min-height: 100%;
		display: flex;
		flex-direction: column
	}

	.nk-sidebar-body .simplebar-scroll-content {
		min-height: 100%;
		width: 100%
	}

	.nk-sidebar-content {
		display: flex;
		flex-direction: column;
		height: calc(100vh - 65px)
	}

	.nk-sidebar-content .nk-sidebar-menu {
		padding-top: 1.5rem;
		padding-bottom: 3rem
	}

	.nk-sidebar-content .nk-sidebar-menu[data-simplebar] {
		height: 100%
	}

	.nk-sidebar-content[data-simplebar]>div {
		width: 100%
	}

	.nk-sidebar-profile-fixed {
		position: fixed;
		bottom: 0;
		width: 100%;
		background: #f5f6fa
	}

	.is-dark .nk-sidebar-profile-fixed {
		background: #101924
	}

	.is-theme .nk-sidebar-profile-fixed {
		background: #29347a
	}

	.nk-sidebar.is-theme .user-balance-alt,
	.nk-sidebar.is-dark .user-balance-alt {
		color: #c4cefe
	}

	.nk-profile-fixed {
		position: fixed;
		bottom: 0
	}

	.nk-profile-toggle {
		display: block;
		border-bottom: 1px solid #e5e9f2
	}

	.nk-profile-content {
		background: #fff;
		border-bottom: 1px solid #e5e9f2
	}

	.nk-profile-menu .nk-profile-content {
		background: #f5f6fa
	}

	.nk-profile-menu>* {
		padding-left: 24px;
		padding-right: 24px
	}

	.nk-profile-menu .toggle-expand-content {
		padding-left: 0;
		padding-right: 0
	}

	.nk-profile-menu .toggle-expand-content>* {
		padding-left: 24px;
		padding-right: 24px
	}

	@keyframes overlay-fade-in {
		0% {
			opacity: 0
		}

		100% {
			opacity: 1
		}
	}

	@media (max-width: 991.98px) {
		.nk-sidebar-mobile {
			width: 290px !important
		}
	}

	@media (min-width: 1200px) {
		.nk-sidebar-content .nk-sidebar-menu {
			padding-top: 1rem;
			padding-bottom: 2.5rem
		}

		.nk-sidebar {
			overflow: hidden;
			transform: translateX(0);
			width: 290px
		}

		.nk-sidebar+.nk-wrap,
		.nk-sidebar-overlay+.nk-wrap {
			padding-left: 290px
		}

		.nk-sidebar+.nk-wrap>.nk-header-fixed,
		.nk-sidebar-overlay+.nk-wrap>.nk-header-fixed {
			left: 290px
		}

		.nk-sidebar.is-compact:not(.has-hover) {
			width: 74px
		}

		.nk-sidebar.is-compact:not(.has-hover) .logo-img {
			opacity: 0;
			transition: opacity .2s linear
		}

		.nk-sidebar.is-compact:not(.has-hover) .user-card {
			position: relative;
			left: -5px
		}

		.nk-sidebar.is-compact:not(.has-hover) .user-info {
			opacity: 0
		}

		.nk-sidebar.is-compact:not(.has-hover) .nk-sidebar-profile .dropdown-menu {
			opacity: 0
		}

		.nk-sidebar.is-compact+.nk-wrap {
			padding-left: 74px
		}

		.nk-sidebar.is-compact+.nk-wrap>.nk-header-fixed {
			left: 74px
		}

		.nk-sidebar-overlay {
			display: none
		}
	}

	@media (min-width: 1200px) {
		.nk-sidebar {
			transform: translateX(0)
		}
	}

	.nk-menu li a {
		vertical-align: middle;
		display: flex;
		position: relative;
		align-items: center;
		transition: color .3s, background-color .3s
	}

	.nk-menu-item {
		padding: 2px 0
	}

	.nk-menu-sub .nk-menu-item {
		padding: 1px 0
	}

	.nk-menu-item.has-sub {
		position: relative
	}

	.nk-menu>.nk-menu-item.menu-without-icon>.nk-menu-sub .nk-menu-link {
		padding-left: 0
	}

	.nk-menu-link {
		padding: .625rem 40px .625rem 24px;
		color: #6e82a5;
		font-family: Nunito, sans-serif;
		font-weight: 700;
		font-size: 15px;
		letter-spacing: .01em;
		text-transform: none;
		line-height: 1.25rem
	}

	.nk-menu-link:hover,
	.active>.nk-menu-link {
		color: #7f8dff
	}

	.nk-menu-link:hover .count,
	.active>.nk-menu-link .count {
		color: #7f8dff
	}

	.nk-menu-sub .nk-menu-link {
		padding: .375rem 40px .375rem 36px;
		font-family: Roboto, sans-serif;
		font-weight: 400;
		font-size: 14px;
		letter-spacing: normal;
		text-transform: none;
		line-height: 1.25rem;
		color: #6e82a5
	}

	.nk-menu-link.is-disable {
		cursor: default
	}

	.nk-menu-link.is-disable:hover,
	.active>.nk-menu-link.is-disable {
		color: #6e82a5
	}

	.nk-menu-link.is-disable:hover .count,
	.active>.nk-menu-link.is-disable .count {
		color: #6e82a5
	}

	.is-light .nk-menu-link {
		color: #526484
	}

	.is-theme .nk-menu-link {
		color: #9cadfd
	}

	.is-light .nk-menu-link:hover,
	.is-light .active>.nk-menu-link {
		color: #7f8dff
	}

	.is-theme .nk-menu-link:hover,
	.is-theme .active>.nk-menu-link {
		color: #fff
	}

	.nk-menu-link span.small {
		color: #8094ae;
		margin-left: .5rem
	}

	.nk-menu-icon {
		font-weight: normal;
		letter-spacing: normal;
		width: 36px;
		line-height: 1;
		flex-grow: 0;
		flex-shrink: 0;
		color: #8094ae
	}

	.is-theme .nk-menu-icon {
		color: #9cadfd
	}

	.nk-menu-icon svg,
	.nk-menu-icon img {
		width: 36px
	}

	.nk-menu-icon .icon {
		font-size: 24px;
		letter-spacing: normal;
		vertical-align: middle;
		color: currentColor;
		transition: color .4s, background-color .4s
	}

	.nk-menu-link:hover .nk-menu-icon,
	.nk-menu-item.active>.nk-menu-link .nk-menu-icon,
	.nk-menu-item.current-menu>.nk-menu-link .nk-menu-icon {
		color: #7f8dff
	}

	.is-theme .nk-menu-link:hover .nk-menu-icon,
	.is-theme .nk-menu-item.active>.nk-menu-link .nk-menu-icon,
	.is-theme .nk-menu-item.current-menu>.nk-menu-link .nk-menu-icon {
		color: #fff
	}

	.nk-menu-link.is-disable:hover .nk-menu-icon {
		color: #8094ae
	}

	.is-theme .nk-menu-link.is-disable:hover .nk-menu-icon {
		color: #c4cefe
	}

	.nk-menu-text {
		flex-grow: 1;
		display: inline-block;
		white-space: nowrap
	}

	.nk-menu-badge {
		border-radius: 3px;
		padding: 0 .4rem;
		font-size: 11px;
		color: #798bff;
		background: #eff1ff;
		position: absolute;
		top: 50%;
		right: 24px;
		transform: translateY(-50%)
	}

	.has-sub .nk-menu-badge {
		right: 48px
	}

	.is-dark .nk-menu-badge {
		color: #9cabff;
		background: #203247
	}

	.is-theme .nk-menu-badge {
		color: #c4cefe;
		background: #3947a8
	}

	.nk-menu-main .nk-menu-sub .nk-menu-badge {
		color: #798bff;
		background: #eff1ff
	}

	.nk-menu-heading {
		padding: 0.25rem 24px 0.5rem;
		color: #8094ae
	}

	.is-theme .nk-menu-heading {
		color: #7990fd
	}

	.nk-menu-item+.nk-menu-heading {
		padding-top: 2.5rem
	}

	.nk-menu-heading .overline-title {
		color: inherit;
		white-space: nowrap
	}

	.nk-menu-heading span {
		font-size: 13px;
		font-weight: 400
	}

	.nk-menu-hr {
		margin: 1.25rem 0;
		border-bottom: 1px solid #dbdfea
	}

	.is-dark .nk-menu-hr {
		border-color: rgba(255, 255, 255, 0.12)
	}

	.is-theme .nk-menu-hr {
		border-color: rgba(255, 255, 255, 0.12)
	}

	.nk-menu-hr+.nk-menu-heading {
		padding-top: 1rem
	}

	.nk-menu-sub {
		padding-bottom: .25rem
	}

	.nk-menu-toggle+.nk-menu-sub {
		display: none
	}

	.active>.nk-menu-sub {
		display: block
	}

	.nk-menu-sub .nk-menu-link:hover {
		color: #6576ff
	}

	.is-theme .nk-menu-sub .nk-menu-link:hover {
		color: #fff
	}

	.nk-menu-sub .active>.nk-menu-link {
		color: #6576ff
	}

	.is-theme .nk-menu-sub .active>.nk-menu-link {
		color: #fff
	}

	.nk-menu-sub .nk-menu-icon {
		width: 24px;
		margin-top: -1px
	}

	.nk-menu-sub .nk-menu-icon .icon {
		margin-top: -1px;
		font-size: 1.2em
	}

	.nk-menu-toggle {
		position: relative
	}

	.nk-menu-toggle:after {
		position: absolute;
		font-family: "Nioicon";
		top: 50%;
		content: "";
		right: 1.25rem;
		transform: translateY(-50%);
		font-size: 1rem;
		color: #8094ae;
		transition: transform .3s, color .1s, opacity .3s ease .3s
	}

	.is-dark .nk-menu-toggle:after,
	.is-theme .nk-menu-toggle:after {
		color: rgba(255, 255, 255, 0.4)
	}

	.has-sub.active>.nk-menu-toggle:after {
		transform: translateY(-50%) rotate(90deg)
	}

	.nk-menu .count {
		display: inline-block;
		font-size: .85em;
		margin-left: .25rem;
		color: #8094ae;
		line-height: 1
	}

	.nk-menu-icon-colored .nk-menu-icon {
		color: #6576ff
	}

	.nk-menu-tooltip {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0
	}

	.nk-menu-trigger {
		margin-left: -0.25rem;
		margin-right: 1.125rem
	}

	@media (min-width: 1200px) {
		.is-compact:not(.has-hover) .nk-menu-text {
			opacity: 0;
			transition: .4s linear
		}

		.is-compact:not(.has-hover) .nk-menu-badge,
		.is-compact:not(.has-hover) .nk-menu-toggle:after {
			transition: none;
			opacity: 0;
			pointer-events: none
		}

		.is-compact:not(.has-hover) .nk-menu-sub {
			display: none !important
		}

		.is-compact:not(.has-hover) .nk-menu-heading {
			position: relative
		}

		.is-compact:not(.has-hover) .nk-menu-heading .overline-title {
			opacity: 0
		}

		.is-compact:not(.has-hover) .nk-menu-heading:not(:first-child):before {
			position: absolute;
			content: '';
			height: 1px;
			width: 100%;
			left: 0;
			top: 50%;
			background-color: #e5e9f2
		}

		.is-compact.is-theme:not(.has-hover) .nk-menu-heading:not(:first-child):before {
			background-color: #3644a0
		}

		.is-compact.is-dark:not(.has-hover) .nk-menu-heading:not(:first-child):before {
			background-color: #203247
		}

		.is-compact .nk-menu-badge {
			transition: opacity .3s ease .3s
		}

		.is-compact .nk-menu-text {
			white-space: nowrap
		}
	}

	.nk-menu+.nk-menu-sm {
		padding-top: 5rem
	}

	.nk-menu-sm .nk-menu-heading {
		padding-bottom: .25rem;
		color: #526484
	}

	.nk-menu-sm .nk-menu-link {
		padding-top: .25rem;
		padding-bottom: .25rem;
		color: #526484
	}

	.nk-menu-sm .nk-menu-link:hover {
		color: #7f8dff
	}

	.nk-menu-sm .nk-menu-icon {
		width: 1.375rem
	}

	.nk-menu-sm .nk-menu-icon .icon {
		font-size: 1rem
	}

	.nk-menu-sm .nk-menu-text {
		font-size: 12px;
		line-height: 1.125rem
	}

	.nk-menu+.nk-menu-md {
		padding-top: 5rem
	}

	.nk-menu-md .nk-menu-heading {
		padding-bottom: .25rem;
		color: #526484
	}

	.nk-menu-md .nk-menu-link {
		padding-top: .325rem;
		padding-bottom: .325rem;
		color: #526484
	}

	.nk-menu-md .nk-menu-link:hover {
		color: #7f8dff
	}

	.nk-menu-md .nk-menu-icon {
		width: 1.375rem
	}

	.nk-menu-md .nk-menu-icon .icon {
		font-size: 1.25rem
	}

	.nk-menu-md .nk-menu-text {
		font-size: 12px;
		line-height: 1.125rem
	}

	.nk-menu-inline {
		display: flex
	}

	.nk-menu-inline .nk-menu-link {
		padding-left: 0;
		padding-right: 0
	}

	.nk-menu-footer {
		display: flex
	}

	.nk-menu-footer .nk-menu-link {
		padding-left: 0;
		padding-right: 0;
		padding-top: .25rem;
		padding-bottom: .25rem;
		color: #8094ae;
		font-family: Roboto, sans-serif;
		font-weight: 500
	}

	.nk-menu-footer .nk-menu-link:hover {
		color: #7f8dff
	}

	.is-theme .nk-menu-footer .nk-menu-link {
		color: #c4cefe
	}

	.nk-menu-footer .nk-menu-icon {
		width: 1.375rem;
		color: #6576ff
	}

	.nk-menu-footer .nk-menu-icon .icon {
		font-size: 1rem
	}

	.nk-menu-footer .nk-menu-text {
		font-size: 12px;
		line-height: 1.125rem
	}

	.nk-menu-main.nk-menu {
		padding-top: 0.75rem
	}

	.nk-menu-main .nk-menu-link {
		color: #526484;
		padding-left: 24px
	}

	.nk-menu-main .nk-menu-sub {
		padding: 0;
		margin: 0;
		transition: none
	}

	.nk-menu-main .nk-menu-sub .nk-menu-link {
		color: #526484
	}

	.nk-menu-main .nk-menu-sub .nk-menu-sub {
		border-left: 1px solid #dbdfea;
		margin: 0.25rem 0 0.25rem 24px;
		padding-bottom: 0
	}

	.nk-menu-main .nk-menu-sub .nk-menu-sub .nk-menu-link {
		padding-left: .875rem
	}

	.nk-menu-main .nk-menu-link:hover,
	.nk-menu-main .nk-menu-link:focus,
	.nk-menu-main .nk-menu-item.active>.nk-menu-link,
	.nk-menu-main .nk-menu-item.current-menu>.nk-menu-link,
	.nk-menu-main .nk-menu-item:hover>.nk-menu-link {
		color: #7f8dff
	}

	.nk-menu-main>li>.nk-menu-link {
		text-transform: uppercase;
		letter-spacing: 0.05rem
	}

	.nk-menu-main.ui-s2>li>.nk-menu-link {
		font-family: Roboto, sans-serif;
		font-weight: 500;
		text-transform: initial;
		letter-spacing: -0.01rem
	}

	@media (max-width: 991.98px) {
		.nk-menu-main.nk-menu {
			max-height: calc(100vh - 65px);
			overflow: auto
		}
	}

	@media (min-width: 992px) {
		.nk-menu-main.nk-menu {
			padding: 0 1.5rem 0 2rem
		}

		.nk-menu-main>li {
			padding: 0;
			display: inline-block
		}

		.nk-menu-main>li.nk-menu-item {
			padding: 0 1rem
		}

		.nk-menu-main>li.nk-menu-item>.nk-menu-link {
			padding: 1.5rem 0;
			font-size: 14px
		}

		.nk-menu-main>li>.nk-menu-link:before {
			position: absolute;
			content: '';
			bottom: 0;
			left: 0;
			right: 0;
			height: 3px;
			background: #7f8dff;
			border-radius: 3px 3px 0 0;
			opacity: 0
		}

		.nk-menu-main>li.nk-menu-item.active>.nk-menu-link:before,
		.nk-menu-main>li.nk-menu-item.current-menu>.nk-menu-link:before {
			opacity: 1
		}

		.nk-menu-main>li>.nk-menu-sub {
			border-top-left-radius: 0;
			border-top-right-radius: 0
		}

		.nk-menu-main .nk-menu-link {
			padding: .5rem 1.25rem;
			font-size: 13px
		}

		.nk-menu-main .nk-menu-icon {
			display: none
		}

		.nk-menu-main .nk-menu-text {
			line-height: 1.5rem
		}

		.nk-menu-main .nk-menu-item .nk-menu-toggle:after {
			line-height: 1;
			position: static;
			transform: translateY(0);
			content: "";
			vertical-align: middle;
			margin-left: 0.5rem;
			margin-right: -2px;
			color: rgba(128, 148, 174, 0.7);
			margin-top: -1px;
			transition: color .1s
		}

		.nk-menu-main .nk-menu-item:hover>.nk-menu-sub {
			opacity: 1;
			visibility: visible;
			margin-top: 0
		}

		.nk-menu-main .nk-menu-sub {
			position: absolute;
			left: 0;
			top: 100%;
			width: 200px;
			background: #fff;
			border: 1px solid #e5e9f2;
			box-shadow: 0 0.125rem 0.25rem rgba(43, 55, 72, 0.15);
			border-radius: 4px;
			padding: .5rem 0;
			opacity: 0;
			visibility: hidden;
			margin-top: 6px;
			transition: opacity .4s, margin .2s;
			display: block !important
		}

		.nk-menu-main .nk-menu-sub .nk-menu-link {
			padding-top: .5rem;
			padding-bottom: .5rem
		}

		.nk-menu-main .nk-menu-sub .nk-menu-sub {
			top: -9px;
			padding: .5rem 0;
			border: 1px solid #e5e9f2;
			margin: 0;
			margin-top: 6px;
			left: 100%;
			margin-left: -0.75rem
		}

		.nk-menu-main .nk-menu-sub .nk-menu-sub .nk-menu-link {
			padding-left: 1.5rem
		}

		.nk-menu-main .nk-menu-sub .nk-menu-item:hover>a {
			background: #f5f6fa
		}

		.nk-menu-main .nk-menu-sub .nk-menu-toggle:after {
			content: ""
		}

		.is-dark .nk-menu-main>li>.nk-menu-link:before,
		.is-theme .nk-menu-main>li>.nk-menu-link:before {
			border-radius: 0;
			bottom: auto;
			top: 0
		}

		.is-dark .nk-menu-main>li>.nk-menu-link {
			color: #9faec2
		}

		.is-dark .nk-menu-main>li>.nk-menu-link.nk-menu-toggle:after {
			color: rgba(128, 148, 174, 0.7)
		}

		.is-dark .nk-menu-main>li:hover>.nk-menu-link,
		.is-dark .nk-menu-main>li.active>.nk-menu-link,
		.is-dark .nk-menu-main>li.current-menu>.nk-menu-link,
		.is-dark .nk-menu-main>li>.nk-menu-link:hover {
			color: #fff
		}

		.is-theme .nk-menu-main>li>.nk-menu-link {
			color: #c4cefe
		}

		.is-theme .nk-menu-main>li>.nk-menu-link.nk-menu-toggle:after {
			color: rgba(196, 206, 254, 0.7)
		}

		.is-theme .nk-menu-main>li:hover>.nk-menu-link,
		.is-theme .nk-menu-main>li.active>.nk-menu-link,
		.is-theme .nk-menu-main>li.current-menu>.nk-menu-link,
		.is-theme .nk-menu-main>li>.nk-menu-link:hover {
			color: #fff
		}
	}

	.nk-sidebar .nk-menu>li .nk-menu-sub .nk-menu-link {
		padding-left: 60px
	}

	.nk-sidebar .nk-menu>li .nk-menu-sub .nk-menu-sub {
		margin-top: .5rem;
		margin-bottom: .5rem;
		padding-bottom: 0;
		margin-left: 60px;
		border-left: 1px solid #dbdfea
	}

	.nk-sidebar .nk-menu>li .nk-menu-sub .nk-menu-sub .nk-menu-link {
		padding-left: 1rem
	}

	.nk-sidebar.is-dark .nk-menu>li .nk-menu-sub .nk-menu-sub,
	.nk-sidebar.is-theme .nk-menu>li .nk-menu-sub .nk-menu-sub {
		border-color: rgba(255, 255, 255, 0.12)
	}

	.nk-footer {
		margin-top: auto;
		background: #fff;
		border-top: 1px solid #e5e9f2;
		padding: 20px 6px
	}

	.nk-footer.is-dark:not([class*=bg-]) {
		background: #2b357e
	}

	.nk-footer-wrap {
		display: flex;
		justify-content: space-between;
		align-items: center;
		flex-wrap: wrap
	}

	.nk-footer-copyright {
		color: #8094ae
	}

	.nk-footer-copyright a {
		color: inherit
	}

	.nk-footer-copyright a:hover {
		color: #6576ff
	}

	@media (min-width: 576px) {
		.nk-footer {
			padding: 20px 22px
		}
	}

	@media (min-width: 992px) {
		.nk-footer-fluid {
			padding-left: 24px;
			padding-right: 24px
		}
	}

	@media (min-width: 1660px) {
		.nk-footer-fluid {
			padding-left: 44px;
			padding-right: 44px
		}
	}

	.nk-split {
		position: relative;
		display: flex
	}

	.nk-split-page {
		min-height: 100vh
	}

	.nk-split-content {
		position: relative;
		flex-shrink: 0;
		width: 100%;
		min-height: 100%
	}

	@media (min-width: 768px) {
		.nk-split-content-md {
			width: 642px
		}
	}

	.nk-split-stretch {
		flex-grow: 1;
		flex-shrink: 1
	}

	@media (max-width: 991.98px) {
		.nk-split-stretch.toggle-break-lg {
			width: 460px
		}
	}

	@media (max-width: 575.98px) {
		.nk-split-sm {
			flex-wrap: wrap
		}
	}

	@media (max-width: 767.98px) {
		.nk-split-md {
			flex-wrap: wrap
		}
	}

	@media (max-width: 991.98px) {
		.nk-split-lg {
			flex-wrap: wrap
		}
	}

	@media (max-width: 1199.98px) {
		.nk-split-xl {
			flex-wrap: wrap
		}
	}

	@media (max-width: 1539.98px) {
		.nk-split-xxl {
			flex-wrap: wrap
		}
	}

	canvas {
		width: 100%;
		max-width: 100%
	}

	a:hover {
		text-decoration: none
	}

	p:last-child {
		margin-bottom: 0
	}

	.del {
		text-decoration: line-through
	}

	span[data-toggle=tooltip]:focus {
		outline: none
	}

	.g-0 {
		margin: 0 !important
	}

	.g-0>li,
	.g-0>div {
		padding: 0 !important
	}

	.gx-0 {
		margin-left: 0 !important;
		margin-right: 0 !important
	}

	.gx-0>li,
	.gx-0>div {
		padding-left: 0 !important;
		padding-right: 0 !important
	}

	.gy-0 {
		margin-top: 0 !important;
		margin-bottom: 0 !important
	}

	.gy-0>li,
	.gy-0>div {
		padding-top: 0 !important;
		padding-bottom: 0 !important
	}

	.g-1 {
		margin: -.1875rem !important
	}

	.g-1>li,
	.g-1>div {
		padding: .1875rem !important
	}

	.gx-1 {
		margin-left: -.1875rem !important;
		margin-right: -.1875rem !important
	}

	.gx-1>li,
	.gx-1>div {
		padding-left: .1875rem !important;
		padding-right: .1875rem !important
	}

	.gy-1 {
		margin-top: -.1875rem !important;
		margin-bottom: -.1875rem !important
	}

	.gy-1>li,
	.gy-1>div {
		padding-top: .1875rem !important;
		padding-bottom: .1875rem !important
	}

	.g-2 {
		margin: -.375rem !important
	}

	.g-2>li,
	.g-2>div {
		padding: .375rem !important
	}

	.gx-2 {
		margin-left: -.375rem !important;
		margin-right: -.375rem !important
	}

	.gx-2>li,
	.gx-2>div {
		padding-left: .375rem !important;
		padding-right: .375rem !important
	}

	.gy-2 {
		margin-top: -.375rem !important;
		margin-bottom: -.375rem !important
	}

	.gy-2>li,
	.gy-2>div {
		padding-top: .375rem !important;
		padding-bottom: .375rem !important
	}

	.g-3 {
		margin: -.5rem !important
	}

	.g-3>li,
	.g-3>div {
		padding: .5rem !important
	}

	.gx-3 {
		margin-left: -.5rem !important;
		margin-right: -.5rem !important
	}

	.gx-3>li,
	.gx-3>div {
		padding-left: .5rem !important;
		padding-right: .5rem !important
	}

	.gy-3 {
		margin-top: -.5rem !important;
		margin-bottom: -.5rem !important
	}

	.gy-3>li,
	.gy-3>div {
		padding-top: .5rem !important;
		padding-bottom: .5rem !important
	}

	.g-4 {
		margin: -.75rem !important
	}

	.g-4>li,
	.g-4>div {
		padding: .75rem !important
	}

	.gx-4 {
		margin-left: -.75rem !important;
		margin-right: -.75rem !important
	}

	.gx-4>li,
	.gx-4>div {
		padding-left: .75rem !important;
		padding-right: .75rem !important
	}

	.gy-4 {
		margin-top: -.75rem !important;
		margin-bottom: -.75rem !important
	}

	.gy-4>li,
	.gy-4>div {
		padding-top: .75rem !important;
		padding-bottom: .75rem !important
	}

	.g-5 {
		margin: -1.375rem !important
	}

	.g-5>li,
	.g-5>div {
		padding: 1.375rem !important
	}

	.gx-5 {
		margin-left: -1.375rem !important;
		margin-right: -1.375rem !important
	}

	.gx-5>li,
	.gx-5>div {
		padding-left: 1.375rem !important;
		padding-right: 1.375rem !important
	}

	.gy-5 {
		margin-top: -1.375rem !important;
		margin-bottom: -1.375rem !important
	}

	.gy-5>li,
	.gy-5>div {
		padding-top: 1.375rem !important;
		padding-bottom: 1.375rem !important
	}

	.g-gs {
		margin: -14px !important
	}

	.g-gs>li,
	.g-gs>div {
		padding: 14px !important
	}

	.gx-gs {
		margin-left: -14px !important;
		margin-right: -14px !important
	}

	.gx-gs>li,
	.gx-gs>div {
		padding-left: 14px !important;
		padding-right: 14px !important
	}

	.gy-gs {
		margin-top: -14px !important;
		margin-bottom: -14px !important
	}

	.gy-gs>li,
	.gy-gs>div {
		padding-top: 14px !important;
		padding-bottom: 14px !important
	}

	.gap {
		width: 100%;
		display: block;
		height: 28px
	}

	.gap-0 {
		height: 0
	}

	.gap-1 {
		height: .375rem
	}

	.gap-2 {
		height: .75rem
	}

	.gap-3 {
		height: 1rem
	}

	.gap-4 {
		height: 1.5rem
	}

	.gap-5 {
		height: 2.75rem
	}

	.gap-gs {
		height: 28px
	}

	.gap-sm {
		height: .75rem
	}

	.gap-md {
		height: 1.25rem
	}

	.gap-lg {
		height: 2rem
	}

	.gap-xl {
		height: 2.5rem
	}

	.gap-10px {
		height: 10px
	}

	.gap-20px {
		height: 20px
	}

	.gap-30px {
		height: 30px
	}

	.gap-40px {
		height: 40px
	}

	.gap-50px {
		height: 50px
	}

	.gap-60px {
		height: 60px
	}

	.gap-70px {
		height: 70px
	}

	.gap-80px {
		height: 80px
	}

	.gap-90px {
		height: 90px
	}

	.gap-100px {
		height: 100px
	}

	.li-col2x>li {
		width: 50%;
		float: left
	}

	.li-col3x>li {
		width: 33.33333%;
		float: left
	}

	.li-col4x>li {
		width: 25%;
		float: left
	}

	.alert-cta {
		display: flex;
		justify-content: space-between;
		align-items: center
	}

	.alert-actions {
		display: inline-flex;
		align-items: center
	}

	.alert-actions a+a {
		margin-left: 1rem
	}

	.accordion {
		border-radius: 4px;
		border: 1px solid #dbdfea;
		background: #fff
	}

	.accordion-heading {
		padding-bottom: 1.5rem
	}

	.accordion-body {
		border-radius: 4px
	}

	.accordion-item:not(:last-child) .accordion-head {
		border-bottom: 1px solid #dbdfea
	}

	.accordion-item:not(:last-child) .accordion-inner {
		border-bottom: 1px solid #dbdfea
	}

	.accordion-item:last-child .accordion-inner {
		border-top: 1px solid #dbdfea
	}

	.accordion-head {
		padding: 1rem 2.25rem 1rem 1.25rem;
		display: block;
		position: relative
	}

	.accordion-head .title {
		margin-bottom: 0;
		font-size: 1rem;
		color: #364a63;
		line-height: 1.3
	}

	.accordion-head.collapsed .title {
		color: #526484
	}

	.accordion-inner {
		padding: 1rem 1.25rem 1.25rem
	}

	.accordion-icon {
		position: absolute;
		right: 1rem;
		top: 50%;
		font-size: 1rem;
		color: #364a63;
		transform: translateY(-50%);
		transition: rotate 0.4s;
		width: 20px;
		height: 20px;
		text-align: center;
		line-height: 20px
	}

	.accordion-icon:before {
		content: "";
		font-family: "Nioicon";
		transition: 0.4s
	}

	.accordion-head.collapsed .accordion-icon:before {
		content: ""
	}

	@media (min-width: 768px) {
		.accordion-head {
			padding: 1rem 1.5rem
		}

		.accordion-inner {
			padding: 1rem 1.5rem 1.25rem
		}

		.accordion-icon {
			right: 1.5rem
		}
	}

	.accordion-s2 {
		border: none
	}

	.accordion-s2 .accordion-icon {
		right: 0
	}

	.accordion-s2 .accordion-icon:before {
		content: ""
	}

	.accordion-s2 .accordion-head {
		padding: .5rem 2.25rem .5rem 0;
		border: none !important
	}

	.accordion-s2 .accordion-head .title {
		font-size: 1.1rem;
		color: #6576ff
	}

	.accordion-s2 .accordion-head.collapsed .title {
		color: #526484
	}

	.accordion-s2 .accordion-head.collapsed .accordion-icon:before {
		content: ""
	}

	.accordion-s2 .accordion-inner {
		padding: .5rem 0 .625rem;
		border: none !important
	}

	@media (min-width: 768px) {
		.accordion-s2 .accordion-head {
			padding: .5rem 2.25rem .5rem 0
		}

		.accordion-s2 .accordion-inner {
			padding: .5rem 0 .625rem
		}
	}

	.accordion-s3 {
		border: none
	}

	.accordion-s3 .accordion-icon {
		left: 0;
		right: auto
	}

	.accordion-s3 .accordion-icon:before {
		content: ""
	}

	.accordion-s3 .accordion-head {
		padding: .5rem 0 .5rem 2.25rem;
		border: none !important
	}

	.accordion-s3 .accordion-head .title {
		font-size: 1.1rem;
		color: #6576ff
	}

	.accordion-s3 .accordion-head.collapsed .title {
		color: #526484
	}

	.accordion-s3 .accordion-head.collapsed .accordion-icon:before {
		content: ""
	}

	.accordion-s3 .accordion-inner {
		padding: .5rem 0 .625rem;
		border: none !important
	}

	@media (min-width: 768px) {
		.accordion-s3 .accordion-head {
			padding: .5rem 0 .5rem 2.25rem
		}

		.accordion-s3 .accordion-inner {
			padding: .5rem 2.25rem .625rem
		}
	}

	.dot {
		position: relative;
		display: inline-block;
		border-radius: 50%;
		height: 8px;
		width: 8px
	}

	.dot-label:after {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		border-radius: 50%;
		background: #fff;
		content: '';
		transform: scale(0.65)
	}

	.dot.sq {
		border-radius: 3px
	}

	.dot.sq:after {
		border-radius: 3px
	}

	.dot-xs {
		height: 4px;
		width: 4px
	}

	.dot-sm {
		height: 6px;
		width: 6px
	}

	.dot-md {
		height: 8px;
		width: 8px
	}

	.dot-rg {
		height: 10px;
		width: 10px
	}

	.dot-lg {
		height: 12px;
		width: 12px
	}

	.dot-xl {
		height: 16px;
		width: 16px
	}

	.dot-primary {
		background: #6576ff
	}

	.dot-secondary {
		background: #364a63
	}

	.dot-success {
		background: #1ee0ac
	}

	.dot-info {
		background: #09c2de
	}

	.dot-warning {
		background: #f4bd0e
	}

	.dot-danger {
		background: #e85347
	}

	.dot-dark {
		background: #1c2b46
	}

	.dot-gray {
		background: #8091a7
	}

	.dot-light {
		background: #e5e9f2
	}

	.dot-lighter {
		background: #f5f6fa
	}

	.list:not(:last-child) {
		margin-bottom: 1rem
	}

	.list li {
		position: relative;
		padding-left: 1.5rem;
		line-height: 1.5rem
	}

	.list li:not(:last-child) {
		padding-bottom: .5rem
	}

	.list li:before {
		position: absolute;
		left: 0;
		font-size: 14px;
		line-height: 1.5rem;
		font-family: "Nioicon";
		content: ""
	}

	.list li span {
		color: #8094ae
	}

	.list li ul {
		margin-top: .5rem
	}

	.list-checked li:before {
		color: #6576ff;
		content: ""
	}

	.list-checked-circle li:before {
		color: #6576ff;
		content: ""
	}

	.list-cross li:before {
		color: rgba(232, 83, 71, 0.8);
		content: ""
	}

	.list-status {
		list-style: none;
		line-height: 1.3
	}

	.list-status li {
		display: inline-flex;
		align-items: center;
		padding-right: 1rem;
		vertical-align: middle
	}

	.list-status .icon {
		margin-right: .375rem;
		line-height: 1.3
	}

	.list-lg li {
		padding-left: 2rem
	}

	.list-lg li:not(:last-child) {
		padding-bottom: .75rem
	}

	.list-lg li:before {
		font-size: 1.35rem
	}

	.list-sm li {
		padding-left: 1.2rem
	}

	.list-sm li:not(:last-child) {
		padding-bottom: .35rem
	}

	.list-sm li:before {
		font-size: 12px
	}

	.list-step li {
		color: #8094ae;
		font-weight: 500
	}

	.list-step li:before {
		content: ""
	}

	.list-step li.list-step-current {
		color: #364a63
	}

	.list-step li.list-step-current:before {
		content: "";
		color: #6576ff
	}

	.list-step li.list-step-done {
		color: #526484
	}

	.list-step li.list-step-done:before {
		content: "";
		color: #1ee0ac
	}

	.list-plain a {
		color: #526484;
		display: block;
		line-height: 1.3;
		padding: 0.5rem 0
	}

	.list-plain a:hover {
		color: #6576ff
	}

	.list-category a {
		font-weight: 500
	}

	.list-download li>a {
		display: inline-block;
		padding: .25rem
	}

	.list-download li>a>.icon {
		margin: 0 .25rem;
		font-size: 1.25rem
	}

	.list-primary li:before {
		color: #6576ff
	}

	.list-secondary li:before {
		color: #364a63
	}

	.list-success li:before {
		color: #1ee0ac
	}

	.list-info li:before {
		color: #09c2de
	}

	.list-warning li:before {
		color: #f4bd0e
	}

	.list-danger li:before {
		color: #e85347
	}

	.list-dark li:before {
		color: #1c2b46
	}

	.list-gray li:before {
		color: #8091a7
	}

	.list-light li:before {
		color: #e5e9f2
	}

	.list-lighter li:before {
		color: #f5f6fa
	}

	.link-bdr-t,
	.link-check+.link-check,
	.link-tidy li+li,
	.link-list+.link-list,
	.link-list-opt li+li,
	.link-list-plain li+li {
		border-top: 1px solid #e5e9f2
	}

	.link-bdr-b {
		border-bottom: 1px solid #e5e9f2
	}

	.link-pd-sm,
	.link-tidy.sm li,
	.link-list-plain.sm a {
		padding: 6px 1rem
	}

	.link-act-check:after,
	.link-check li.active>a:after,
	.link-check li a.active:after,
	.link-list-opt li.active>a:after,
	.link-list-opt a.active:after {
		content: "";
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		right: 1rem;
		font-family: "Nioicon"
	}

	.link-check {
		padding: .5rem 0
	}

	.link-check .divider {
		margin: .5rem 0
	}

	.link-check li {
		display: block
	}

	.link-check li>span,
	.link-check li a {
		display: block;
		line-height: 1.25rem;
		padding: .35rem 1rem
	}

	.link-check li>span {
		text-transform: uppercase;
		color: #364a63;
		font-weight: 700;
		font-size: 12px;
		letter-spacing: 1px
	}

	.link-check li a {
		display: flex;
		align-items: center;
		color: #526484;
		font-size: 13px;
		position: relative
	}

	.link-check li a:hover {
		color: #6576ff;
		background: #f5f6fa
	}

	.link-check li .icon {
		width: 1.75rem;
		font-size: 1.125rem
	}

	.link-tidy.no-bdr {
		padding: .5rem 0
	}

	.link-tidy.no-bdr li:not(.divider) {
		border-top-width: 0
	}

	.link-tidy .divider {
		margin: .5rem 0
	}

	.link-tidy li {
		position: relative;
		padding: .625rem 1.1rem;
		line-height: 1.3rem
	}

	.link-list {
		padding: .75rem 0
	}

	.link-list .divider {
		margin: .5rem 0
	}

	.link-list a {
		display: flex;
		align-items: center;
		color: #526484;
		font-size: 13px;
		line-height: 1.4rem;
		font-weight: 500;
		padding: .575rem 0;
		position: relative
	}

	.link-list a:hover {
		color: #6576ff
	}

	.link-list a .icon {
		font-size: 1.125rem;
		width: 1.5rem;
		line-height: 1
	}

	.link-list-opt.no-bdr {
		padding: .5rem 0
	}

	.link-list-opt.no-bdr li:not(.divider) {
		border-top-width: 0
	}

	.link-list-opt .divider {
		margin: .5rem 0
	}

	.link-list-opt a {
		display: flex;
		align-items: center;
		padding: .625rem 1.25rem;
		font-size: 12px;
		font-weight: 500;
		color: #526484;
		transition: all .4s;
		line-height: 1.3rem;
		position: relative
	}

	.link-list-opt a:hover {
		color: #6576ff;
		background: #f5f6fa
	}

	.link-list-opt a .icon {
		font-size: 1.125rem;
		width: 1.75rem;
		opacity: .8
	}

	.link-list-opt li.disabled>a,
	.link-list-opt a.disabled {
		pointer-events: none;
		color: #8094ae;
		opacity: 0.7
	}

	.link-list-opt .opt-head {
		padding: .25rem 1.25rem;
		color: #8094ae
	}

	.link-list-opt.ui-v2 a {
		font-weight: 400
	}

	.link-list-opt.no-bdr+.link-check {
		margin-top: -0.75rem
	}

	.link-list-opt.ui-colored li.active>a,
	.link-list-opt.ui-colored a.active {
		color: #6576ff
	}

	.link-list-menu {
		padding: .75rem 0
	}

	.link-list-menu .divider {
		margin: .5rem 0
	}

	.link-list-menu a {
		position: relative;
		display: flex;
		align-items: center;
		padding: .75rem 1.25rem;
		font-weight: 500;
		color: #526484;
		transition: all .4s;
		line-height: 1.3rem
	}

	.link-list-menu a:after {
		position: absolute;
		font-size: 1rem;
		font-family: "Nioicon";
		right: 1.25rem;
		content: "";
		color: #8094ae;
		transition: .3s ease
	}

	.link-list-menu a .icon {
		font-size: 1.125rem;
		width: 1.75rem;
		opacity: .8;
		color: #8094ae;
		margin-top: -2px
	}

	.link-list-menu li.active>a,
	.link-list-menu a.active,
	.link-list-menu a:hover,
	.link-list-menu li.active>a .icon,
	.link-list-menu a.active .icon,
	.link-list-menu a:hover .icon,
	.link-list-menu li.active>a:after,
	.link-list-menu a.active:after,
	.link-list-menu a:hover:after {
		color: #6576ff
	}

	.link-list-menu.nav {
		display: block
	}

	@media (min-width: 576px) {
		.link-list-menu a {
			padding: 1rem 1.5rem
		}
	}

	.link-list-plain.no-bdr {
		padding: .5rem 0
	}

	.link-list-plain.no-bdr li {
		border-top-width: 0
	}

	.link-list-plain .divider {
		margin: .5rem 0
	}

	.link-list-plain a {
		display: flex;
		align-items: center;
		padding: .5rem 1.25rem;
		color: #526484;
		transition: all .4s;
		line-height: 1.4rem;
		position: relative
	}

	.link-list-plain a:hover {
		color: #6576ff;
		background: #f5f6fa
	}

	.link-list-plain a .icon {
		font-size: 1.125rem;
		width: 1.75rem;
		opacity: .8;
		color: #6576ff
	}

	.link-list-plain li.active>a,
	.link-list-plain a.active {
		color: #6576ff;
		background: #f5f6fa
	}

	.link-list-plain.text-center a {
		justify-content: center;
		padding-left: 0.25rem;
		padding-right: 0.25rem
	}

	.link-list-plain.li-col2x>li {
		border-right: 1px solid #e5e9f2;
		border-bottom: 1px solid #e5e9f2;
		border-top: 0
	}

	.link-list-plain.li-col2x>li:nth-child(2n) {
		border-right: none
	}

	.link-list-plain.li-col3x>li {
		border-right: 1px solid #e5e9f2;
		border-bottom: 1px solid #e5e9f2;
		border-top: 0
	}

	.link-list-plain.li-col3x>li:nth-child(3n) {
		border-right: none
	}

	.link-list-plain.li-col4x>li {
		border-right: 1px solid #e5e9f2;
		border-bottom: 1px solid #e5e9f2;
		border-top: 0
	}

	.link-list-plain.li-col4x>li:nth-child(4n) {
		border-right: none
	}

	.link-list-template a {
		font-weight: 400
	}

	.passcode-icon {
		display: none
	}

	.passcode-icon.icon-show {
		display: block
	}

	.is-shown .passcode-icon.icon-show {
		display: none
	}

	.is-hidden .passcode-icon.icon-show {
		display: block
	}

	.is-shown .passcode-icon.icon-hide {
		display: block
	}

	.is-hidden .passcode-icon.icon-hide {
		display: none
	}

	.form-dropdown {
		position: absolute;
		right: 0;
		top: 0;
		bottom: 0;
		padding: 0 20px;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		color: #8094ae
	}

	.form-dropdown>div>span {
		margin: 0 0.5rem
	}

	.form-dropdown .dropdown>a {
		display: inline-flex
	}

	.form-clip,
	.form-text-hint {
		position: absolute;
		right: 2px;
		top: 2px;
		height: calc(2.125rem - 2px);
		display: flex;
		align-items: center;
		color: #6576ff;
		padding-left: 1rem;
		padding-right: .75rem;
		background: #fff;
		border-radius: 4px
	}

	.form-clip.sm,
	.form-text-hint.sm {
		height: calc(1.75rem + 2px)
	}

	.form-clip.lg,
	.form-text-hint.lg {
		height: calc(2.625rem + 2px)
	}

	.form-clip.xl,
	.form-text-hint.xl {
		height: calc(3.25rem + 2px)
	}

	.form-clip .icon+span,
	.form-clip span+.icon,
	.form-text-hint .icon+span,
	.form-text-hint span+.icon {
		margin-left: 0.25rem
	}

	.nk-upload-input {
		position: relative;
		z-index: 2;
		width: 100%;
		height: calc(2.125rem + 2px);
		margin: 0;
		opacity: 0
	}

	.nk-upload-label {
		position: relative;
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: 1.5rem;
		width: 100%;
		min-height: 150px;
		border-radius: 4px;
		border: 1px dashed #e5e9f2;
		padding-bottom: 0
	}

	.nk-upload-init {
		display: block;
		text-align: center
	}

	.nk-upload-files {
		padding-top: 2rem;
		display: flex;
		justify-content: center;
		margin: -0.5rem;
		padding-bottom: 2rem
	}

	.nk-upload-files li {
		position: relative;
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		flex-direction: column;
		text-align: center;
		padding: 0.5rem
	}

	.nk-upload-files li img {
		width: 60px;
		flex-shrink: 0;
		border-radius: 4px
	}

	.is-multiple .nk-upload-files li img {
		width: 40px
	}

	.is-multiple .nk-upload-files li .nk-upload-name {
		display: none
	}

	.nk-upload-name {
		margin: .5rem 0 0;
		color: #526484;
		font-size: .8125rem;
		font-weight: 500;
		width: 150px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis
	}

	.nk-upload-response {
		margin-left: auto;
		display: inline-flex;
		align-items: center
	}

	.nk-upload-response .message {
		font-size: 12px;
		color: #8094ae
	}

	.nk-upload-response .message+.icon {
		margin-left: 0.5rem
	}

	.nk-upload-response .icon:after {
		font-family: "Nioicon"
	}

	.nk-upload-response .icon+.message {
		margin-left: 0.5rem
	}

	.nk-upload-response.invalid .icon {
		color: #f4bd0e
	}

	.nk-upload-response.invalid .icon:after {
		content: ""
	}

	.nk-upload-response.valid .icon {
		color: #1ee0ac
	}

	.nk-upload-response.valid .icon:after {
		content: ""
	}

	.nk-upload-response.error .icon {
		color: #e85347
	}

	.nk-upload-response.error .icon:after {
		content: ""
	}

	.nk-upload-foot {
		display: flex;
		justify-content: space-between;
		border-top: 1px dashed #e5e9f2;
		padding: 1rem 1.25rem;
		margin: 0 -1.5rem
	}

	.nk-upload-foot>span,
	.nk-upload-foot>button {
		margin: .25rem
	}

	.form-editor-custom textarea {
		border-radius: 4px 4px 0 0
	}

	.form-editor-action {
		border: 1px solid #dbdfea;
		border-top: 0;
		border-radius: 0 0 4px 4px;
		padding: .25rem .5rem
	}

	.form-editor-action>.link {
		padding: .5rem
	}

	.form-editor-action>.link.collapsed {
		color: #8094ae
	}

	.form-editor-action>.link .icon {
		margin-right: .25rem
	}

	.form-editor-btn-group,
	.form-btn-group {
		display: flex;
		align-items: center;
		margin: -0.25rem;
		flex-wrap: wrap
	}

	.form-editor-btn-group li,
	.form-btn-group li {
		padding: .25rem;
		line-height: 0.5rem
	}

	.form-btn-group li:first-child {
		margin-right: .5rem
	}

	.form-btn-secondary {
		margin-left: auto
	}

	input[type="number"] {
		-webkit-appearance: textfield;
		-moz-appearance: textfield;
		appearance: textfield
	}

	input[type=number]::-webkit-inner-spin-button,
	input[type=number]::-webkit-outer-spin-button {
		-webkit-appearance: none
	}

	.number-spinner {
		padding-left: 3.125rem;
		padding-right: 3.125rem;
		text-align: center
	}

	.number-spinner:focus {
		border-color: #dbdfea
	}

	.number-spinner-btn {
		position: absolute;
		top: 0
	}

	.number-plus {
		right: 0;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.number-minus {
		left: 0;
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.input-group-addon {
		display: flex;
		align-items: center;
		padding: .25rem .75rem;
		background-color: #f5f6fa;
		border: 1px solid #dbdfea;
		font-size: 0.75rem;
		border-radius: 4px
	}

	.input-group-addon:not(:last-child) {
		border-right: 0;
		border-top-right-radius: 0;
		border-bottom-right-radius: 0
	}

	.input-group-addon:not(:first-child) {
		border-left: 0;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0
	}

	.page-title {
		font-family: Nunito, sans-serif;
		font-size: 1.5rem;
		font-weight: 700
	}

	@media (min-width: 992px) {
		.page-title {
			font-size: 1.75rem
		}
	}

	.overline-title {
		font-size: 11px;
		line-height: 1.2;
		letter-spacing: 0.2em;
		color: #8094ae;
		text-transform: uppercase;
		font-weight: 700;
		font-family: Roboto, sans-serif, "Helvetica Neue", Arial, "Noto Sans", sans-serif
	}

	.text-light .overline-title {
		color: #8094ae
	}

	.is-dark .overline-title {
		color: #b7c2d0
	}

	.is-theme .overline-title {
		color: #c4cefe
	}

	.overline-title-alt {
		font-family: Roboto, sans-serif, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
		font-weight: 700;
		line-height: 1.2;
		letter-spacing: 0.15em;
		font-size: 11px;
		color: #8094ae;
		text-transform: uppercase
	}

	.is-dark .overline-title-alt {
		color: #8094ae
	}

	.is-theme .overline-title-alt {
		color: #c4cefe
	}

	.overline-title-sap {
		position: relative;
		display: inline-block;
		margin-bottom: 0;
		padding-left: .35rem;
		padding-right: .25rem;
		color: #b6c6e3
	}

	.overline-title-sap:before,
	.overline-title-sap:after {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		width: 20px;
		height: 1px;
		content: '';
		background: #b6c6e3
	}

	.overline-title-sap:before {
		right: 100%
	}

	.overline-title-sap:after {
		left: 100%
	}

	.caption-text {
		font-size: 16px;
		font-weight: 400;
		line-height: 1.3;
		letter-spacing: -0.01em
	}

	.caption-text+.sub-text,
	.caption-text+.sub-text-sm {
		margin-top: 0.5rem;
		display: block
	}

	.lead-text {
		font-size: 0.875rem;
		font-weight: 700;
		color: #364a63;
		display: block
	}

	.lead-text+.sub-text {
		font-size: 12px
	}

	.lead-text span {
		color: #526484;
		font-weight: 400
	}

	.lead-text-lg {
		font-size: 1.125rem;
		font-weight: 500;
		color: #364a63;
		display: block
	}

	.is-theme .lead-text-lg {
		color: #fff
	}

	.is-theme .is-light .lead-text-lg {
		color: #364a63
	}

	.is-dark .lead-text {
		color: #b7c2d0
	}

	.is-dark .lead-text span {
		color: #8091a7
	}

	.is-theme .lead-text {
		color: #fff
	}

	.is-theme .lead-text span {
		color: #c4cefe
	}

	.is-theme .is-light .lead-text,
	.is-dark .is-light .lead-text {
		color: #364a63
	}

	.is-theme .is-light .lead-text span,
	.is-dark .is-light .lead-text span {
		color: #526484
	}

	.sub-text {
		display: block;
		font-size: 13px;
		color: #8094ae
	}

	.sub-text span+.dot,
	.sub-text .dot+span {
		margin-left: 0.25rem
	}

	.sub-text-sm,
	.sub-text+.sub-text {
		font-size: 12px
	}

	.sub-text-sm {
		color: #8094ae
	}

	.is-theme .sub-text-sm {
		color: #c4cefe
	}

	.is-theme .is-light .sub-text-sm {
		color: #8094ae
	}

	.text-ellipsis .sub-text {
		display: inline
	}

	.sub-text strong {
		color: #526484;
		font-weight: 700
	}

	.is-theme .sub-text strong {
		color: #c4cefe
	}

	.is-theme .is-light .sub-text strong {
		color: #526484
	}

	.sub-text span {
		white-space: nowrap
	}

	.is-theme .sub-text {
		color: #c4cefe
	}

	.is-theme .is-light .sub-text {
		color: #8094ae
	}

	.text-date span {
		color: #526484
	}

	h6 .badge {
		margin-left: 0.5rem
	}

	.fs-9px {
		font-size: 9px
	}

	.fs-10px {
		font-size: 10px
	}

	.fs-11px {
		font-size: 11px
	}

	.fs-12px {
		font-size: 12px
	}

	.fs-13px {
		font-size: 13px
	}

	.fs-14px {
		font-size: 14px
	}

	.fs-15px {
		font-size: 15px
	}

	.fs-16px {
		font-size: 16px
	}

	.fs-17px {
		font-size: 17px
	}

	.fs-18px {
		font-size: 18px
	}

	.fs-19px {
		font-size: 19px
	}

	.fs-20px {
		font-size: 20px
	}

	.fs-21px {
		font-size: 21px
	}

	.fs-22px {
		font-size: 22px
	}

	.note-text {
		font-size: 12px;
		font-style: italic;
		color: #8094ae
	}

	.card .table {
		margin-bottom: 0
	}

	.card .table tr:first-child th,
	.card .table tr:first-child td {
		border-top: none
	}

	.card .table tr:last-child td:first-child {
		border-bottom-left-radius: 4px
	}

	.card .table tr:last-child td:last-child {
		border-bottom-right-radius: 4px
	}

	.card .table tr:first-child th:first-child {
		border-top-left-radius: 4px
	}

	.card .table tr:first-child th:last-child {
		border-top-right-radius: 4px
	}

	.card+.lead-text {
		margin-top: 2rem
	}

	.lead-text+.card {
		margin-top: 1rem
	}

	.card-custom-s1 .card-inner-group .card-inner {
		border-bottom: 1px solid #dbdfea
	}

	@media (max-width: 991.98px) {
		.card-custom-s1 .card-inner-lg {
			padding-left: 1.5rem;
			padding-right: 1.5rem
		}
	}

	@media (min-width: 992px) {
		.card-custom-s1 .card-inner-group {
			border-right: 1px solid #dbdfea
		}

		.card-custom-s1 .card-inner-group .card-inner:last-child {
			border-bottom: none
		}
	}

	@media (min-width: 576px) {
		.card-search .card-body {
			padding: 1.5rem
		}
	}

	.card-aside {
		width: 300px;
		background-color: #fff;
		min-height: 100vh;
		flex-shrink: 0
	}

	.card-aside-left {
		order: -1;
		border-right: 1px solid #e5e9f2
	}

	.card-aside-right {
		order: 100;
		border-left: 1px solid #e5e9f2
	}

	.card-aside-wrap {
		display: flex
	}

	.card-aside-wrap .card-inner,
	.card-aside-wrap .card-content {
		flex-grow: 1
	}

	@media (max-width: 767.98px) {
		.toggle-break-md.card-aside .card-inner-group {
			max-height: 100vh
		}
	}

	@media (max-width: 991.98px) {
		.toggle-break-lg.card-aside .card-inner-group {
			max-height: 100vh
		}
	}

	@media (max-width: 1199.98px) {
		.toggle-break-xl.card-aside .card-inner-group {
			max-height: 100vh
		}
	}

	@media (max-width: 1539.98px) {
		.toggle-break-xxl.card-aside .card-inner-group {
			max-height: 100vh
		}
	}

	@media (min-width: 992px) {
		.card-aside {
			position: static;
			display: block
		}
	}

	@media (min-width: 1540px) {
		.card-aside {
			width: 380px
		}
	}

	.user-avatar,
	[class^="user-avatar"]:not([class*="-group"]) {
		border-radius: 50%;
		height: 40px;
		width: 40px;
		display: flex;
		justify-content: center;
		align-items: center;
		color: #fff;
		background: #798bff;
		font-size: 14px;
		font-weight: 500;
		letter-spacing: 0.06em;
		flex-shrink: 0;
		position: relative
	}

	.user-avatar+.user-info,
	[class^="user-avatar"]:not([class*="-group"])+.user-info {
		margin-left: 1rem
	}

	.user-avatar+.user-name,
	[class^="user-avatar"]:not([class*="-group"])+.user-name {
		margin-left: 0.75rem
	}

	.user-avatar img,
	[class^="user-avatar"]:not([class*="-group"]) img {
		border-radius: 50%
	}

	.user-avatar.md+.user-info,
	[class^="user-avatar"]:not([class*="-group"]).md+.user-info {
		margin-left: 1.5rem
	}

	.user-avatar.md+.user-name,
	[class^="user-avatar"]:not([class*="-group"]).md+.user-name {
		margin-left: 1.25rem
	}

	.user-avatar .edit,
	[class^="user-avatar"]:not([class*="-group"]) .edit {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		border-radius: 50%;
		background-color: rgba(31, 43, 58, 0.5);
		display: flex;
		justify-content: center;
		align-items: center;
		color: #fff;
		opacity: 0;
		transition: opacity .3s
	}

	.user-avatar:hover .edit,
	[class^="user-avatar"]:not([class*="-group"]):hover .edit {
		opacity: 1
	}

	.user-avatar .status,
	[class^="user-avatar"]:not([class*="-group"]) .status {
		border: 2px solid #fff;
		position: absolute;
		bottom: 0;
		right: 0
	}

	.user-avatar.sq,
	[class^="user-avatar"]:not([class*="-group"]).sq {
		border-radius: 4px
	}

	.user-avatar.sq img,
	[class^="user-avatar"]:not([class*="-group"]).sq img {
		border-radius: 4px
	}

	.user-avatar.sq .status,
	[class^="user-avatar"]:not([class*="-group"]).sq .status {
		bottom: -6px;
		right: -6px
	}

	.user-avatar-multiple {
		background-color: transparent !important
	}

	.user-avatar-multiple .user-avatar {
		position: absolute;
		height: 70%;
		width: 70%;
		font-size: 80%;
		border: 2px solid #fff
	}

	.user-avatar-multiple .user-avatar:nth-child(1) {
		top: 0;
		right: 0
	}

	.user-avatar-multiple .user-avatar:nth-child(2) {
		bottom: 0;
		left: 0
	}

	.user-avatar-multiple .user-avatar:nth-child(n+3) {
		display: none
	}

	.user-card .user-avatar.d-none {
		margin-right: 1rem
	}

	.user-card .user-avatar.d-none+.user-info,
	.user-card .user-avatar.d-none+.user-name {
		margin-left: 0
	}

	.user-avatar-xl,
	.user-avatar.xl {
		height: 110px;
		width: 110px;
		font-size: 40px;
		font-weight: 400
	}

	.user-avatar-xl .status,
	.user-avatar.xl .status {
		bottom: 9px;
		right: 9px
	}

	.user-avatar-lg,
	.user-avatar.lg {
		height: 80px;
		width: 80px;
		font-size: 28px;
		font-weight: 400
	}

	.user-avatar-lg .status,
	.user-avatar.lg .status {
		bottom: 5px;
		right: 5px
	}

	.user-avatar-md,
	.user-avatar.md {
		height: 60px;
		width: 60px;
		font-size: 18px
	}

	.user-avatar-md .status,
	.user-avatar.md .status {
		bottom: 2px;
		right: 2px
	}

	.user-avatar-sm,
	.user-avatar.sm {
		height: 32px;
		width: 32px;
		font-size: 12px
	}

	.user-avatar-sm .status,
	.user-avatar.sm .status {
		bottom: -2px;
		right: -2px
	}

	.user-avatar-xs,
	.user-avatar.xs {
		height: 26px;
		width: 26px;
		font-size: 9px;
		font-weight: 700
	}

	.user-avatar-xs .status,
	.user-avatar.xs .status {
		bottom: -2px;
		right: -2px
	}

	.user-avatar[class*="-blue-dim"] {
		color: #559bfb
	}

	.user-avatar[class*="-azure-dim"] {
		color: #1676fb
	}

	.user-avatar[class*="-indigo-dim"] {
		color: #2c3782
	}

	.user-avatar[class*="-purple-dim"] {
		color: #816bff
	}

	.user-avatar[class*="-pink-dim"] {
		color: #ff63a5
	}

	.user-avatar[class*="-orange-dim"] {
		color: #ffa353
	}

	.user-avatar[class*="-teal-dim"] {
		color: #20c997
	}

	.user-avatar[class*="-primary-dim"] {
		color: #6576ff
	}

	.user-avatar[class*="-secondary-dim"] {
		color: #364a63
	}

	.user-avatar[class*="-success-dim"] {
		color: #1ee0ac
	}

	.user-avatar[class*="-info-dim"] {
		color: #09c2de
	}

	.user-avatar[class*="-warning-dim"] {
		color: #f4bd0e
	}

	.user-avatar[class*="-danger-dim"] {
		color: #e85347
	}

	.user-avatar[class*="-dark-dim"] {
		color: #1f2b3a
	}

	.user-avatar[class*="-gray-dim"] {
		color: #8091a7
	}

	.user-avatar[class*="-lighter"] {
		color: #8094ae
	}

	.user-avatar[class*="-light"] {
		color: #526484
	}

	.user-card {
		display: flex;
		align-items: center
	}

	.user-card-wrap {
		padding-top: 1.125rem;
		padding-bottom: 1.125rem
	}

	.user-card .user-info {
		color: #8094ae
	}

	.user-card-menu {
		position: absolute;
		right: 1rem;
		top: 1rem
	}

	.user-toggle {
		display: flex;
		align-items: center;
		padding: 0 1px 1px
	}

	.user-status {
		font-size: 11px;
		font-weight: 500;
		line-height: 1;
		padding-top: .125rem;
		padding-bottom: .375rem
	}

	.user-status-unverified {
		color: #e85347
	}

	.user-status-verified {
		color: #1ee0ac
	}

	.user-name {
		color: #526484;
		font-size: 12px;
		line-height: 16px;
		font-weight: 700
	}

	.is-dark .user-name {
		color: #90a1b8
	}

	.is-theme .user-name {
		color: #c4cefe
	}

	.user-action {
		margin-left: auto;
		font-size: 20px;
		color: #8094ae
	}

	.user-account-info {
		padding-top: 1.5rem;
		padding-bottom: 1.25rem
	}

	.user-account-data li {
		display: flex;
		justify-content: space-between;
		padding: .125rem 0
	}

	.user-account-actions:not(:first-child) {
		margin-top: 1.5rem
	}

	.user-account-actions ul {
		display: flex
	}

	.user-account-actions ul li {
		width: 44%
	}

	.user-account-actions ul li:last-child {
		width: 56%
	}

	.user-account-actions .btn,
	.user-account-actions .dual-listbox .dual-listbox__button,
	.dual-listbox .user-account-actions .dual-listbox__button {
		width: 100%;
		font-size: 12px;
		letter-spacing: 0.04em;
		padding-left: 0.5rem;
		padding-right: 0.5rem;
		text-transform: uppercase
	}

	.user-account-links {
		padding: 1rem 0;
		border-bottom: 1px solid #e5e9f2
	}

	.user-account-info .user-account-links:last-child {
		border-bottom: 0;
		padding-bottom: 0
	}

	.user-account-info+.user-account-links {
		padding-top: 0;
		margin-top: -0.5rem
	}

	.user-account-links a:link {
		padding: 0.5rem 0;
		display: flex
	}

	.user-account-value {
		display: inline-flex
	}

	.user-balance {
		font-size: 1.5rem;
		line-height: 1;
		padding: .125rem 0 .375rem;
		color: #6576ff
	}

	.user-balance small {
		font-size: 1rem
	}

	.user-balance-alt {
		font-size: 15px;
		color: #526484;
		font-weight: 700
	}

	.user-balance-alt span {
		font-weight: 400
	}

	.user-balance-sub {
		font-size: 13px;
		color: #8094ae
	}

	.user-balance-sub span {
		color: #526484
	}

	.user-balance-sub+a {
		margin-top: 1rem
	}

	.user-card-s2 {
		display: flex;
		flex-direction: column;
		text-align: center;
		padding: .5rem
	}

	.user-card-s2 .user-avatar {
		margin: 0 auto
	}

	.user-card-s2 .user-info {
		margin: 1.25rem 0 0 !important
	}

	.user-card-s2 .user-info .sub-text {
		justify-content: center
	}

	.user-card-s2 .user-info .badge {
		margin-bottom: 1rem
	}

	.user-card-md .lead-text {
		font-size: 1rem
	}

	.user-card-md .sub-text {
		font-size: 0.875rem
	}

	.user-activity {
		display: flex
	}

	.user-activity-group {
		display: flex;
		flex-wrap: wrap
	}

	.user-activity-ck {
		height: 110px;
		padding: .5rem .375rem 0
	}

	.user-activity .icon {
		width: 2.25rem;
		font-size: 1.5rem;
		color: #8094ae
	}

	.user-activity .info span {
		display: block
	}

	.user-activity .amount {
		font-size: 1.125rem;
		line-height: 1.3;
		font-weight: 500;
		color: #526484
	}

	.user-activity .title {
		font-size: 12px;
		color: #8094ae
	}

	.user-activity .gfx {
		align-self: flex-end;
		width: 50px;
		margin-left: 1rem;
		margin-bottom: 0.25rem
	}

	.user-contacts li {
		color: #526484;
		display: flex;
		font-size: .875rem;
		line-height: 1.4rem;
		padding: .375rem 0
	}

	.user-contacts li .icon {
		color: #8094ae;
		font-size: 1rem;
		width: 1.75rem;
		line-height: inherit;
		display: inline-block
	}

	.user-avatar-group {
		display: flex
	}

	.user-avatar-group .user-avatar {
		border: 2px solid #fff
	}

	.user-avatar-group .user-avatar:not(:first-child) {
		margin-left: -20%
	}

	.user-avatar-group .user-avatar.sm:not(:first-child) {
		margin-left: -1rem
	}

	.user-avatar-group .user-avatar.xs:not(:first-child) {
		margin-left: -0.5rem
	}

	.user-info .lead-text,
	.user-info .sub-text {
		display: flex;
		align-items: center
	}

	.user-info .edit {
		font-size: 1.25rem;
		color: #8094ae;
		margin-left: 0.5rem;
		display: inline-flex
	}

	.user-info .edit:hover {
		color: #6576ff
	}

	.user-plan {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		padding: .75rem 0
	}

	.user-plan-title {
		display: flex;
		align-items: center;
		color: #364a63;
		font-weight: 700;
		font-size: 1rem
	}

	.user-plan-title .icon {
		font-size: 1.5rem;
		margin-right: 0.75rem;
		color: #6576ff
	}

	.user-plan-info,
	.user-plan-actions {
		padding: 0.5rem 0
	}

	.user-plan-status {
		font-size: 13px;
		font-weight: 500;
		color: #8094ae;
		text-transform: uppercase;
		margin-top: 0.5rem
	}

	.user-plan-progress {
		width: 100%;
		margin-top: 1rem
	}

	.data-list:not(:first-child) {
		margin-top: 1.5rem
	}

	.data-item {
		position: relative;
		padding: 1rem 1.25rem;
		display: flex;
		align-items: center
	}

	.data-item .icon {
		color: #8094ae;
		text-align: center;
		height: 32px;
		vertical-align: middle;
		line-height: 32px;
		display: inline-block
	}

	.data-item:not(:last-child) {
		border-bottom: 1px solid #e5e9f2
	}

	.data-item[data-toggle] {
		cursor: pointer
	}

	.data-item:hover .data-label {
		color: #526484
	}

	.data-item:hover .data-value,
	.data-item:hover .icon {
		color: #364a63
	}

	.data-head {
		padding: 0.5rem 1.25rem;
		margin-bottom: 0.25rem;
		background-color: #ebeef2;
		border-radius: 4px
	}

	.data-head.is-plain {
		margin-bottom: 0;
		background-color: transparent
	}

	.data-head.is-plain:first-child {
		margin-top: 1rem
	}

	.data-head .title {
		color: #526484
	}

	.data-col {
		flex-grow: 1
	}

	.data-col span:not(.data-more) {
		display: inline-block;
		transition: color .3s
	}

	.data-col-end {
		flex-grow: 0;
		margin-left: auto
	}

	.data-label {
		color: #8094ae;
		width: 100%;
		flex-shrink: 0
	}

	.data-value {
		color: #526484;
		font-size: 0.9375rem
	}

	.data-more {
		position: relative;
		z-index: 4;
		text-align: center;
		line-height: 28px;
		height: 28px;
		width: 28px;
		display: inline-grid;
		align-content: center
	}

	.data-more:before {
		position: absolute;
		z-index: -1;
		height: 20px;
		width: 20px;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		transform-origin: 50% 50%;
		content: '';
		background-color: #e5e9f2;
		border-radius: 50%;
		opacity: 0;
		transition: all .3s
	}

	.data-item:hover .data-more:before {
		opacity: 1;
		height: 40px;
		width: 40px
	}

	.data-more.disable:before {
		display: none
	}

	.data-list-s2:not(:first-child) {
		margin-top: 1rem
	}

	.data-list-s2 .data-item,
	.data-list-s2 .data-head {
		padding-left: 0;
		padding-right: 0;
		background: transparent
	}

	.data-list-s2 .data-head {
		border-bottom: 1px solid #dbdfea
	}

	.data-list-s2 .data-item:not(:last-child) {
		border-bottom-color: #dbdfea
	}

	.data-list-s2 .data-label {
		color: #526484
	}

	.data-list-s2 .data-placeholder {
		color: #8094ae
	}

	@media (min-width: 768px) {
		.data-list:not(:first-child) {
			margin-top: 2rem
		}

		.data-list-s2:not(:first-child) {
			margin-top: 1.25rem
		}

		.data-item {
			padding: 1.5rem 1.25rem
		}

		.data-col {
			display: flex;
			align-items: center
		}

		.data-col-end {
			width: 200px;
			text-align: right;
			justify-content: flex-end
		}

		.data-label:not([class^="w-"]) {
			width: 50%
		}
	}

	@media (min-width: 1200px) and (max-width: 1359px) {
		.card-aside-wrap .data-list .data-col {
			flex-wrap: wrap
		}

		.card-aside-wrap .data-list .data-label {
			width: 100%
		}
	}

	.is-compact .data-item {
		padding-top: .75rem;
		padding-bottom: .75rem
	}

	.is-medium .data-item {
		padding-top: 1.125rem;
		padding-bottom: 1.125rem
	}

	.dropdown-menu .nk-notification {
		max-height: 239px;
		overflow: auto
	}

	.nk-notification-item {
		display: flex;
		align-items: center;
		padding: 1.25rem 1.75rem
	}

	.nk-notification-icon {
		flex-shrink: 0;
		margin-right: .75rem
	}

	.nk-notification-text {
		font-size: 13px;
		color: #526484
	}

	.nk-notification-text span {
		color: #364a63
	}

	.nk-notification-time {
		font-size: 11px;
		color: #8094ae
	}

	.dropdown-menu .nk-chat-list,
	.dropdown-menu .chat-list {
		max-height: 274px;
		overflow: auto
	}

	.icon-light {
		color: #fff
	}

	.icon-dark {
		color: #364a63
	}

	.icon-text {
		display: flex;
		align-items: center;
		font-size: 13px
	}

	.icon-text .icon {
		font-size: 1.5em;
		width: 1.75rem
	}

	.icon-image {
		width: 70px
	}

	.icon-image+h6 {
		margin-top: 1rem
	}

	.icon-circle {
		display: inline-flex;
		justify-content: center;
		align-items: center;
		border-radius: 50%;
		background: #6576ff;
		color: #fff;
		font-size: 18px;
		height: 36px;
		width: 36px
	}

	.icon-circle-sm,
	.icon-circle.sm {
		height: 20px;
		width: 20px;
		font-size: 12px
	}

	.icon-circle-md,
	.icon-circle.md {
		height: 28px;
		width: 28px;
		font-size: 14px
	}

	.icon-circle-lg,
	.icon-circle.lg {
		height: 44px;
		width: 44px;
		font-size: 24px
	}

	.icon-circle-xxl,
	.icon-circle.xxl {
		height: 80px;
		width: 80px;
		font-size: 40px
	}

	.icon-status {
		position: relative;
		display: inline-flex
	}

	.icon-status:after {
		position: absolute;
		border-radius: 50%;
		right: 0;
		top: 1px;
		height: 10px;
		width: 10px;
		border: 2px solid #fff;
		content: ''
	}

	.icon-status-info:after {
		background: #09c2de
	}

	.icon-status-danger:after {
		background: #e85347
	}

	.icon-status-success:after {
		background: #1ee0ac
	}

	.icon-status-warning:after {
		background: #f4bd0e
	}

	.icon-status-on:after {
		background: #1ee0ac
	}

	.icon-status-off:after {
		background: #8094ae
	}

	.icon-status-na:after {
		display: none
	}

	.icon-overlap {
		display: inline-flex;
		align-items: center;
		flex-direction: row-reverse;
		flex-shrink: 0
	}

	.icon-overlap li {
		border-radius: 50%;
		border: 2px solid #fff
	}

	.icon-overlap li+li {
		margin-right: -14px
	}

	.icon-overlap-alt {
		display: inline-flex;
		align-items: flex-end;
		flex-shrink: 0
	}

	.icon-overlap-alt li {
		border-radius: 50%
	}

	.icon-overlap-alt li+li {
		margin-left: -16px;
		margin-bottom: -10px
	}

	.icon-circle[class*="btc"] {
		background: #f9841e
	}

	.icon-circle[class*="facebook"] {
		background: #3b5998
	}

	.icon-circle[class*="google"] {
		background: #de5246
	}

	.icon-circle[class*="btc-dim"] {
		background: #feefe2
	}

	.icon-circle[class*="eth-dim"] {
		background: #eaedf6
	}

	.icon-circle[class*="white"] {
		background: #fff
	}

	.icon[class*="bg-blue-dim"] {
		color: #559bfb
	}

	.icon[class*="bg-azure-dim"] {
		color: #1676fb
	}

	.icon[class*="bg-indigo-dim"] {
		color: #2c3782
	}

	.icon[class*="bg-purple-dim"] {
		color: #816bff
	}

	.icon[class*="bg-pink-dim"] {
		color: #ff63a5
	}

	.icon[class*="bg-orange-dim"] {
		color: #ffa353
	}

	.icon[class*="bg-teal-dim"] {
		color: #20c997
	}

	.icon[class*="bg-primary-dim"] {
		color: #6576ff
	}

	.icon[class*="bg-secondary-dim"] {
		color: #364a63
	}

	.icon[class*="bg-success-dim"] {
		color: #1ee0ac
	}

	.icon[class*="bg-info-dim"] {
		color: #09c2de
	}

	.icon[class*="bg-warning-dim"] {
		color: #f4bd0e
	}

	.icon[class*="bg-danger-dim"] {
		color: #e85347
	}

	.icon[class*="bg-light"] {
		color: #526484
	}

	.icon[class*="bg-lighter"] {
		color: #8094ae
	}

	.icon[class*="bg-dark-dim"] {
		color: #dde2ea
	}

	.icon[class*="bg-gray-dim"] {
		color: #e9f0f9
	}

	.icon[class*="bg-facebook-dim"] {
		color: #3b5998
	}

	.icon[class*="bg-google-dim"] {
		color: #de5246
	}

	.icon[class*="bg-btc-dim"] {
		color: #f9841e
	}

	.icon[class*="bg-eth-dim"] {
		color: #6174b9
	}

	.icon[class*="bg-white"] {
		color: #526484
	}

	.icon-avatar {
		width: 1.5rem;
		height: 1.5rem;
		display: inline-block;
		text-align: center;
		line-height: 1.5rem;
		border-radius: 50%;
		background: #e3e7fe;
		color: #798bff;
		margin-right: 0.5rem;
		font-size: 12px
	}

	.icon-avatar-md {
		width: 2rem;
		height: 2rem;
		line-height: 2rem;
		font-size: 14px
	}

	.tb-col-hide,
	.tb-col-sm,
	.tb-col-md,
	.tb-col-lg,
	.tb-col-xl,
	.tb-col-xxl,
	.tb-col-xs,
	.tb-col-mb {
		display: none !important
	}

	@media (min-width: 576px) {
		.tb-col-sm {
			display: table-cell !important
		}
	}

	@media (min-width: 768px) {
		.tb-col-md {
			display: table-cell !important
		}
	}

	@media (min-width: 992px) {
		.tb-col-lg {
			display: table-cell !important
		}
	}

	@media (min-width: 1200px) {
		.tb-col-xl {
			display: table-cell !important
		}
	}

	@media (min-width: 1540px) {
		.tb-col-xxl {
			display: table-cell !important
		}
	}

	@media (min-width: 359px) {
		.tb-col-xs {
			display: table-cell !important
		}
	}

	@media (min-width: 414px) {
		.tb-col-mb {
			display: table-cell !important
		}
	}

	.table-middle td,
	.tb-row-middle td {
		vertical-align: middle
	}

	.tb-col-end,
	.tb-col-action {
		text-align: right
	}

	.tb-col-middle {
		vertical-align: middle
	}

	.tb-col-action .link-cross,
	.tb-col-action .link-done {
		font-size: 1rem;
		text-align: center;
		line-height: 28px;
		height: 24px;
		width: 24px;
		display: inline-block;
		color: #8094ae;
		vertical-align: middle;
		border-radius: 12px
	}

	.tb-col-action .link-cross .icon,
	.tb-col-action .link-done .icon {
		padding-left: 1px
	}

	.tb-col-action .link-cross:hover {
		color: #e85347;
		background: #fce7e5
	}

	.tb-col-action .link-done:hover {
		color: #1ee0ac;
		background: #e0fbf3
	}

	@media (max-width: 575.98px) {
		.table-ulogs th.tb-col-ip {
			display: none
		}

		.table-ulogs tr {
			display: flex;
			flex-wrap: wrap;
			width: 100%;
			position: relative;
			padding: 0.5rem 1.25rem
		}

		.table-ulogs tr:not(:first-child) {
			border-top: 1px solid #dbdfea
		}

		.table-ulogs tr td {
			padding: 0;
			border: 0
		}

		.table-ulogs tr td:first-child,
		.table-ulogs tr td:last-child {
			padding: 0
		}

		.table-ulogs tr td,
		.table-ulogs tr th {
			flex-grow: 1
		}

		.table-ulogs tr td.tb-col-os {
			width: 100%
		}

		.table-ulogs tr th.tb-col-os {
			width: 40%;
			min-width: 142px;
			flex-grow: 0
		}

		.table-ulogs tr td.tb-col-ip {
			width: 40%;
			min-width: 130px;
			flex-grow: 0
		}

		.table-ulogs tr .tb-col-action {
			position: absolute;
			right: 10px;
			top: 50%;
			transform: translateY(-50%);
			padding: 0
		}

		.table-ulogs thead tr {
			padding: 0
		}
	}

	.toggle-content {
		opacity: 0;
		visibility: hidden;
		position: absolute;
		top: calc(100% + 10px);
		z-index: 9;
		background: #fff;
		border-radius: 4px;
		box-shadow: 0 3px 12px 1px rgba(43, 55, 72, 0.15);
		transform: translateY(10px)
	}

	.toggle-content-right {
		left: auto;
		right: 0
	}

	.toggle-content-bottom {
		top: auto;
		bottom: 0
	}

	.toggle-content.content-active {
		transition: all .2s ease;
		opacity: 1;
		visibility: visible;
		transform: translateY(0)
	}

	.toggle-slide {
		position: fixed;
		top: 0;
		z-index: 999;
		min-width: 260px;
		max-width: calc(100% - 40px);
		transition: transform 650ms ease
	}

	.toggle-slide-left {
		left: 0;
		transform: translateX(-100%)
	}

	.toggle-slide-right {
		right: 0;
		transform: translateX(100%)
	}

	.toggle-slide.content-active {
		transform: translate(0) !important
	}

	.toggle-overlay {
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(31, 43, 58, 0.2);
		z-index: 900;
		animation: overlay-fade-in .4s ease 1
	}

	.toggle-expand-content {
		display: none
	}

	.toggle-expand-content.expanded {
		display: block
	}

	.toggle-expand .inactive-text,
	.toggle-opt .inactive-text {
		display: block
	}

	.toggle-expand.active>.inactive-text,
	.toggle-opt.active>.inactive-text {
		display: none
	}

	.toggle-expand .active-text,
	.toggle-opt .active-text {
		display: none
	}

	.toggle-expand.active>.active-text,
	.toggle-opt.active>.active-text {
		display: block
	}

	body.toggle-shown {
		overflow: hidden
	}

	@media (min-width: 576px) {
		.nk-block-tools-toggle .toggle-expand {
			display: none
		}

		.nk-block-tools-toggle .toggle-expand-content {
			display: block !important
		}
	}

	@media (max-width: 575.98px) {
		.nk-block-tools-toggle .toggle-expand-content {
			position: absolute;
			left: 0;
			right: 0;
			top: 100%;
			z-index: 99;
			width: 100vw;
			padding: 0 18px !important;
			background: #fff;
			margin-left: -18px;
			margin-right: -18px;
			box-shadow: 0 20px 35px rgba(0, 0, 0, 0.2)
		}

		.nk-block-tools-toggle .nk-block-tools {
			padding-top: 20px;
			padding-bottom: 20px
		}

		.nk-block-tools-toggle .nk-block-tools-opt {
			margin-left: auto
		}
	}

	@media (max-width: 575.98px) {
		.card-tools-toggle .card-title-group {
			position: static
		}

		.card-tools-toggle .toggle-wrap .toggle-content {
			padding: 1.25rem 1rem;
			transform: translate(0);
			top: 0;
			left: 0;
			right: 0;
			bottom: 0
		}

		.card-tools-toggle .toggle-wrap .toggle-close {
			margin-right: auto
		}

		.card-tools-toggle .toggle-wrap .toggle-close .btn-trigger:before {
			opacity: 0
		}

		.card-tools-toggle .toggle-wrap .toggle-close .btn-trigger:hover:before {
			opacity: 1
		}
	}

	@media (min-width: 576px) {
		.card-tools-toggle {
			z-index: 9
		}

		.card-tools-toggle .toggle-wrap .toggle {
			display: none
		}

		.card-tools-toggle .toggle-wrap .toggle-content {
			z-index: 9;
			opacity: 1;
			visibility: visible;
			position: static;
			background: transparent;
			box-shadow: none;
			transform: translate(0)
		}

		.card-tools-toggle .toggle-wrap .toggle-close {
			display: none
		}
	}

	@media (min-width: 576px) {
		.toggle-break-sm {
			transition: none;
			opacity: 1;
			visibility: visible;
			transform: translateY(0) !important;
			position: static;
			background: transparent;
			box-shadow: none;
			z-index: 1 !important
		}

		.toggle-break-sm.collapse {
			display: block
		}
	}

	@media (min-width: 768px) {
		.toggle-break-md {
			transition: none;
			opacity: 1;
			visibility: visible;
			transform: translateY(0) !important;
			position: static;
			background: transparent;
			box-shadow: none;
			z-index: 1 !important
		}

		.toggle-break-md.collapse {
			display: block
		}
	}

	@media (min-width: 992px) {
		.toggle-break-lg {
			transition: none;
			opacity: 1;
			visibility: visible;
			transform: translateY(0) !important;
			position: static;
			background: transparent;
			box-shadow: none;
			z-index: 1 !important
		}

		.toggle-break-lg.collapse {
			display: block
		}
	}

	@media (min-width: 1200px) {
		.toggle-break-xl {
			transition: none;
			opacity: 1;
			visibility: visible;
			transform: translateY(0) !important;
			position: static;
			background: transparent;
			box-shadow: none;
			z-index: 1 !important
		}

		.toggle-break-xl.collapse {
			display: block
		}
	}

	@media (min-width: 1540px) {
		.toggle-break-xxl {
			transition: none;
			opacity: 1;
			visibility: visible;
			transform: translateY(0) !important;
			position: static;
			background: transparent;
			box-shadow: none;
			z-index: 1 !important
		}

		.toggle-break-xxl.collapse {
			display: block
		}
	}

	.nav-switch {
		display: inline-flex;
		margin-bottom: 1.5rem;
		border: 1px solid #dbdfea;
		border-radius: 30px;
		padding: 5px
	}

	.nav-switch .nav-link {
		padding: 5px 16px;
		line-height: 20px;
		border-radius: 20px;
		position: static;
		text-transform: uppercase;
		font-family: Roboto, sans-serif;
		font-weight: 700;
		font-size: 12px;
		color: #8094ae
	}

	.nav-switch .nav-link.active {
		background: #6576ff;
		color: #fff
	}

	.nav-switch .nav-link:after {
		display: none
	}

	.nav-switch .nav-item {
		padding: 0;
		margin: 0 1px
	}

	.nav-switch .nav-item:last-child {
		margin-right: 0
	}

	.nav-switch .nav-item:first-child {
		margin-left: 0
	}

	@media (min-width: 576px) {
		.nav-switch {
			margin-bottom: 2.5rem
		}
	}

	.nav-switch-s2 {
		display: inline-flex;
		border-radius: 4px;
		border: none
	}

	.nav-switch-s2 .nav-link {
		padding: .25rem .7rem;
		line-height: 20px;
		border-radius: 0;
		position: static;
		text-transform: uppercase;
		font-family: Roboto, sans-serif;
		font-weight: 700;
		font-size: 12px;
		color: #8094ae;
		border: 1px solid #dbdfea
	}

	.nav-switch-s2 .nav-link:hover,
	.nav-switch-s2 .nav-link:focus {
		color: #526484;
		background: #f5f6fa;
		border: 1px solid #dbdfea
	}

	.nav-switch-s2 .nav-link.active {
		color: #364a63;
		border: 1px solid #dbdfea;
		background: #f5f6fa;
		box-shadow: inset 0 0 4px -1px rgba(128, 148, 174, 0.25)
	}

	.nav-switch-s2 .nav-link:after {
		display: none
	}

	.nav-switch-s2 .nav-item {
		padding: 0;
		margin: 0
	}

	.nav-switch-s2 .nav-item:last-child {
		margin-right: 0
	}

	.nav-switch-s2 .nav-item:last-child .nav-link {
		border-radius: 0 4px 4px 0
	}

	.nav-switch-s2 .nav-item:first-child {
		margin-left: 0
	}

	.nav-switch-s2 .nav-item:first-child .nav-link {
		border-radius: 4px 0 0 4px
	}

	.nav-switch-s2 .nav-item:not(:first-child) {
		margin-left: -1px
	}

	.widget-title {
		display: flex;
		justify-content: space-between;
		align-items: center;
		margin-bottom: 0.75rem
	}

	.widget-title>* {
		margin-bottom: 0
	}

	.text-center .widget-title {
		justify-content: center
	}

	.is-theme .widget-title a:hover {
		color: #fff
	}

	.side-wg:not(:last-child) {
		margin-bottom: 2.5rem
	}

	.side-wg-title {
		padding-bottom: 0.75rem
	}

	.side-wg .back-to {
		font-size: 0.875rem;
		line-height: 1.1;
		font-weight: 400;
		position: relative;
		color: #8094ae;
		display: inline-flex;
		align-items: center
	}

	.side-wg .back-to .icon {
		font-size: 1.25rem;
		width: 1.75rem;
		margin-top: -3px;
		display: inline-block
	}

	.nk-ck {
		height: 260px
	}

	.nk-ck-sm {
		height: 180px
	}

	.nk-ck1 {
		height: 120px
	}

	.nk-ck2 {
		height: 240px
	}

	.nk-ck3 {
		height: 160px
	}

	.nk-cktv {
		height: 300px;
		overflow: hidden;
		border: 1px solid #dbdfea;
		border-radius: 4px
	}

	.nk-cktv .tradingview-widget-container {
		overflow: hidden;
		position: relative;
		top: 8px
	}

	.nk-cktv .tradingview-widget-container>div {
		margin: -1px
	}

	@media (min-width: 576px) {
		.nk-ck {
			height: 260px
		}

		.nk-ck-sm {
			height: 180px
		}

		.nk-ck1 {
			height: 120px
		}

		.nk-ck2 {
			height: 240px
		}

		.nk-ck3 {
			height: 258px
		}
	}

	.nk-wg6-title:not(:first-child) {
		margin-top: 1.5rem
	}

	.nk-wg6-title:not(:last-child) {
		margin-bottom: 1.5rem
	}

	.nk-wg6-text:not(:last-child) {
		margin-bottom: 1.5rem
	}

	.aside-wg+.aside-wg {
		padding-top: 2rem
	}

	.nk-modal-title:not(:first-child) {
		margin-top: 1.5rem
	}

	.nk-modal-title:not(:last-child) {
		margin-bottom: 1.5rem
	}

	.nk-modal-title.title {
		font-size: 1.5rem
	}

	.nk-modal-text:not(:last-child) {
		margin-bottom: 1.5rem
	}

	.nk-modal-text .lead {
		font-size: 1.1rem;
		line-height: 1.5
	}

	.nk-modal-text .sub-text {
		font-size: 14px
	}

	.nk-modal-action {
		margin-top: 1.5rem
	}

	.nk-modal-action-sm {
		margin-top: 1rem
	}

	.nk-modal-action-md {
		margin-top: 2rem
	}

	.nk-modal-action-lg {
		margin-top: 2.25rem
	}

	.modal-body-lg .tab-content {
		margin-top: 2rem
	}

	@media (min-width: 576px) {
		.nk-modal-action-md {
			margin-top: 2.5rem
		}

		.nk-modal-action-lg {
			margin-top: 3.25rem
		}
	}

	[data-toggle="modal"] {
		cursor: pointer
	}

	.search-wrap {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		opacity: 0;
		background: #fff;
		transition: opacity .4s;
		border-radius: 6px;
		pointer-events: none;
		display: flex;
		align-items: center
	}

	.search-wrap.active {
		opacity: 1;
		z-index: 9;
		pointer-events: auto
	}

	.search-wrap-extend {
		margin-top: -1rem;
		left: -2px;
		right: -2px
	}

	.search-toggle {
		transition: all .4s;
		opacity: 1
	}

	.search-toggle.active {
		opacity: 0
	}

	.search-content {
		position: relative;
		width: 100%
	}

	.search-content .form-control,
	.search-content div.dataTables_wrapper div.dataTables_filter input,
	div.dataTables_wrapper div.dataTables_filter .search-content input,
	.search-content .dual-listbox .dual-listbox__search,
	.dual-listbox .search-content .dual-listbox__search {
		padding-left: calc(2.125rem + 2px);
		padding-right: calc(2.125rem + 2px)
	}

	.search-content .form-control-sm {
		padding-left: calc(1.75rem + 2px);
		padding-right: calc(1.75rem + 2px)
	}

	.search-back,
	.search-submit {
		position: absolute;
		top: 50%
	}

	.search-back:focus,
	.search-submit:focus {
		box-shadow: none
	}

	.search-back {
		left: 0;
		transform: translate(-0.25rem, -50%)
	}

	.search-submit {
		right: 0;
		transform: translate(0.5rem, -50%)
	}

	.search-submit:hover {
		color: #6576ff
	}

	.nk-search-box {
		margin-top: 1.5rem;
		margin-bottom: 1.25rem
	}

	.nk-search-box .form-icon {
		height: 100%;
		border: none;
		background: transparent;
		width: 3.5rem
	}

	.nk-search-box .form-control,
	.nk-search-box div.dataTables_wrapper div.dataTables_filter input,
	div.dataTables_wrapper div.dataTables_filter .nk-search-box input,
	.nk-search-box .dual-listbox .dual-listbox__search,
	.dual-listbox .nk-search-box .dual-listbox__search {
		border-radius: 1.5rem;
		padding-left: 1.25rem;
		padding-right: 1.5rem
	}

	.nk-block+.nk-block,
	.nk-block+.nk-block-head {
		padding-top: 28px
	}

	.nk-block+.nk-block-lg,
	.nk-block+.nk-block-head-lg {
		padding-top: 2.5rem
	}

	.nav-tabs+.nk-block {
		padding-top: 1.5rem
	}

	.nav-tabs+.nk-block-sm {
		padding-top: 1rem
	}

	.nk-block-area {
		display: flex
	}

	.nk-block-area-column {
		flex-direction: column
	}

	.nk-block-between {
		display: flex;
		justify-content: space-between;
		align-items: center
	}

	.nk-block-between>.title:first-child {
		margin-bottom: 0
	}

	.nk-block-middle {
		margin-top: auto;
		margin-bottom: auto
	}

	.nk-block-head {
		position: relative;
		padding-bottom: 1.25rem
	}

	.nk-block-head:only-child {
		padding-bottom: 0
	}

	.nk-block-head h2:not(:last-child) {
		margin-bottom: 1rem
	}

	.nk-block-head-sub {
		font-size: 1rem;
		line-height: 1.5rem;
		margin-bottom: .5rem;
		color: #8094ae;
		font-weight: 400;
		position: relative
	}

	.nk-block-head-sub .back-to {
		color: inherit;
		display: inline-flex;
		align-items: center
	}

	.nk-block-head-sub .back-to .icon {
		font-size: 1.5rem;
		width: 2rem;
		margin-top: -3px;
		display: inline-block
	}

	.nk-block-head-sub .dropdown {
		position: absolute;
		right: -8px;
		top: -6px
	}

	.nk-block-head-xs {
		padding-bottom: .75rem
	}

	.nk-block-head-sm {
		padding-bottom: 1rem
	}

	.nk-block-head-lg {
		padding-bottom: 1.5rem
	}

	.nk-block-head+.nav-tabs {
		margin-top: -1rem
	}

	.nk-content-body>.nk-block-head:first-child {
		padding-bottom: 1.75rem
	}

	.nk-block-head .nk-block-text {
		margin-top: 1.5rem
	}

	.nk-block-head .nk-block-text+.btn,
	.nk-block-head .dual-listbox .nk-block-text+.dual-listbox__button,
	.dual-listbox .nk-block-head .nk-block-text+.dual-listbox__button {
		margin-top: 1.5rem
	}

	.nk-block-tools {
		display: flex;
		align-items: center
	}

	.nk-block-tools>* {
		display: inline-flex
	}

	.nk-block-des {
		color: #526484
	}

	.nk-block-des strong {
		color: #364a63
	}

	.nk-block-des .icon {
		vertical-align: middle
	}

	.nk-block-content+.nk-block-head {
		padding-top: 2rem
	}

	.nk-block-content+.nk-block-head-sm {
		padding-top: 1.5rem
	}

	.nk-block-content-head:not(:last-child) {
		margin-bottom: 1rem
	}

	.nk-block-title-group {
		display: flex;
		justify-content: space-between;
		align-items: center
	}

	.nk-block-title-group .title {
		margin-bottom: 0
	}

	.nk-block-title-group:not(:last-child) {
		margin-bottom: .5rem
	}

	@media (min-width: 576px) {
		.nk-block-head-lg {
			padding-bottom: 2.5rem
		}

		.nk-block-content+.nk-block-head {
			padding-top: 4rem
		}

		.nk-block-content+.nk-block-head-sm {
			padding-top: 2.5rem
		}
	}

	@media (min-width: 768px) {
		.nk-content-body>.nk-block-head:first-child {
			padding-bottom: 2.5rem
		}

		.nk-content-body>.nk-block-head-sm:first-child {
			padding-bottom: 1.75rem
		}

		.nav-tabs+.nk-block {
			padding-top: 2.5rem
		}

		.nav-tabs+.nk-block-sm {
			padding-top: 2rem
		}

		.nav-tabs+.nk-block-xs {
			padding-top: 1.25rem
		}

		.nk-block-text h5,
		.nk-block-text h6 {
			font-size: 1rem
		}
	}

	@media (max-width: 767.98px) {
		.nk-block-tools .opt-menu-md {
			order: 100;
			margin-left: auto
		}
	}

	@media (min-width: 768px) {
		.nk-block-between-md {
			display: flex;
			justify-content: space-between;
			align-items: center
		}
	}

	.nk-block-subhead {
		padding-bottom: .5rem;
		border-bottom: 1px solid #dbdfea
	}

	.nk-feature-center {
		text-align: center
	}

	.filter-wg label.overline-title {
		margin-bottom: .5rem
	}

	.change {
		line-height: 1
	}

	.change .sign {
		font-family: "Nioicon"
	}

	.change .sign:before {
		content: ""
	}

	.change.up {
		color: #1ee0ac !important
	}

	.change.up .sign:before {
		content: ""
	}

	.change.down {
		color: #e85347 !important
	}

	.change.down .sign:before {
		content: ""
	}

	.nk-knob>div {
		position: relative;
		display: inline-block !important
	}

	.knob {
		height: 100% !important;
		margin-top: 0 !important;
		font-size: 1.5rem !important
	}

	.knob-half {
		height: 50% !important;
		font-size: 1.25rem !important
	}

	[class*="knob"] {
		text-align: center;
		pointer-events: none;
		width: 100% !important;
		font-weight: 400 !important;
		font-family: Roboto, sans-serif !important;
		color: #364a63 !important;
		margin-left: 0 !important;
		left: 0;
		border: none
	}

	[class*="knob"]:focus {
		outline: none
	}

	.stats {
		padding: 0 0 1rem
	}

	@media (min-width: 1540px) {
		.nk-content-sidebar .stats {
			padding: 1.25rem 1.5rem 1rem
		}
	}

	.collapse-shown {
		display: inline-block !important
	}

	.collapsed .collapse-shown {
		display: none !important
	}

	.collapse-hidden {
		display: none !important
	}

	.collapsed .collapse-hidden {
		display: inline-block !important
	}

	.clipboard-init {
		cursor: pointer
	}

	.clipboard-success .clipboard-init {
		color: #1bca9b
	}

	.clipboard-text {
		font-size: 12px
	}

	.clipboard-success .form-control:focus,
	.clipboard-success div.dataTables_wrapper div.dataTables_filter input:focus,
	div.dataTables_wrapper div.dataTables_filter .clipboard-success input:focus,
	.clipboard-success .dual-listbox .dual-listbox__search:focus,
	.dual-listbox .clipboard-success .dual-listbox__search:focus {
		border-color: #dbdfea;
		box-shadow: inset 0 1px 1px rgba(16, 25, 36, 0.075)
	}

	.nk-news-item {
		display: flex;
		align-items: center
	}

	.nk-news-icon {
		width: 2rem;
		display: inline-flex;
		flex-shrink: 0
	}

	.nk-news-icon .icon {
		font-size: 24px;
		color: #6576ff
	}

	.is-theme .nk-news-icon .icon {
		color: #7f8dff
	}

	.nk-news-icon img {
		width: 24px
	}

	.nk-news-text {
		display: flex;
		align-items: center;
		max-width: calc(100% - 1.5rem)
	}

	.nk-news-text p {
		font-size: 13px;
		margin-bottom: 0;
		color: #526484;
		font-weight: 500;
		text-overflow: ellipsis;
		overflow: hidden;
		white-space: nowrap;
		width: calc(100% - 2rem)
	}

	.nk-news-text p span {
		color: #8094ae;
		font-weight: 400
	}

	.is-dark .nk-news-text p {
		color: #90a1b8
	}

	.is-dark .nk-news-text p span {
		color: rgba(128, 148, 174, 0.9)
	}

	.is-theme .nk-news-text p {
		color: #dde3fe
	}

	.is-theme .nk-news-text p span {
		color: rgba(196, 206, 254, 0.8)
	}

	.nk-news-text .icon {
		color: #8094ae;
		margin-left: .25rem
	}

	.is-dark .nk-news-text .icon {
		color: #8094ae
	}

	.is-theme .nk-news-text .icon {
		color: #c4cefe
	}

	.nk-news-item:hover .nk-news-text .icon {
		color: #6576ff
	}

	.language-list li:not(:last-child) .language-item {
		border-bottom: 1px solid #ecf2ff
	}

	.language-item {
		display: flex;
		align-items: center;
		padding: 12px 20px;
		color: #344357;
		transition: all .4s
	}

	.language-item:hover {
		color: #3c4d62;
		background: #ebeef2
	}

	.language-name {
		font-size: 12px
	}

	.language-flag {
		width: 24px;
		margin-right: 12px
	}

	.entry img,
	.entry .video,
	.entry .image-group {
		border-radius: 4px
	}

	.entry img+p,
	.entry img+h2,
	.entry img+h3,
	.entry img+h4,
	.entry img+h5,
	.entry img+h6,
	.entry img+ul,
	.entry img+ol,
	.entry .video+p,
	.entry .video+h2,
	.entry .video+h3,
	.entry .video+h4,
	.entry .video+h5,
	.entry .video+h6,
	.entry .video+ul,
	.entry .video+ol,
	.entry .image-group+p,
	.entry .image-group+h2,
	.entry .image-group+h3,
	.entry .image-group+h4,
	.entry .image-group+h5,
	.entry .image-group+h6,
	.entry .image-group+ul,
	.entry .image-group+ol {
		margin-top: 2rem
	}

	.entry p+img {
		margin-top: 1rem
	}

	.entry p+h2,
	.entry p+h3,
	.entry p+h4,
	.entry p+h5,
	.entry p+h6,
	.entry p+.video,
	.entry p+.image-group {
		padding-top: .75rem
	}

	p>span>.icon.ni {
		vertical-align: middle
	}

	.btn-trigger+.dropdown-menu-right,
	.btn-trigger+.dropdown-menu-left {
		margin: -.75rem 0
	}

	.btn-trigger+.dropdown-menu-right {
		margin-right: 16px
	}

	.btn-trigger+.dropdown-menu-left {
		margin-left: 16px
	}

	@media (max-width: 420px) {

		.btn-trigger+.dropdown-menu-xl,
		.btn-trigger+.dropdown-menu-lg,
		.btn-trigger+.dropdown-menu-md {
			margin-left: 16px;
			margin-top: .25rem
		}
	}

	.bq-note-item:not(:first-child) {
		margin-top: 1.75rem
	}

	.bq-note-text {
		padding: 1rem 1.25rem;
		background: #f5f6fa;
		border-radius: 4px
	}

	.bq-note-meta {
		font-size: 12px;
		color: #8094ae;
		margin-top: .75rem
	}

	.bq-note-meta span>span {
		color: #526484
	}

	.bq-note-meta .link {
		margin-left: .75rem
	}

	.bq-note-sep {
		height: .25rem;
		display: block;
		visibility: hidden;
		padding: 0 0.25rem
	}

	.bq-note-by {
		display: inline-block
	}

	@media (min-width: 576px) {
		.bq-note-text {
			padding: 1.25rem 1.5rem
		}

		.bq-note-sep {
			height: auto;
			display: inline-block;
			visibility: visible
		}
	}

	@media (min-width: 1200px) and (max-width: 1359px) {

		.form-settings .col-lg-5,
		.form-settings .col-lg-7 {
			flex: 0 0 100%;
			max-width: 100%
		}
	}

	.embed-responsive {
		border-radius: 4px
	}

	.video {
		position: relative;
		overflow: hidden;
		border-radius: 4px
	}

	.video:before {
		position: absolute;
		content: '';
		bottom: 0;
		right: 0;
		left: 0;
		height: 120px;
		background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0))
	}

	.video-play {
		display: flex;
		align-items: center;
		position: absolute;
		left: 2rem;
		bottom: 2rem;
		color: #fff;
		font-size: 1.25rem
	}

	.video-play:hover {
		color: #fff
	}

	.video-play .icon {
		font-size: 2rem
	}

	.nk-slider {
		position: relative
	}

	.nk-slider-s1 {
		width: 290px;
		max-width: 100%
	}

	.nk-slider-s1 .slick-dots {
		position: absolute;
		right: 1.25rem;
		top: 1.5rem;
		padding-top: 0
	}

	.nk-slider-s2 .slider-arrows>div {
		padding: .5rem 0
	}

	.project-head {
		display: flex;
		justify-content: space-between;
		margin-bottom: 1.25rem;
		align-items: start
	}

	.project-title {
		display: flex;
		align-items: center;
		margin-right: 0.75rem
	}

	.project-title .user-avatar {
		margin-right: 1rem
	}

	.project-title .title {
		font-size: 0.975rem
	}

	.project-title .title:not(:last-child) {
		margin-bottom: 0.125rem
	}

	.project-details {
		margin-bottom: 1rem
	}

	.project-progress {
		margin-bottom: 1rem
	}

	.project-progress-details {
		display: flex;
		justify-content: space-between;
		margin-bottom: 0.5rem
	}

	.project-progress-task {
		display: flex;
		align-items: center;
		color: #8094ae
	}

	.project-progress-task .icon {
		font-size: 1rem;
		line-height: 1.5rem;
		margin-right: 0.25rem
	}

	.project-progress-percent {
		color: #526484;
		font-weight: 500
	}

	.project-meta {
		display: flex;
		align-items: center;
		justify-content: space-between
	}

	.project-users {
		display: flex;
		align-items: center
	}

	.project-list-progress {
		display: flex;
		align-items: center
	}

	.project-list-progress .progress {
		width: 100px;
		margin-right: 0.5rem
	}

	@media (min-width: 1540px) {
		.project-list-progress .progress {
			width: 140px;
			margin-right: 1rem
		}
	}

	.team {
		position: relative
	}

	.team-info {
		padding: 1rem 0 1.25rem
	}

	.team-info li {
		display: flex;
		align-items: center;
		justify-content: space-between;
		font-size: .9375rem;
		line-height: 1.75rem
	}

	.team-info li span:first-child {
		color: #8094ae
	}

	.team-info li span:last-child {
		color: #526484
	}

	.team-status {
		position: absolute;
		left: 0;
		display: flex;
		align-items: center;
		justify-content: center;
		height: 20px;
		width: 20px;
		border-radius: 50%
	}

	.team-options {
		position: absolute;
		top: -.25rem;
		right: -.25rem
	}

	.team-details {
		padding-top: .5rem;
		text-align: center;
		max-width: 200px;
		margin: 0 auto
	}

	.team-statistics {
		display: flex;
		justify-content: space-around;
		text-align: center;
		padding: 1rem 0 1.5rem
	}

	.team-statistics li span {
		display: block
	}

	.team-statistics li span:first-child {
		font-size: 1.125rem;
		color: #1c2b46
	}

	.team-statistics li span:last-child {
		font-size: .875rem;
		color: #8094ae
	}

	.team-view {
		display: flex;
		justify-content: center;
		padding-bottom: 0.25rem
	}

	.nk-auth-body {
		padding: 1.25rem
	}

	.nk-auth-footer {
		padding-bottom: 40px
	}

	.nk-auth-body,
	.nk-auth-footer {
		width: 100%;
		max-width: 420px;
		margin-left: auto;
		margin-right: auto
	}

	.nk-auth-footer {
		padding-left: 1.25rem;
		padding-right: 1.25rem
	}

	.nk-auth-footer-full {
		margin-top: 0
	}

	@media (min-width: 992px) {
		.nk-auth-container {
			width: 45%
		}
	}

	@media (min-width: 1540px) {

		.nk-split .nk-auth-body,
		.nk-split .nk-auth-footer {
			margin-right: 90px
		}
	}

	.nk-error-ld {
		padding: 2rem 1rem
	}

	.nk-error-gfx {
		padding-bottom: 30px;
		max-width: 90%
	}

	.nk-error-head {
		font-size: 160px;
		font-weight: 700;
		background: -webkit-linear-gradient(#6576ff, #2c3782);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		opacity: .9
	}

	.nk-error-title {
		padding-bottom: 1rem
	}

	.nk-error-text {
		font-size: 1rem
	}

	@media (min-width: 576px) {
		.nk-error-lead {
			font-size: 200px
		}

		.nk-error-gfx {
			padding-bottom: 60px;
			max-width: 520px
		}
	}

	.clipboard-success-message {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		display: flex;
		align-items: center;
		justify-content: center;
		color: #1ee0ac;
		background: rgba(255, 255, 255, 0.9);
		border-radius: 4px;
		opacity: 0;
		pointer-events: none;
		transition: opacity .3s
	}

	.clipboard-success .clipboard-success-message {
		opacity: 1
	}

	.has-shadow.bg-lighter .card,
	.dual-listbox .has-shadow.dual-listbox__item:hover .card,
	.has-shadow.bg-lighter .sp-pdl-item,
	.dual-listbox .has-shadow.dual-listbox__item:hover .sp-pdl-item,
	.has-shadow.bg-lighter .invoice-wrap,
	.dual-listbox .has-shadow.dual-listbox__item:hover .invoice-wrap,
	.has-shadow.bg-lighter .accordion,
	.dual-listbox .has-shadow.dual-listbox__item:hover .accordion {
		box-shadow: 0 0 8px -3px rgba(60, 77, 98, 0.15)
	}

	.has-shadow .card,
	.has-shadow .sp-pdl-item,
	.has-shadow .invoice-wrap,
	.has-shadow .accordion {
		box-shadow: 0 0 6px -2px rgba(60, 77, 98, 0.2)
	}

	.has-shadow .data-head,
	.has-shadow .data-item {
		padding-left: 1.5rem;
		padding-right: 1.5rem
	}

	.has-shadow .card .data-head:not(.is-plain) {
		margin-left: 0.75rem;
		margin-right: 0.75rem;
		padding-left: 0.75rem
	}

	.has-shadow .nav-tabs {
		box-shadow: 0 2px 0 -1px rgba(60, 77, 98, 0.06)
	}

	.has-shadow .nk-header {
		box-shadow: 0 3px 0 -1px rgba(60, 77, 98, 0.04)
	}

	.nio-version {
		text-transform: uppercase;
		font-size: 9px;
		font-weight: 700;
		letter-spacing: 0.02em;
		position: absolute;
		right: -1px;
		bottom: -3px
	}

	.code-tag {
		color: #816bff
	}

	.code-class {
		color: #ff63a5
	}

	.code-fnc {
		color: #09c2de
	}

	.nk-switch-icon {
		color: #90a1b8;
		height: 1.5rem;
		width: 1.5rem;
		display: flex;
		align-items: center;
		justify-content: center
	}

	.nk-switch-icon .icon {
		font-size: 1.5rem
	}

	.nk-switch-icon .icon-sm {
		font-size: 1.25rem
	}

	.nk-switch-icon:hover {
		color: #526484
	}

	.nk-switch-icon.active {
		color: #6576ff
	}

	.dark-switch {
		position: relative
	}

	.dark-switch:before,
	.dark-switch:after {
		position: absolute;
		content: "";
		transform: translateY(-50%);
		border-radius: 1.5rem;
		display: block;
		top: 50%
	}

	.dark-switch:before {
		right: 0;
		width: 3rem;
		height: 1.5rem;
		background-color: #fff;
		border: #dbdfea solid 2px
	}

	.dark-switch:after {
		height: 1rem;
		width: 1rem;
		right: calc(2rem - 2px - .125rem);
		background-color: #dbdfea
	}

	.dark-switch.active:before {
		background-color: #6576ff;
		border-color: #6576ff
	}

	.dark-switch.active:after {
		right: calc(2px + .125rem);
		background-color: #fff
	}

	.is-scrollable {
		overflow: auto
	}

	.profile-ud-label {
		display: block;
		color: #8094ae
	}

	.plain .profile-ud-label {
		font-size: 12px;
		font-weight: 500;
		text-transform: uppercase;
		letter-spacing: 0.1em
	}

	.wider .profile-ud-label {
		display: inline-flex;
		letter-spacing: -0.01em;
		width: 120px;
		flex-shrink: 0
	}

	.profile-ud-value {
		color: #526484
	}

	.wider .profile-ud-value {
		text-align: right;
		font-weight: 500;
		width: 100%
	}

	.profile-ud.wider {
		display: flex;
		padding: .5rem 0
	}

	.profile-ud-item:nth-child(n+2) .profile-ud.plain {
		margin-top: 1.25rem
	}

	@media (min-width: 768px) {
		.profile-ud.wider {
			padding: .75rem 0
		}

		.profile-ud-list {
			display: flex;
			flex-wrap: wrap;
			margin: -0.25rem -3.25rem;
			max-width: 960px
		}

		.profile-ud-item {
			width: 50%;
			padding: 0 3.25rem
		}

		.profile-ud-item:nth-child(2) .profile-ud.plain {
			margin-top: 0
		}
	}

	.profile-stats .amount {
		font-size: 1.125rem;
		font-weight: 700
	}

	.profile-balance-group {
		display: flex;
		align-items: flex-end
	}

	.profile-balance-ck {
		position: relative;
		height: 70px;
		margin-top: .5rem
	}

	.profile-balance-sub {
		font-size: .875rem;
		color: #8094ae
	}

	.profile-balance-subtitle {
		font-size: 0.75rem;
		margin-top: 0.5rem
	}

	.profile-balance-sub .icon {
		font-size: .75rem
	}

	.profile-balance-plus {
		position: absolute
	}

	.profile-balance-plus .icon {
		font-size: 1rem;
		line-height: 1.5rem
	}

	.profile-balance-plus~* {
		padding-left: 24px
	}

	.profile-balance-amount .number {
		font-size: 1.25rem;
		font-weight: 700;
		color: #364a63;
		line-height: 1.5rem;
		white-space: nowrap
	}

	.profile-balance-amount .number small {
		font-weight: 400
	}

	.steps ul {
		display: flex
	}

	.steps ul li {
		flex-grow: 1
	}

	.steps .current-info {
		display: none
	}

	.actions ul {
		display: flex;
		margin: -10px;
		padding-top: 20px
	}

	.actions ul li {
		padding: 10px
	}

	.actions ul li:first-child {
		order: 1
	}

	.actions ul li a {
		display: inline-block;
		position: relative;
		color: #fff;
		font-weight: 500;
		transition: all .4s ease;
		border-color: #6576ff;
		background: #6576ff;
		padding: .4375rem 1.125rem;
		font-size: .8125rem;
		line-height: 1.25rem;
		border-radius: 4px
	}

	.actions ul li.disabled {
		display: none
	}

	.nk-wizard-head {
		display: none
	}

	.nk-wizard-simple .steps {
		margin-bottom: 20px
	}

	.nk-wizard-simple .steps ul li {
		position: relative;
		padding-bottom: 5px
	}

	.nk-wizard-simple .steps ul li h5 {
		border: none;
		padding: 0 0 6px 0;
		letter-spacing: 0.02em;
		font-size: 13px;
		text-transform: uppercase;
		font-weight: 500;
		color: #8094ae
	}

	.nk-wizard-simple .steps ul li .number {
		font-size: 13px;
		color: #8094ae;
		font-weight: 700
	}

	.nk-wizard-simple .steps ul li:after {
		position: absolute;
		height: 2px;
		width: 0;
		left: 0;
		bottom: 0;
		background: #6576ff;
		content: '';
		transition: all .4s
	}

	.nk-wizard-simple .steps ul li.done:after,
	.nk-wizard-simple .steps ul li.current:after {
		width: 100%
	}

	.nk-wizard-simple .steps ul li.done h5,
	.nk-wizard-simple .steps ul li.done .number,
	.nk-wizard-simple .steps ul li.current h5,
	.nk-wizard-simple .steps ul li.current .number {
		color: #6576ff
	}

	.nk-wizard-simple .steps ul li.current~.done:after {
		width: 0
	}

	.nk-wizard-simple .steps ul li.current~.done h5,
	.nk-wizard-simple .steps ul li.current~.done .number {
		color: #8094ae
	}

	.nk-wizard-simple .steps .current-info {
		display: none
	}

	.tb-tnx-head {
		font-size: 11px;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 0.12em;
		background: #f5f6fa
	}

	.tb-tnx-head td,
	.tb-tnx-head th {
		color: #8094ae;
		padding: 0.625rem .25rem
	}

	.tb-tnx-head th {
		border-top-left-radius: 4px;
		border-top-right-radius: 4px
	}

	.tb-tnx-item {
		font-size: 14px
	}

	.tb-tnx-item td {
		padding: 1.25rem .25rem;
		vertical-align: middle
	}

	.is-compact .tb-tnx-item td {
		padding-top: .4rem;
		padding-bottom: .4rem
	}

	.tb-tnx-id a {
		display: block
	}

	.tb-tnx-id span {
		font-weight: 500
	}

	.tb-tnx-item .tb-tnx-total {
		font-weight: 500;
		color: #526484
	}

	.tb-tnx-desc {
		padding-right: .5rem
	}

	.tb-tnx-item .tb-tnx-date {
		color: #8094ae
	}

	.tb-tnx-item .tb-tnx-date .date {
		font-size: 13px
	}

	.tb-tnx-action {
		width: 60px;
		text-align: right
	}

	.tb-tnx-action .dropdown {
		margin-top: -0.25rem;
		margin-bottom: -0.25rem
	}

	.tb-tnx-btns .btn+.btn,
	.tb-tnx-btns .dual-listbox .dual-listbox__button+.btn,
	.dual-listbox .tb-tnx-btns .dual-listbox__button+.btn,
	.tb-tnx-btns .dual-listbox .btn+.dual-listbox__button,
	.dual-listbox .tb-tnx-btns .btn+.dual-listbox__button,
	.tb-tnx-btns .dual-listbox .dual-listbox__button+.dual-listbox__button,
	.dual-listbox .tb-tnx-btns .dual-listbox__button+.dual-listbox__button {
		margin-left: .5rem
	}

	.tb-tnx-btns+.dropdown {
		margin-left: 1rem
	}

	@media (max-width: 767px) {

		.tb-tnx-item,
		.tb-tnx-head {
			display: flex;
			width: 100%
		}

		.tb-tnx-item th,
		.tb-tnx-head th {
			flex-grow: 1;
			padding-top: .5rem;
			padding-bottom: .5rem
		}

		.tb-tnx-item td,
		.tb-tnx-head td {
			flex-grow: 1;
			border: none;
			padding-top: 0;
			padding-bottom: 0
		}

		.tb-tnx-item {
			flex-wrap: wrap;
			padding-top: 1rem;
			padding-bottom: 1rem
		}

		.tb-tnx-item:not(:last-child) {
			border-bottom: 1px solid #e5e9f2
		}

		.tb-tnx-amount {
			width: 110px;
			text-align: right
		}

		.tb-tnx-id,
		.tb-tnx-head th:first-child {
			min-width: 85px;
			padding-right: .25rem !important;
			flex-grow: 0 !important
		}

		.tb-tnx-info {
			width: 45%
		}

		.tb-tnx-date .date {
			font-size: 12px
		}

		.tb-tnx-date .date+.date {
			padding-left: .5rem
		}

		.tb-tnx-action:last-child {
			flex-grow: 0;
			padding-left: .5rem;
			display: inline-flex;
			align-items: center
		}
	}

	@media (max-width: 575px) {
		.tb-tnx-item {
			font-size: 13px
		}

		.tb-tnx-id {
			width: 100%
		}

		.tb-tnx-id+td {
			padding-left: 1.25rem
		}

		.tb-tnx-info {
			width: 65%
		}

		.tb-tnx-amount:last-child {
			width: 25%
		}

		.tb-tnx-amount:not(:last-child) {
			display: none
		}

		.tb-tnx-amount.is-alt {
			position: absolute;
			display: inline-flex;
			right: 1.25rem;
			width: auto
		}

		.tb-tnx-amount.is-alt .tb-tnx-total {
			order: 5;
			padding-left: 1.25rem
		}
	}

	@media (min-width: 768px) {

		.tb-tnx-desc,
		.tb-tnx-date,
		.tb-tnx-total,
		.tb-tnx-status {
			display: inline-block;
			vertical-align: middle
		}

		.tb-tnx-desc,
		.tb-tnx-date {
			width: calc(50% - 4px)
		}

		.tb-tnx-total {
			width: calc(60% - 4px)
		}

		.tb-tnx-status {
			width: calc(40% - 4px)
		}

		.tb-tnx-amount {
			width: 25%
		}

		.tb-tnx-date .date,
		.tb-tnx-date>span>span {
			width: calc(50% - 4px);
			display: inline-block
		}

		.tb-tnx-date .date+.date,
		.tb-tnx-date>span>span+span {
			padding-left: 0.75rem
		}
	}

	.tb-odr-item {
		font-size: 14px
	}

	.tb-odr-item td {
		padding: 1rem .25rem;
		vertical-align: middle
	}

	.tb-odr-id,
	.tb-odr-total {
		display: block
	}

	.tb-odr-item .tb-odr-id,
	.tb-odr-item .tb-odr-total {
		font-weight: 500
	}

	.tb-odr-id a {
		display: block
	}

	.tb-odr-id span {
		font-weight: 500
	}

	.tb-odr-item .tb-odr-total {
		color: #364a63
	}

	.tb-odr-head .tb-odr-item .tb-odr-total {
		color: inherit
	}

	.tb-odr-item .tb-odr-date {
		color: #8094ae
	}

	.tb-odr-head .tb-odr-item .tb-odr-date {
		color: inherit
	}

	.tb-odr-action>div,
	.tb-odr-action>.btn,
	.dual-listbox .tb-odr-action>.dual-listbox__button {
		vertical-align: middle
	}

	.tb-odr-action:last-child {
		padding-left: 1.25rem;
		text-align: right
	}

	.tb-odr-btns .btn+.btn,
	.tb-odr-btns .dual-listbox .dual-listbox__button+.btn,
	.dual-listbox .tb-odr-btns .dual-listbox__button+.btn,
	.tb-odr-btns .dual-listbox .btn+.dual-listbox__button,
	.dual-listbox .tb-odr-btns .btn+.dual-listbox__button,
	.tb-odr-btns .dual-listbox .dual-listbox__button+.dual-listbox__button,
	.dual-listbox .tb-odr-btns .dual-listbox__button+.dual-listbox__button {
		margin-left: .5rem
	}

	.tb-odr-id {
		min-width: 90px
	}

	.tb-odr-head {
		background: #f5f6fa
	}

	.tb-odr-head th {
		font-size: 12px;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 0.12em;
		color: #8094ae;
		padding: 0.625rem .25rem
	}

	@media (max-width: 767px) {
		.tb-odr-item {
			display: flex
		}

		.tb-odr-item th,
		.tb-odr-item td {
			flex-grow: 1
		}

		.tb-odr-amount {
			text-align: right
		}
	}

	@media (max-width: 575px) {
		.tb-odr-item {
			font-size: 13px
		}

		.tb-odr-amount {
			width: 24%
		}

		.tb-odr-info {
			width: 44%
		}

		.tb-odr-action {
			width: 2rem;
			min-width: auto
		}

		.tb-odr-item .tb-odr-action {
			padding-left: .5rem
		}
	}

	@media (min-width: 768px) {
		.tb-odr-info {
			min-width: 55%
		}

		.tb-odr-amount {
			width: 30%
		}

		.tb-odr-total {
			min-width: 100px
		}

		.tb-odr-id,
		.tb-odr-total {
			display: inline-block
		}

		.tb-odr-id+span,
		.tb-odr-total+span {
			padding-left: 1rem
		}

		.tb-odr-btns+.dropdown,
		.tb-odr-btns+.btn,
		.dual-listbox .tb-odr-btns+.dual-listbox__button {
			margin-left: .75rem
		}
	}

	@media (min-width: 992px) {
		.tb-odr-id {
			min-width: 120px
		}

		.tb-odr-total {
			min-width: 50%
		}
	}

	.is-compact .tb-tnx-item td,
	.is-compact .tb-odr-item td {
		padding-top: .4rem;
		padding-bottom: .4rem
	}

	@media (max-width: 767px) {

		.is-compact .tb-tnx-item,
		.is-compact .tb-odr-item {
			padding-top: .5rem;
			padding-bottom: .5rem
		}

		.is-compact .tb-tnx-item td,
		.is-compact .tb-odr-item td {
			padding-top: 0;
			padding-bottom: 0
		}
	}

	.nk-tb-list {
		display: table;
		width: 100%;
		font-size: 13px;
		color: #8094ae
	}

	.nk-tb-list.is-alt {
		color: #526484
	}

	.nk-tb-list .list-status,
	.nk-tb-list .tb-status {
		font-size: 12px;
		font-weight: 500
	}

	.nk-tb-list .tb-lead,
	.nk-tb-list .tb-amount {
		font-weight: 500;
		color: #364a63;
		display: block;
		line-height: 1.4
	}

	.nk-tb-list .tb-lead-sub,
	.nk-tb-list .tb-amount-sub {
		color: #526484;
		display: block;
		line-height: 1.4
	}

	.nk-tb-list .tb-sub,
	.nk-tb-list .tb-amount-sm {
		font-size: .9em
	}

	.nk-tb-list .tb-amount span,
	.nk-tb-list .tb-amount .currency {
		color: #526484;
		font-weight: 400
	}

	.nk-tb-list .user-info .tb-lead+span,
	.nk-tb-list .tb-lead+.tb-date {
		font-size: 11px
	}

	.nk-tb-list .tb-country {
		display: flex;
		align-items: center
	}

	.nk-tb-list .tb-country .name {
		color: #364a63
	}

	.nk-tb-list .tb-country .flag {
		height: 16px;
		border-radius: 3px
	}

	.nk-tb-list .tb-country .flag+.name {
		margin-left: 0.6875rem
	}

	.nk-tb-list .tb-product {
		display: flex;
		align-items: center
	}

	.nk-tb-list .tb-product .thumb {
		width: 48px;
		border-radius: 4px;
		margin-right: 1rem
	}

	.nk-tb-list .tb-product .title {
		font-weight: 700;
		font-size: .875rem;
		color: #364a63
	}

	.nk-tb-list .tb-asterisk {
		font-size: 1.125rem;
		line-height: 1;
		vertical-align: middle
	}

	.nk-tb-list .tb-asterisk a {
		color: #6576ff
	}

	.nk-tb-item {
		transition: background-color .3s, box-shadow .3s;
		display: table-row
	}

	.nk-tb-item:not(.nk-tb-head):hover,
	.nk-tb-item:not(.nk-tb-head).seleted {
		background: #f8f9fc;
		box-shadow: 0 0 10px -4px rgba(54, 74, 99, 0.2)
	}

	.nk-tb-col {
		position: relative;
		display: table-cell;
		vertical-align: middle;
		padding: 1rem .5rem
	}

	.nk-tb-col:first-child {
		padding-left: 1.25rem
	}

	.nk-tb-col:last-child {
		padding-right: 1.25rem
	}

	.nk-tb-col-tools {
		max-width: 3.75rem
	}

	.nk-tb-col-check {
		width: 3rem
	}

	.nk-tb-col-check .custom-control {
		vertical-align: middle
	}

	.nk-tb-item:not(:last-child) .nk-tb-col {
		border-bottom: 1px solid #dbdfea
	}

	.nk-tb-head .nk-tb-col {
		padding-top: 0.5rem;
		padding-bottom: 0.5rem;
		color: #8094ae;
		font-size: .9em;
		border-bottom: 1px solid #dbdfea
	}

	.nk-tb-col-action {
		text-align: right
	}

	.nk-tb-col-action>.dropdown:last-child {
		right: -.5rem
	}

	.nk-tb-col-nosort:before,
	.nk-tb-col-nosort:after {
		display: none !important
	}

	.nk-tb-actions {
		display: flex;
		align-items: center;
		justify-content: flex-end;
		position: relative
	}

	.nk-tb-ulist .nk-tb-actions,
	.nk-tb-actions-adj .nk-tb-actions {
		right: -0.5rem
	}

	.nk-tb-actions.visible1 {
		width: 1rem
	}

	.nk-tb-action-hidden {
		opacity: 0;
		transition: .3s ease
	}

	.nk-tb-item:hover .nk-tb-action-hidden {
		opacity: 1;
		background: #f8f9fc
	}

	.nk-tb-list .nk-tb-head .btn-trigger .icon {
		font-size: 1.5em
	}

	.nk-tb-list.is-separate {
		margin-top: -8px;
		border-collapse: separate;
		border-spacing: 0 8px
	}

	.nk-tb-list.is-separate .nk-tb-item>.nk-tb-col {
		background: #fff;
		border: none;
		box-shadow: 0px 1px 3px 0px rgba(54, 74, 99, 0.05)
	}

	.nk-tb-list.is-separate .nk-tb-item>.nk-tb-col:first-child {
		border-radius: 4px 0 0 4px
	}

	.nk-tb-list.is-separate .nk-tb-item>.nk-tb-col:last-child {
		border-radius: 0 4px 4px 0
	}

	.nk-tb-list.is-separate .nk-tb-item:hover .nk-tb-action-hidden {
		background: #fff
	}

	.nk-tb-list.is-separate .nk-tb-head .nk-tb-col {
		padding-top: 0.75rem;
		padding-bottom: 0.75rem
	}

	@media (min-width: 576px) {
		.nk-tb-col-check {
			width: 3.25rem
		}

		.nk-tb-item .nk-tb-col:first-child {
			padding-left: 1.5rem
		}

		.nk-tb-item .nk-tb-col:last-child {
			padding-right: 1.5rem
		}
	}

	@media (min-width: 1540px) {
		.nk-tb-list {
			font-size: 14px
		}

		.nk-tb-list .list-status,
		.nk-tb-list .tb-status {
			font-size: 13px
		}

		.nk-tb-list .user-info .tb-lead+span,
		.nk-tb-list .tb-lead+.tb-date {
			font-size: 12px
		}
	}

	.is-loose .nk-tb-item:not(.nk-tb-head) .nk-tb-col {
		padding-top: 1.125rem;
		padding-bottom: 1.125rem
	}

	.is-medium .nk-tb-item:not(.nk-tb-head) .nk-tb-col {
		padding-top: .75rem;
		padding-bottom: .75rem
	}

	.is-compact .nk-tb-item:not(.nk-tb-head) .nk-tb-col {
		padding-top: .5rem;
		padding-bottom: .5rem
	}

	.nk-tnx-type {
		display: flex;
		align-items: center
	}

	.nk-tnx-type-icon {
		font-size: 1.125rem;
		flex-shrink: 0;
		height: 2.5rem;
		width: 2.5rem;
		border-radius: 50%;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		background: #ebeef2;
		margin-right: 1rem
	}

	@media (max-width: 991.98px) {
		.nk-tb-tnx {
			font-size: 12px;
			letter-spacing: -0.01em
		}

		.nk-tnx-type-icon {
			font-size: 0.875rem;
			height: 1.75rem;
			width: 1.75rem;
			margin-right: .75rem
		}
	}

	@media (max-width: 575.98px) {
		.nk-tb-tnx .nk-tb-head .nk-tb-col-tools {
			opacity: 0
		}

		.nk-tb-tnx .nk-tb-col-status {
			text-align: right;
			padding-right: 1.25rem !important
		}

		.nk-tb-tnx .nk-tb-col-tools {
			position: absolute;
			right: 0;
			opacity: 0;
			transition: .3s ease
		}

		.nk-tb-tnx .nk-tb-item:hover .nk-tb-col-tools {
			opacity: 1
		}

		.nk-tnx-type-icon {
			margin-right: .5rem
		}
	}

	@media (min-width: 768px) {
		.nk-tb-tnx .nk-tb-col-status {
			padding-left: 2.5rem
		}
	}

	@media (min-width: 1800px) {
		.nk-tb-tnx .nk-tb-col-status {
			padding-left: 6rem
		}
	}

	.timeline {
		color: #8094ae;
		line-height: 1.3
	}

	.timeline+.timeline,
	.timeline-list+.timeline-head {
		margin-top: 1.75rem
	}

	.timeline-head {
		font-size: 14px;
		color: #8094ae;
		margin-bottom: 1rem
	}

	.timeline-item {
		position: relative;
		display: flex;
		align-items: flex-start
	}

	.timeline-item:not(:last-child) {
		padding-bottom: 1.5rem
	}

	.timeline-item:not(:last-child):before {
		position: absolute;
		height: calc(100% - 11px);
		width: 1px;
		background: #dbdfea;
		content: '';
		top: 13px;
		left: 5px
	}

	.timeline-status {
		position: relative;
		height: 11px;
		width: 11px;
		border-radius: 50%;
		flex-shrink: 0;
		margin-top: 2px
	}

	.timeline-status.is-outline:after {
		position: absolute;
		height: 7px;
		width: 7px;
		border-radius: 50%;
		background: #fff;
		content: '';
		top: 2px;
		left: 2px
	}

	.timeline-date {
		position: relative;
		color: #8094ae;
		width: 90px;
		margin-left: .75rem;
		flex-shrink: 0;
		line-height: 1rem
	}

	.timeline-date .icon {
		margin-right: 0.25rem;
		vertical-align: middle;
		color: #8094ae;
		display: inline-block;
		position: absolute;
		right: 0;
		top: 2px
	}

	.timeline-data {
		padding-left: 8px
	}

	.timeline-title {
		font-size: 15px;
		color: #364a63;
		margin-bottom: .75rem
	}

	.timeline-des {
		color: #8094ae
	}

	.timeline-des p {
		margin-bottom: .25rem
	}

	.timeline .time {
		display: block;
		font-size: 12px;
		color: #8094ae
	}

	@media (min-width: 576px) {

		.timeline+.timeline,
		.timeline-list+.timeline-head {
			margin-top: 2.5rem
		}
	}

	@media (max-width: 413px) {
		.timeline-item {
			flex-wrap: wrap
		}

		.timeline-date {
			width: 80px
		}

		.timeline-data {
			padding: .75rem 0 0 24px
		}
	}

	.invoice {
		position: relative
	}

	.invoice-wrap {
		padding: 1.25rem;
		border: 1px solid #dbdfea;
		border-radius: 4px;
		background: #fff
	}

	.invoice-action {
		position: absolute;
		right: 1.25rem;
		top: 1.25rem
	}

	.invoice-brand {
		padding-bottom: 1.5rem
	}

	.invoice-brand img {
		max-height: 60px
	}

	.invoice-bills {
		font-size: 12px
	}

	.invoice-bills .table {
		min-width: 580px
	}

	.invoice-bills .table th {
		color: #6576ff;
		font-size: 12px;
		text-transform: uppercase;
		border-top: 0
	}

	.invoice-bills .table th:last-child,
	.invoice-bills .table td:last-child {
		text-align: right
	}

	.invoice-bills .table tfoot {
		border-top: 1px solid #dbdfea
	}

	.invoice-bills .table tfoot td {
		border-top: 0;
		white-space: nowrap;
		padding-top: .25rem;
		padding-bottom: .25rem
	}

	.invoice-bills .table tfoot tr:last-child td:not(:first-child),
	.invoice-bills .table tfoot tr:first-child td:not(:first-child) {
		font-weight: 500;
		padding-top: 1.25rem;
		padding-bottom: .25rem
	}

	.invoice-bills .table tfoot tr:last-child td:not(:first-child) {
		border-top: 1px solid #dbdfea;
		padding-top: .25rem;
		padding-bottom: .25rem
	}

	.invoice-head {
		padding-bottom: 1.5rem;
		display: flex;
		justify-content: space-between;
		flex-direction: column
	}

	.invoice-desc {
		width: 210px;
		padding-top: 1.5rem
	}

	.invoice-desc .title {
		text-transform: uppercase;
		color: #6576ff
	}

	.invoice-desc ul li {
		padding: .25rem 0
	}

	.invoice-desc ul span {
		font-size: 13px;
		font-weight: 500;
		color: #526484
	}

	.invoice-desc ul span:first-child {
		min-width: 90px;
		display: inline-block;
		text-transform: uppercase;
		letter-spacing: 1px;
		color: #8094ae
	}

	.invoice-desc ul span:last-child {
		padding-left: 0.75rem
	}

	.invoice-contact .title {
		margin-bottom: 1rem
	}

	.invoice-contact ul li {
		padding: .5rem 0;
		line-height: 1.3
	}

	.invoice-contact ul li:first-child {
		padding-top: 0
	}

	.invoice-contact ul li:last-child {
		padding-bottom: 0
	}

	.invoice-contact ul .icon {
		line-height: 1.3;
		font-size: 1.1em;
		display: inline-block;
		vertical-align: top;
		margin-top: -2px;
		color: #6576ff;
		margin-right: .5rem
	}

	.invoice-contact ul .icon+span {
		display: inline-block;
		vertical-align: top;
		color: #8094ae
	}

	.invoice-print {
		max-width: 940px;
		margin: 2rem auto
	}

	.invoice-print .invoice-wrap {
		padding: 0;
		border: none !important
	}

	@media (min-width: 768px) {
		.invoice-wrap {
			padding: 3rem
		}

		.invoice-head {
			flex-direction: row
		}

		.invoice-desc {
			padding-top: 0
		}

		.invoice-bills {
			font-size: .875rem
		}
	}

	.pricing {
		position: relative;
		height: 100%
	}

	.pricing-badge {
		position: absolute;
		right: .5rem;
		top: .5rem
	}

	.pricing-head {
		text-align: center;
		padding: 1.75rem 1.5rem;
		border-bottom: 1px solid #e5e9f2
	}

	.pricing-title .title {
		margin-bottom: 0.25rem
	}

	.pricing-title:not(:last-child) {
		padding-bottom: 1.25rem
	}

	.pricing-body {
		padding: 1.75rem 1.75rem 2rem
	}

	.pricing-features li {
		display: flex;
		padding: .25rem 0
	}

	.pricing-action {
		margin-top: 1.5rem;
		text-align: center
	}

	.pricing-media {
		padding: 0.25rem 0;
		margin-bottom: 1.5rem
	}

	.pricing-media img {
		max-width: 90px
	}

	.pricing-amount {
		font-size: 0.875rem;
		color: #8094ae
	}

	.pricing-amount .amount {
		font-size: 1.5rem;
		font-weight: 700;
		color: #526484
	}

	.nk-add-product {
		top: 65px;
		background-color: #fff;
		width: 400px;
		height: calc(100vh - 65px);
		padding: 1.5rem
	}

	.nk-add-product+.toggle-overlay {
		z-index: 700
	}

	.rating {
		display: flex;
		align-items: center;
		margin: 0 -.125rem;
		color: #f4bd0e
	}

	.rating>* {
		padding: 0 .125rem
	}

	.rating .icon {
		font-size: 1rem
	}

	.product-card {
		overflow: hidden;
		height: 100%
	}

	.product-thumb {
		position: relative
	}

	.product-badges {
		position: absolute;
		top: 1rem;
		left: 1rem;
		display: flex;
		flex-wrap: wrap;
		margin: -0.25rem
	}

	.product-badges>li {
		padding: 0.25rem
	}

	.product-tags {
		display: flex;
		flex-wrap: wrap;
		justify-content: center
	}

	.product-tags>li {
		padding: 0.25rem
	}

	.product-tags a {
		color: #8094ae
	}

	.product-tags a:hover {
		color: #6576ff
	}

	.product-tags+.product-title {
		margin-top: 0.5rem
	}

	.product-title a {
		color: #364a63
	}

	.product-title+.product-price {
		margin-top: 1rem
	}

	.product-actions {
		position: absolute;
		bottom: .25rem;
		left: 50%;
		transform: translateX(-50%);
		border-radius: 4px 4px 0 0;
		overflow: hidden;
		transition: .2s linear;
		display: flex;
		opacity: 0
	}

	.product-card:hover .product-actions {
		opacity: 1
	}

	.product-actions li {
		padding: 0 .125rem
	}

	.product-actions li a {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		color: #526484;
		font-size: 15.6px;
		height: 2.125rem;
		width: 2.125rem;
		transition: .3s ease
	}

	.product-actions li a:hover {
		color: #6576ff
	}

	.product-gallery {
		position: relative;
		height: auto;
		margin: 0 0 30px 0;
		border-radius: 4px;
		border: 1px solid #e5e9f2
	}

	.product-gallery .slick-list {
		padding-left: 0 !important;
		padding-right: 0 !important
	}

	.product-gallery .slider-nav {
		position: absolute;
		bottom: -30px;
		left: 50%;
		transform: translateX(-50%);
		width: 282px
	}

	.product-gallery .slider-nav .slider-item {
		padding: 0 8px
	}

	.product-gallery .slider-nav .slider-item .thumb {
		width: 78px;
		padding: 1px;
		border: 2px solid #e5e9f2;
		box-shadow: inset 1px 1px 0 #fff, inset -1px -1px 0 #fff, inset 1px -1px 0 #fff, inset -1px 1px 0 #fff;
		border-radius: 4px;
		transition: all .3s ease;
		cursor: pointer
	}

	.product-gallery .slider-nav .slider-item.slick-current .thumb {
		border-color: #6576ff;
		cursor: default
	}

	.product-rating {
		display: flex;
		align-items: center
	}

	.product-rating .amount {
		margin-left: 0.5rem;
		color: #8094ae
	}

	.product-excrept {
		margin-top: 1.5rem
	}

	.product-meta {
		margin-top: 2rem
	}

	.product-meta+.product-meta {
		margin-top: 1.25rem
	}

	@media (max-width: 420px) {
		.product-gallery .slider-nav {
			width: 188px
		}
	}

	@media (min-width: 768px) {
		.product-gallery .slider-nav {
			width: 384px
		}
	}

	@media (min-width: 1540px) {
		.product-gallery .slider-nav {
			width: 470px
		}
	}

	.gallery-image {
		position: relative;
		z-index: 1
	}

	.nk-order-ovwg-ck {
		height: 180px
	}

	.nk-order-ovwg-data {
		padding: 0.75rem 1.25rem 1.25rem;
		border: 2px solid transparent;
		border-radius: 4px
	}

	.nk-order-ovwg-data .amount {
		font-size: 1.5rem;
		font-weight: 700
	}

	.nk-order-ovwg-data .amount small {
		font-weight: 400
	}

	.nk-order-ovwg-data .info {
		font-size: 12px;
		color: #8094ae;
		margin-bottom: .25rem
	}

	.nk-order-ovwg-data .info strong {
		color: #364a63
	}

	.nk-order-ovwg-data .title {
		font-size: 14px;
		line-height: 1.3;
		color: #8094ae;
		font-weight: 500
	}

	.nk-order-ovwg-data .title .icon {
		font-size: 1rem;
		height: 28px;
		width: 28px;
		border-radius: 50%;
		background: #f5f6fa;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		margin-right: 0.5rem
	}

	.nk-order-ovwg-data.buy {
		border-color: #8ff0d6
	}

	.nk-order-ovwg-data.buy .amount,
	.nk-order-ovwg-data.buy .title .icon {
		color: #1ee0ac
	}

	.nk-order-ovwg-data.sell {
		border-color: #b2bbff
	}

	.nk-order-ovwg-data.sell .amount,
	.nk-order-ovwg-data.sell .title .icon {
		color: #6576ff
	}

	@media (min-width: 1540px) {
		.nk-order-ovwg-ck {
			height: 260px
		}
	}

	.nk-wg-action {
		display: flex;
		align-items: center;
		justify-content: space-between
	}

	.nk-wg-action-content {
		position: relative;
		padding-left: 2rem;
		padding-right: 1rem
	}

	.nk-wg-action-content .icon {
		font-size: 1.5rem;
		left: 0;
		position: absolute;
		color: #8094ae
	}

	.nk-wg-action-content .title {
		font-size: 14px;
		font-weight: 500;
		padding-bottom: 0.25rem
	}

	.nk-wg-action-content p {
		color: #8094ae;
		font-size: 13px;
		line-height: 1.25rem
	}

	.nk-wg-action-content p strong {
		color: #6576ff
	}

	.nk-coin-ovwg {
		display: flex
	}

	.nk-coin-ovwg-ck {
		flex-grow: 1;
		height: 165px
	}

	.nk-coin-ovwg-legends {
		width: 100px;
		flex-shrink: 0
	}

	.nk-coin-ovwg-legends li {
		display: flex;
		align-items: center;
		line-height: 1.25rem;
		font-size: 12px;
		padding: .25rem 0;
		color: #8094ae
	}

	.nk-coin-ovwg-legends li .dot {
		margin-right: 0.5rem
	}

	.nk-tb-orders-type {
		width: 66px
	}

	.nk-sale-data {
		flex-shrink: 0
	}

	.nk-sale-data-group {
		display: flex;
		flex-wrap: wrap
	}

	.nk-sale-data .amount {
		display: block;
		font-size: 1.75rem;
		color: #364a63
	}

	.nk-sale-data .amount .change {
		font-size: .875rem
	}

	.nk-sale-data .amount.sm {
		font-size: 1.125rem;
		color: #8094ae
	}

	.nk-sale-data .sub-title {
		color: #8094ae;
		font-size: 12px
	}

	.nk-sale-data .sub-title .change {
		margin-right: 0.5rem
	}

	.nk-sales-ck {
		height: 80px;
		flex-grow: 1
	}

	.nk-sales-ck.large {
		height: 200px
	}

	@media (min-width: 992px) and (max-width: 1539.98px) {
		.nk-sales-ck.sales-revenue {
			height: 164px
		}
	}

	.nk-activity-item {
		display: flex;
		align-items: center;
		padding: 1.25rem
	}

	.nk-activity-item:not(:last-child) {
		border-bottom: 1px solid #e5e9f2
	}

	.nk-activity-data {
		margin-left: 1rem
	}

	.nk-activity-data .time {
		display: block;
		font-size: 12px;
		color: #8094ae;
		line-height: 1.3
	}

	@media (min-width: 576px) {
		.nk-activity-item {
			display: flex;
			padding: 1rem 1.5rem
		}
	}

	.nk-support-item {
		display: flex;
		padding: 1.25rem
	}

	.nk-support-item:not(:last-child) {
		border-bottom: 1px solid #e5e9f2
	}

	.nk-support-content {
		flex-grow: 1;
		margin-left: 1rem
	}

	.nk-support-content .title {
		font-size: 0.875rem;
		font-weight: 700;
		color: #364a63;
		display: flex;
		justify-content: space-between;
		align-items: center
	}

	.nk-support-content p {
		margin-bottom: 0;
		margin-top: 0.25rem
	}

	.nk-support-content .time {
		display: block;
		font-size: 12px;
		color: #8094ae
	}

	@media (min-width: 576px) {
		.nk-support-item {
			display: flex;
			padding: 1.25rem 1.5rem
		}
	}

	.device-status {
		display: flex;
		flex-direction: column;
		padding-top: 1rem
	}

	.device-status-ck {
		height: 200px;
		margin: auto 0
	}

	.device-status-group {
		display: flex;
		justify-content: space-between;
		padding-top: 1.75rem;
		margin: auto;
		width: 280px;
		max-width: 100%
	}

	.device-status-data>.icon {
		font-size: 1.5rem
	}

	.device-status-data .title {
		font-size: 12px;
		color: #8094ae;
		margin-bottom: 0.5rem
	}

	.device-status-data .amount {
		font-size: 1.125rem;
		color: #364a63;
		font-weight: 500
	}

	.device-status-data .change {
		margin-left: -.125rem
	}

	.traffic-channel {
		margin-top: 1rem
	}

	.traffic-channel-ck {
		height: 44px;
		width: 130px;
		margin-top: -4px;
		margin-bottom: -4px
	}

	.traffic-channel-doughnut-ck {
		height: 160px
	}

	.traffic-channel-group {
		display: flex;
		flex-wrap: wrap;
		padding-top: 1.75rem;
		margin-left: auto !important;
		margin-right: auto !important;
		width: 320px;
		max-width: 100%
	}

	.traffic-channel-data {
		width: 50%
	}

	.traffic-channel-data .title {
		display: flex;
		align-items: center;
		color: #8094ae;
		font-size: 12px
	}

	.traffic-channel-data .title .dot {
		margin-right: 0.5rem
	}

	.traffic-channel-data .amount {
		font-size: 1.125rem;
		color: #364a63;
		margin-left: 1.25rem
	}

	.traffic-channel-data .amount small {
		font-size: 12px;
		color: #8094ae
	}

	@media (max-width: 575.98px) {
		.traffic-channel-ck {
			width: 100%
		}

		.traffic-channel-table .nk-tb-item {
			display: flex;
			flex-wrap: wrap;
			border-bottom: 1px solid #e5e9f2;
			padding: 1.125rem 0
		}

		.traffic-channel-table .nk-tb-col {
			border-bottom: none !important;
			padding-top: 0 !important;
			padding-bottom: 0 !important
		}

		.traffic-channel-table .nk-tb-channel {
			width: 50%
		}

		.traffic-channel-table .nk-tb-sessions {
			width: 25%
		}

		.traffic-channel-table .nk-tb-prev-sessions {
			display: none
		}

		.traffic-channel-table .nk-tb-change {
			width: 25%
		}

		.traffic-channel-table .nk-tb-trend {
			width: 100%;
			padding-left: 1.25rem
		}
	}

	@media (min-width: 1540px) and (max-width: 1800px) {
		.traffic-channel-data .amount {
			font-size: 1rem
		}
	}

	.analytic-data-group {
		display: flex;
		flex-wrap: wrap
	}

	.analytic-data .title {
		font-size: 12px;
		font-weight: 500;
		color: #8094ae;
		margin-bottom: 0.375rem
	}

	.analytic-data .title span {
		font-weight: 400
	}

	.analytic-data .amount {
		color: #364a63;
		font-size: 1.5rem;
		line-height: 1.2;
		margin-bottom: 0.25rem
	}

	.analytic-data .amount-sm {
		font-size: 1.125rem
	}

	.analytic-data .change {
		font-size: 13px;
		margin-left: -0.125rem
	}

	.analytic-data .subtitle {
		font-size: 12px;
		color: #8094ae
	}

	@media (min-width: 1540px) and (max-width: 1800px) {
		.analytic-data .amount {
			font-size: 1.25rem;
			line-height: 1.75rem
		}

		.analytic-data .amount-sm {
			font-size: 1.125rem
		}
	}

	.analytic-ov-data {
		width: 50%
	}

	.analytic-ov-ck {
		height: 175px;
		margin-top: 2rem
	}

	@media (min-width: 480px) {
		.analytic-ov-data {
			width: 25%
		}
	}

	.analytic-au-data {
		width: 33.3333%
	}

	.analytic-au-ck {
		height: 170px;
		margin-top: 2.25rem
	}

	.analytic-wp-data {
		display: flex;
		justify-content: space-between;
		align-items: flex-end
	}

	.analytic-wp-ck {
		height: 36px
	}

	.analytic-wp-graph {
		width: 150px;
		margin-top: 0.125rem;
		margin-bottom: 0.125rem
	}

	.analytic-wp-graph .title {
		margin-bottom: 0
	}

	.analytic-wp-text {
		text-align: right;
		margin-left: .5rem
	}

	@media (min-width: 420px) and (max-width: 767px) {
		.analytic-wp-graph {
			width: 60%
		}
	}

	@media (min-width: 1540px) and (max-width: 1800px) {
		.analytic-wp-graph {
			width: 120px
		}
	}

	.chart-label {
		font-size: 12px;
		color: #8094ae
	}

	.chart-label-group {
		margin-top: 0.5rem;
		display: flex;
		justify-content: space-between
	}

	.analytics-map .vector-map {
		height: 160px;
		margin: 1rem 0
	}

	.analytics-map-data {
		font-size: .875rem
	}

	.analytics-map-data td {
		padding: .25rem 0
	}

	.analytics-map-data .country {
		color: #8094ae
	}

	.analytics-map-data .amount {
		color: #364a63;
		text-align: right
	}

	.analytics-map-data .percent {
		text-align: right;
		color: #8094ae
	}

	.analytics-map-data-list {
		width: 100%;
		margin-bottom: -0.25rem
	}

	.card-title .subtitle {
		color: #8094ae;
		font-size: 13px;
		font-weight: 500
	}

	.card-amount {
		display: flex;
		align-items: baseline
	}

	.card-amount .change {
		margin-left: .5rem
	}

	.card-amount .amount {
		font-size: 1.5rem;
		color: #364a63
	}

	.card-amount .amount span {
		color: #526484
	}

	@media (min-width: 768px) and (max-width: 991.98px) {
		.card-amount .amount {
			font-size: 1rem;
			font-weight: 500
		}

		.card-amount .amount span {
			font-weight: 400
		}

		.card-amount .change {
			font-size: 12px
		}
	}

	.card-inner .nav-tabs-card {
		margin-left: -1.25rem;
		margin-right: -1.25rem
	}

	@media (min-width: 576px) {
		.card-inner .nav-tabs-card {
			margin-left: -1.5rem;
			margin-right: -1.5rem
		}
	}

	.nav-tabs-xs .nav-link {
		padding: .75rem 0;
		font-size: 13px;
		font-weight: 500
	}

	@media (min-width: 768px) {
		.nav-tabs-xs .nav-item {
			padding-right: 1.25rem
		}
	}

	@media (min-width: 992px) {
		.nav-tabs-sm .nav-item {
			padding-right: 1.25rem
		}
	}

	@media (min-width: 1200px) {
		.nav-tabs-sm .nav-item {
			padding-right: 1.25rem
		}
	}

	.invest-data {
		display: flex;
		align-items: flex-end;
		justify-content: space-between
	}

	.invest-data-history {
		margin-right: 20px;
		flex-grow: 1
	}

	.invest-data-history .title {
		font-size: 11px;
		color: #8094ae;
		text-transform: uppercase;
		margin-bottom: 0.125rem;
		letter-spacing: 0.1em
	}

	.invest-data-history .amount {
		font-size: .9375rem;
		line-height: 1.1;
		color: #364a63
	}

	.invest-data-history .amount span {
		color: #526484
	}

	.invest-data-amount {
		display: flex;
		flex-shrink: 0;
		flex-grow: 1
	}

	.invest-data-ck {
		flex-grow: 1;
		height: 48px;
		width: 80px;
		margin-bottom: 0.125rem
	}

	@media (min-width: 768px) and (max-width: 1350px),
	(max-width: 359px) {
		.invest-data {
			margin-top: 0.75rem
		}

		.invest-data-amount {
			flex-wrap: wrap;
			flex-shrink: 1
		}

		.invest-data-ck {
			height: 68px;
			width: 140px
		}
	}

	@media (min-width: 768px) and (max-width: 991.98px) {
		.invest-data-history .amount {
			font-size: .75rem;
			font-weight: 700
		}

		.invest-data-history .amount span {
			font-weight: 400
		}
	}

	.invest-ov {
		padding: 1.25rem 0 1rem
	}

	.invest-ov:last-child {
		padding-bottom: 0
	}

	.invest-ov:not(:last-child) {
		border-bottom: 1px solid #e5e9f2
	}

	.invest-ov .subtitle {
		color: #8094ae;
		font-size: 13px;
		font-weight: 500;
		margin-bottom: 0.25rem
	}

	.invest-ov .title {
		font-size: 11px;
		color: #8094ae;
		text-transform: uppercase;
		margin-top: 0.25rem;
		letter-spacing: 0.1em
	}

	.invest-ov .amount {
		font-size: 1.25rem;
		line-height: 1.1;
		color: #364a63
	}

	.invest-ov .amount span {
		color: #526484
	}

	.invest-ov-details {
		display: flex
	}

	.invest-ov-info {
		width: 60%
	}

	.invest-ov-stats {
		width: 40%
	}

	.invest-ov-stats>div {
		display: flex;
		align-items: baseline
	}

	.invest-ov-stats .change {
		margin-left: 0.25rem
	}

	.invest-top-ck {
		padding-top: 20px;
		height: 70px
	}

	.asterisk a {
		position: relative;
		color: #8094ae;
		display: inline-flex
	}

	.asterisk a:hover,
	.asterisk a.active {
		color: #ffa353
	}

	.asterisk a:hover .asterisk-on,
	.asterisk a.active .asterisk-on {
		opacity: 1
	}

	.asterisk a.active:hover .asterisk-on {
		opacity: 0
	}

	.asterisk-on {
		opacity: 0;
		position: absolute;
		left: 0;
		color: #ffa353;
		z-index: 1;
		transition: opacity .2s
	}

	.nk-reply {
		height: 100%;
		max-height: 100%;
		overflow: auto
	}

	.nk-reply-item {
		padding: 2rem 1.25rem
	}

	.nk-reply-item+.nk-reply-item {
		padding-top: 0
	}

	.nk-reply-item>div:not(.nk-reply-header) {
		margin-left: 48px
	}

	.nk-reply-header {
		display: flex;
		align-items: center;
		justify-content: space-between;
		margin-bottom: 0.5rem
	}

	.nk-reply-header .user-name {
		margin-left: 1rem;
		font-size: .875rem
	}

	.nk-reply-header .user-name span {
		color: #8094ae;
		font-weight: 400
	}

	.nk-reply-header .date-time {
		color: #8094ae;
		font-size: 12px
	}

	.nk-reply-entry.note {
		background: #f5f6fa;
		padding: 1.25rem;
		border-radius: 4px
	}

	.nk-reply-from {
		margin-top: 1.25rem;
		padding: .375rem .75rem;
		background: #f5f6fa;
		border-radius: 4px;
		display: inline-block;
		font-size: 13px
	}

	.nk-reply-meta {
		overflow: hidden;
		text-align: center;
		margin: 0 1.25rem;
		padding: 0 2rem
	}

	.nk-reply-meta-info {
		position: relative;
		display: inline-block;
		padding: 0 .75rem;
		color: #8094ae;
		font-size: 13px;
		line-height: 1.4
	}

	.nk-reply-meta-info span,
	.nk-reply-meta-info strong,
	.nk-reply-meta-info .who {
		color: #526484
	}

	.nk-reply-meta-info .whom {
		color: #6576ff
	}

	.nk-reply-meta-info:before,
	.nk-reply-meta-info:after {
		position: absolute;
		height: 1px;
		background: #e5e9f2;
		content: '';
		width: 100vw;
		top: 50%
	}

	.nk-reply-meta-info:before {
		right: 100%
	}

	.nk-reply-meta-info:after {
		left: 100%
	}

	.nk-reply-form {
		border-top: 1px solid #e5e9f2
	}

	.nk-reply-form-dropdown {
		margin-left: -0.5rem;
		margin-right: 0.75rem
	}

	.nk-reply-form-header {
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 0 1.25rem;
		border-bottom: 1px solid #e5e9f2
	}

	.nk-reply-form-title {
		display: flex;
		align-items: center
	}

	.nk-reply-form-title .title {
		color: #8094ae;
		margin-right: .75rem
	}

	.nk-reply-form-field {
		padding: .5rem 1.25rem
	}

	.nk-reply-form-field:not(:last-child) {
		border-bottom: 1px solid #e5e9f2
	}

	.nk-reply-form-field .form-control,
	.nk-reply-form-field div.dataTables_wrapper div.dataTables_filter input,
	div.dataTables_wrapper div.dataTables_filter .nk-reply-form-field input,
	.nk-reply-form-field .dual-listbox .dual-listbox__search,
	.dual-listbox .nk-reply-form-field .dual-listbox__search {
		font-size: 0.875rem
	}

	.nk-reply-form-field textarea.form-control,
	.nk-reply-form-field .dual-listbox textarea.dual-listbox__search,
	.dual-listbox .nk-reply-form-field textarea.dual-listbox__search {
		min-height: 78px
	}

	.nk-reply-form-field textarea.form-control.ex-large,
	.nk-reply-form-field .dual-listbox textarea.ex-large.dual-listbox__search,
	.dual-listbox .nk-reply-form-field textarea.ex-large.dual-listbox__search {
		min-height: 160px
	}

	.nk-reply-form-field+.nk-reply-form-tools {
		border-top: 0
	}

	.nk-reply-form-tools {
		padding: 1.25rem;
		border-top: 1px solid #e5e9f2;
		display: flex;
		justify-content: space-between
	}

	.nk-reply-form-actions {
		display: inline-flex;
		align-items: center
	}

	.nk-reply-form-options {
		display: inline-flex
	}

	.nk-reply-form-input {
		display: flex
	}

	.nk-reply-form-input .label {
		margin: .3rem .5rem .3rem 0;
		width: 1.25rem;
		color: #8094ae
	}

	.nk-reply-form-input-group {
		width: 100%
	}

	.nk-reply-form-input-cc,
	.nk-reply-form-input-bcc {
		display: none
	}

	.nk-reply-form-input-cc.expanded,
	.nk-reply-form-input-bcc.expanded {
		display: flex
	}

	.nk-reply-form-input .toggle-opt {
		display: inline-flex;
		align-items: center;
		color: #364a63
	}

	.nk-reply-form-input .toggle-opt:hover {
		color: #6576ff
	}

	.nk-reply-form-group {
		position: relative;
		padding: 1rem 0;
		flex-grow: 1;
		display: flex;
		align-items: flex-start
	}

	.nk-reply-form-nav {
		position: absolute;
		display: flex;
		align-items: center;
		align-self: flex-start;
		padding: 1.0625rem 0 0;
		right: 0;
		top: 0;
		margin: 0 -.375rem
	}

	.nk-reply-form-nav li a {
		font-size: 12px;
		color: #8094ae;
		display: block;
		line-height: 1.5rem;
		padding: .25rem .375rem
	}

	.nk-reply-form-nav li a:hover {
		color: #6576ff
	}

	.is-collapsed .nk-reply-msg-info {
		display: none
	}

	.nk-reply-msg-excerpt {
		color: #526484;
		display: none;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis
	}

	.is-collapsed .nk-reply-msg-excerpt {
		display: block
	}

	.nk-reply-msg-meta {
		padding: .75rem
	}

	.nk-reply-msg-meta li {
		display: flex;
		line-height: 1.125rem;
		padding: .1875rem 0
	}

	.nk-reply-msg-meta li .label {
		width: 75px;
		text-align: right;
		color: #8094ae;
		font-size: 12px;
		margin-right: 0.75rem
	}

	.nk-reply-msg-meta li .info {
		font-size: 13px
	}

	.nk-reply-msg-meta li .info a {
		color: #526484
	}

	.nk-reply-tools {
		display: flex;
		align-items: center;
		flex-shrink: 0;
		cursor: default
	}

	.nk-reply-tools .date {
		margin-right: 1rem;
		line-height: 2.25rem;
		color: #526484
	}

	.nk-reply-tools .attach-msg {
		font-size: 1.25rem;
		margin-right: 0.375rem
	}

	.nk-reply-desc {
		display: flex;
		flex-grow: 1
	}

	.is-collapsed .nk-reply-desc {
		overflow: hidden
	}

	.nk-reply-header .nk-reply-desc {
		align-items: center
	}

	.nk-reply-info {
		margin-left: 1rem;
		max-width: calc(100% - 4.5rem)
	}

	.nk-reply-header.is-collapsed {
		margin-bottom: 0
	}

	.nk-reply-header:not(.is-opened) {
		cursor: pointer
	}

	.is-collapsed+.nk-reply-body {
		display: none
	}

	.nk-reply-quick-btns ul {
		display: flex;
		align-items: center
	}

	.is-collapsed .prev-msg,
	.is-collapsed .next-msg,
	.is-collapsed .more-actions,
	.is-collapsed .replyto-msg,
	.is-collapsed .forwardto-msg {
		display: none
	}

	.input-mail {
		width: 100%;
		border: none
	}

	@media (max-width: 767.98px) {
		.nk-reply-tools {
			flex-wrap: wrap
		}

		.nk-reply-tools .date {
			font-size: 13px;
			margin-right: .5rem
		}

		.nk-reply-tools .attach-msg {
			font-size: 1.25rem;
			margin-right: 0.375rem
		}
	}

	@media (max-width: 575.98px) {
		.nk-reply-info {
			max-width: calc(100% - 2.5rem);
			margin-left: 0.75rem
		}

		.is-collapsed .nk-reply-info {
			max-width: calc(100% - 4.5rem)
		}

		.nk-reply-info .date {
			font-size: 11px;
			color: #8094ae;
			margin-left: .375rem
		}

		.nk-reply-info .lead-text {
			font-size: 13px
		}

		.nk-reply-form-dropdown {
			margin-right: 0.5rem
		}

		.nk-reply-form-group {
			flex-wrap: wrap;
			align-items: center
		}

		.nk-reply-form-title {
			font-weight: 500
		}

		.nk-reply-tools .attach-msg,
		.nk-reply-tools .date-msg {
			display: none
		}

		.nk-reply-avatar {
			height: 30px;
			width: 30px
		}

		.nk-reply-msg-excerpt {
			font-size: 12px;
			margin-top: 0.25rem
		}

		.nk-reply-msg-info .sub-text {
			font-size: 12px
		}

		.nk-reply-msg-info .dropdown-menu {
			margin-right: 16px !important
		}
	}

	@media (min-width: 576px) {
		.nk-reply-form {
			margin: 0.5rem 2.25rem 2.25rem;
			border: 1px solid #e5e9f2;
			border-radius: 4px
		}

		.nk-reply-form-header {
			padding: 0 1.5rem
		}

		.nk-reply-form-field {
			padding: .5rem 1.5rem
		}

		.nk-reply-form-field textarea.form-control.ex-large,
		.nk-reply-form-field .dual-listbox textarea.ex-large.dual-listbox__search,
		.dual-listbox .nk-reply-form-field textarea.ex-large.dual-listbox__search {
			min-height: 278px
		}

		.nk-reply-form-tools {
			padding: 1rem 1.5rem
		}

		.modal-body .nk-reply-form-tools {
			padding: 1.5rem
		}

		.nk-reply-item {
			padding: 2rem 2.25rem
		}

		.nk-reply-meta {
			margin: 0 2.25rem
		}

		.nk-reply-header .date-time {
			font-size: 13px
		}

		.nk-reply-quick-btns {
			margin: 0.5rem 2.25rem 2.25rem
		}
	}

	@media (min-width: 992px) {
		.nk-reply-form {
			margin: 0.5rem 2.5rem 2.5rem
		}

		.nk-reply-item {
			padding: 2rem 2.5rem
		}

		.nk-reply-meta {
			margin: 0 2.5rem
		}

		.nk-reply-quick-btns {
			margin: 0.5rem 2.5rem 2.5rem
		}
	}

	.attach-files {
		margin-top: 1.75rem;
		border: 1px solid #e5e9f2;
		border-radius: 4px
	}

	.attach-list {
		padding: 1rem 1.25rem;
		margin-bottom: -.5rem;
		display: flex;
		flex-wrap: wrap
	}

	.attach-item {
		width: 180px;
		padding-right: 2rem;
		padding-bottom: 0.5rem
	}

	.attach-item a {
		display: flex;
		align-items: center;
		width: 100%;
		color: #526484
	}

	.attach-item .icon {
		font-size: 1.5rem;
		color: #6576ff;
		margin-right: 0.75rem
	}

	.attach-foot {
		border-top: 1px solid #e5e9f2;
		background: #f5f6fa;
		padding: .75rem 1.25rem;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between
	}

	.attach-info {
		font-weight: 500;
		color: #364a63
	}

	.attach-download span {
		color: #8094ae;
		transition: all .3s
	}

	.attach-download:hover span {
		color: #6576ff
	}

	@media (max-width: 359px) {
		.attach-info {
			font-size: 12px
		}

		.attach-download {
			font-size: 12px
		}
	}

	.nk-msg-nav {
		position: relative;
		border-bottom: 1px solid #e5e9f2;
		padding: 0 1.25rem;
		background: #f5f6fa;
		z-index: 2;
		border-top-left-radius: 3px
	}

	.nk-msg-nav .search-wrap {
		padding: 0 1rem;
		bottom: -1px;
		border-bottom: 1px solid #e5e9f2
	}

	.nk-msg-nav .search-submit {
		transform: translate(0.25rem, -50%)
	}

	.nk-msg-menu {
		display: flex;
		margin: 0 -0.75rem
	}

	.nk-msg-menu-item {
		padding: 0 0.75rem
	}

	.nk-msg-menu-item a {
		display: inline-flex;
		position: relative;
		color: #8094ae;
		font-weight: 500;
		font-size: .875rem;
		line-height: 1.5rem;
		padding: 1rem 0
	}

	.nk-msg-menu-item a:after {
		position: absolute;
		content: '';
		height: 2px;
		background: #6576ff;
		bottom: -1px;
		left: 0;
		right: 0;
		opacity: 0;
		transition: .3s ease
	}

	.nk-msg-menu-item a .icon {
		font-size: 1.125rem;
		line-height: 1.5rem
	}

	.nk-msg-menu-item a:hover {
		color: #6576ff
	}

	.nk-msg-menu-item.active a {
		color: #6576ff
	}

	.nk-msg-menu-item.active a:after {
		opacity: 1
	}

	.nk-msg {
		position: relative;
		display: flex;
		overflow: hidden;
		background: #fff;
		border: 1px solid #dbdfea;
		border-radius: 4px;
		min-height: calc(100vh - (65px + 64px + 64px));
		max-height: calc(100vh - (65px + 64px + 64px))
	}

	.nk-msg-aside {
		width: 100%;
		overflow: hidden;
		max-height: 100%;
		position: relative;
		display: flex;
		flex-direction: column;
		flex-shrink: 0;
		background: rgba(245, 246, 250, 0.7);
		border-top-left-radius: 3px;
		border-bottom-left-radius: 3px
	}

	.nk-msg-list {
		max-height: 100%;
		height: 100%;
		overflow: auto
	}

	.nk-msg-item {
		display: flex;
		padding: 1.25rem 1.25rem;
		cursor: pointer
	}

	.nk-msg-item:not(:last-child) {
		border-bottom: 1px solid #e5e9f2
	}

	.nk-msg-item.active,
	.nk-msg-item.current {
		background: #fff;
		cursor: default
	}

	.nk-msg-info {
		max-width: calc(100% - 52px);
		margin-left: 0.75rem;
		flex-grow: 1
	}

	.nk-msg-from {
		display: flex;
		justify-content: space-between;
		align-items: center
	}

	.nk-msg-context {
		display: flex;
		justify-content: space-between;
		margin-top: 0.25rem
	}

	.nk-msg-context .asterisk {
		margin-top: auto
	}

	.nk-msg-sender {
		display: inline-flex;
		align-items: center;
		color: #8094ae;
		font-size: 12px
	}

	.nk-msg-sender .name {
		margin-right: 0.5rem
	}

	.is-unread .nk-msg-sender .name {
		font-weight: 500;
		color: #364a63
	}

	.nk-msg-meta {
		display: inline-flex;
		align-items: center;
		color: #8094ae;
		font-size: 12px
	}

	.nk-msg-meta .attchment .icon {
		font-size: 1.125rem
	}

	.nk-msg-meta .date {
		margin-left: 0.75rem
	}

	.nk-msg-text {
		max-width: calc(100% - 35px);
		flex-grow: 0;
		padding-right: 0.5rem
	}

	.nk-msg-text .title {
		font-size: 15px;
		margin-bottom: 0.25rem
	}

	.nk-msg-text p {
		font-size: 13px;
		color: #8094ae;
		max-height: 42px;
		overflow: hidden
	}

	.is-unread .nk-msg-text p {
		color: #526484;
		font-weight: 500
	}

	.nk-msg-lables {
		text-align: center;
		margin: -.125rem;
		display: inline-flex;
		flex-direction: column
	}

	.nk-msg-lables>div {
		padding: .125rem
	}

	.nk-msg-lables .icon {
		font-size: 1.125rem
	}

	.nk-msg-lables .badge {
		line-height: 14px;
		font-size: 10px;
		padding: 0 .25rem
	}

	.nk-msg-body {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		flex-grow: 1;
		display: flex;
		flex-direction: column;
		overflow: hidden;
		transition: padding .3s ease-in-out;
		opacity: 0;
		pointer-events: none;
		z-index: 5
	}

	.nk-msg-body.show-message {
		opacity: 1;
		pointer-events: auto
	}

	.nk-msg-profile {
		position: absolute;
		top: 0;
		right: 0;
		transform: translateX(100%);
		width: 280px;
		height: 100%;
		max-height: 100%;
		transition: transform .3s ease-in-out;
		background: #fff;
		z-index: 100
	}

	
	@media (max-width: 576px) {
		.dark-mode .nk-block-tools-toggle .toggle-expand-content {
			background-color: #212d3d
		}
	}

	.nk-sticky-toolbar {
		position: fixed;
		border: 3px solid #fff;
		top: 50%;
		background: #fff;
		z-index: 600;
		right: 0;
		border-radius: 6px 0 0 6px;
		border-right: 0;
		box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.15)
	}

	.nk-sticky-toolbar li:not(:last-child) {
		border-bottom: 2px solid #fff
	}

	.nk-sticky-toolbar li a {
		display: flex;
		height: 36px;
		width: 36px;
		align-items: center;
		justify-content: center;
		font-size: 18px;
		color: inherit
	}

	.demo-layout {
		background-color: rgba(85, 155, 251, 0.1);
		color: #559bfb
	}

	.demo-thumb {
		background-color: rgba(30, 224, 172, 0.1);
		color: #1ee0ac
	}

	.demo-settings {
		background-color: rgba(129, 107, 255, 0.1);
		color: #816bff
	}

	.demo-purchase {
		background-color: rgba(255, 99, 165, 0.1);
		color: #ff63a5
	}

	@media (min-width: 576px) {
		.nk-sticky-toolbar {
			top: 30%
		}

		.nk-sticky-toolbar li a {
			font-size: 20px;
			height: 44px;
			width: 44px
		}

		.nk-sticky-toolbar li.demo-thumb a {
			font-size: 22px
		}
	}

	.nk-demo-panel {
		position: fixed;
		right: 0;
		top: 0;
		width: 320px;
		max-width: calc(100vw - 40px);
		max-height: 100vh;
		height: 100vh;
		z-index: 9999;
		background-color: #fff;
		box-shadow: 0 3px 12px 1px rgba(43, 55, 72, 0.15);
		padding: 0 0 1.5rem
	}

	.nk-demo-panel+.toggle-overlay {
		z-index: 9000;
		background: rgba(16, 25, 36, 0.05)
	}

	.dark-mode .nk-demo-panel {
		box-shadow: 0 0 35px 5px rgba(0, 0, 0, 0.5)
	}

	.nk-demo-head {
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: .75rem 1.5rem;
		text-transform: uppercase;
		border-bottom: 1px solid #e5e9f2
	}

	.nk-demo-head h6 {
		font-size: 13px;
		letter-spacing: 0.1em
	}

	.nk-demo-list {
		overflow: auto;
		max-height: calc(100vh - 60px)
	}

	.nk-demo-title {
		display: block;
		font-size: .875rem;
		padding: .675rem 0;
		text-align: center;
		color: #526484;
		border-top: none;
		border-radius: 0 0 4px 4px
	}

	.nk-demo-title .subtitle {
		display: block;
		color: #8094ae;
		font-size: 11px
	}

	.nk-demo-item {
		padding: 2rem 1.5rem 1rem;
		border-bottom: 1px solid #e5e9f2
	}

	.nk-demo-item a {
		display: block
	}

	.nk-demo-item a:hover .nk-demo-title {
		color: #6576ff
	}

	.nk-demo-image {
		border: 1px solid #e5e9f2;
		border-radius: 4px 4px 0 0;
		padding: 1rem 1rem 0 1rem
	}

	.nk-demo-image img {
		border-radius: inherit
	}

	.nk-demo-note {
		background: #f5f6fa;
		padding-bottom: 2rem
	}

	@media (min-width: 576px) {
		.nk-demo-item {
			padding: 2rem 2rem 1rem
		}

		.nk-demo-head {
			padding: 15px 2rem 13px
		}

		.nk-demo-note {
			padding-bottom: 2rem
		}
	}

	@media (min-width: 768px) {
		.nk-demo-panel-2x {
			width: 640px
		}

		.nk-demo-panel-2x .nk-demo-list .simplebar-content {
			display: flex;
			flex-wrap: wrap
		}

		.nk-demo-panel-2x .nk-demo-list .simplebar-content .nk-demo-item {
			width: 50%
		}

		.nk-demo-panel-2x .nk-demo-list .simplebar-content .nk-demo-item:not(:nth-child(2n)) {
			border-right: 1px solid #e5e9f2
		}
	}

	.nk-opt-panel {
		overflow: auto;
		max-height: calc(100vh - 84px)
	}

	.nk-opt-reset {
		padding: 1.5rem 1.5rem 1.5rem
	}

	.nk-opt-set {
		padding: 1.5rem 1.5rem 1.5rem
	}

	.nk-opt-set:not(:last-child) {
		border-bottom: 1px solid #e5e9f2
	}

	.nk-opt-set-title {
		padding: 0 0 0.5rem;
		text-transform: uppercase;
		color: #8094ae;
		letter-spacing: 2px;
		font-weight: 500;
		font-size: 11px
	}

	.nk-opt-list {
		padding: 0;
		flex-wrap: wrap;
		margin: -0.5rem;
		display: flex
	}

	.nk-opt-list+.nk-opt-set-title {
		margin-top: 1.25rem
	}

	.nk-opt-item {
		width: 33%;
		text-align: center;
		padding: 0.5rem
	}

	.nk-opt-item:not(.active):not(.disabled) {
		cursor: pointer
	}

	.nk-opt-item.active {
		cursor: default
	}

	.nk-opt-item.disabled {
		pointer-events: none
	}

	.nk-opt-item.disabled>.nk-opt-item-name {
		opacity: .5
	}

	.col-2x .nk-opt-item {
		width: 50%
	}

	.col-4x .nk-opt-item {
		width: 25%
	}

	.nk-opt-item-name {
		font-weight: 400;
		color: #526484;
		font-size: 12px;
		letter-spacing: 0.02em
	}

	.nk-opt-item-name small {
		font-size: 11px
	}

	.dark-mode .nk-opt-item-name {
		color: #8094ae
	}

	.nk-opt-item-bg {
		background: #fff;
		width: 100%;
		height: 32px;
		border: 1px solid #dbdfea;
		padding: 3px;
		margin-bottom: 5px;
		position: relative;
		display: block;
		border-radius: 2px;
		transition: all 0.3s
	}

	.dark-mode .nk-opt-item-bg {
		border-color: #3c4d62
	}

	
</style>