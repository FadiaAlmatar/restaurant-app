<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    public function downloadQRCode(Request $request, $type)
    {
        $headers    = array('Content-Type' => ['png', 'svg', 'eps']);
        $type       = $type == 'jpg' ? 'png' : $type;
        $image      = \SimpleSoftwareIO\QrCode\Facades\QrCode::format($type)
            ->size(200)->errorCorrection('H')
            ->generate('codingdriver');

        $imageName = 'qr-code';
        if ($type == 'svg') {
            $svgTemplate = new \SimpleXMLElement($image);
            $svgTemplate->registerXPathNamespace('svg', 'http://www.w3.org/2000/svg');
            $svgTemplate->rect->addAttribute('fill-opacity', 0);
            $image = $svgTemplate->asXML();
        }

        \Illuminate\Support\Facades\Storage::disk('public')->put($imageName, $image);

        return response()->download('storage/' . $imageName, $imageName . '.' . $type, $headers);
    }
}
