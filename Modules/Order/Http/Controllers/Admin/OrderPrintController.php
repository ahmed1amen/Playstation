<?php

namespace Modules\Order\Http\Controllers\Admin;

use Illuminate\Support\Facades\Cache;
use Modules\Media\Entities\File;
use Modules\Order\Entities\Order;

class OrderPrintController
{
    /**
     * Show the specified resource.
     *
     * @param \Modules\Order\Entities\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

        $order->load('products', 'coupon', 'taxes');
        $logo =$this->getMedia(setting('storefront_header_logo'))->path;

        return view('order::admin.orders.print.show', compact('order','logo'));
    }

    private function getMedia($fileId)
    {
        return Cache::rememberForever(md5("files.{$fileId}"), function () use ($fileId) {
            return File::findOrNew($fileId);
        });
    }
}
