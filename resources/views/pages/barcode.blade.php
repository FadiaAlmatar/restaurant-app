
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="visible-print text-center">
	<h1> Laravel QR Code Generator Example </h1>

		<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->errorCorrection('H')->size(200)->generate('codingdriver.com')) !!}" /><br>
		<ul class="d-flex p-0 justify-content-center" style="list-style:none;">
			<li>
				<form class="form-horizontal" action="{{ route('qrcode.download', [ 'type' => 'png' ])}}" method="post">
					@csrf
					<button type="submit" class="align-middle btn btn-outline-primary btn-sm">
						<i class="fas fa-fw fa-download"></i>
						PNG
					</button>
				</form>
			</li>
			<li>
				<form class="form-horizontal" action="{{ route('qrcode.download', [ 'type' => 'svg' ])}}" method="post">
					@csrf
					<button type="submit" class="align-middle btn btn-outline-primary btn-sm ml-1">
						<i class="fas fa-fw fa-download"></i>
						SVG
					</button>
				</form>
			</li>
			<li>
				<form class="form-horizontal" action="{{ route('qrcode.download',[ 'type' => 'eps' ])}}" method="post">
					@csrf
					<button type="submit" class="align-middle btn btn-outline-primary btn-sm ml-1">
						<i class="fas fa-fw fa-download"></i>
						EPS
					</button>
				</form>
			</li>
		</ul>
</div>

</body>
</html>
