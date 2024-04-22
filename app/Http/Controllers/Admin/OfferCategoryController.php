<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Offer_category;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OfferCategoryController extends Controller
{
    //All Sites
    public function AllOffer()
    {
        $offers = Offer_category::latest()->get();
        return view('admin.pages.offer_category.all_offer_category', compact('offers'));
    }

    //StoreOffer
    public function StoreOffer(Request $request)
    {

        $mainFile = $request->file('offer_image');
        $imgPath = storage_path('app/public/offer_image');

        if (empty($mainFile)) {

            Offer_category::insert([

                'name' => $request->name,
                'offer_category' => $request->offer_category,
                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description,

            ]);
        } else {

            $globalFunImg = Helper::customUpload($mainFile, $imgPath);

            if ($globalFunImg['status'] == 1) {
                Offer_category::insert([

                    'name' => $request->name,
                    'offer_category' => $request->offer_category,
                    'price' => $request->price,
                    'discount_price' => $request->discount_price,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'description' => $request->description,

                    'offer_image' => $globalFunImg['file_name'],

                ]);
            } else {
                toastr()->warning('Image upload failed! plz try again.');
            }
        }

        toastr()->success('Offer Created Successfully');
        return redirect()->route('all.offer');

    }

    //Update Offer
    public function UpdateOffer(Request $request)
    {
        $offer = Offer_category::findOrFail($request->id);

        $mainFile = $request->file('offer_image');

        $uploadPath = storage_path('app/public/offer_image');

        if (isset($mainFile)) {
            $globalFunImg = Helper::customUpload($mainFile, $uploadPath);
        } else {
            $globalFunImg['status'] = 0;
        }

        if (!empty($offer)) {

            if ($globalFunImg['status'] == 1) {
                if (File::exists(public_path('storage/offer_image/requestImg/') . $offer->offer_image)) {
                    File::delete(public_path('storage/offer_image/requestImg/') . $offer->offer_image);
                }
                if (File::exists(public_path('storage/offer_image/') . $offer->offer_image)) {
                    File::delete(public_path('storage/offer_image/') . $offer->offer_image);
                }
            }

            $offer->update([

                'name' => $request->name,
                'offer_category' => $request->offer_category,
                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description,

                'offer_image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $offer->offer_image,

            ]);
        }

        toastr()->success('Offer Update Successfully');

        return redirect()->route('all.offer');
    }

    //Delete Offer
    public function DeleteOffer($id)
    {

        $offer = Offer_category::find($id);

        if (File::exists(public_path('storage/offer_image/requestImg/') . $offer->offer_image)) {
            File::delete(public_path('storage/offer_image/requestImg/') . $offer->offer_image);
        }

        if (File::exists(public_path('storage/offer_image/') . $offer->offer_image)) {
            File::delete(public_path('storage/offer_image/') . $offer->offer_image);
        }

        $offer->delete();

        toastr()->success('Offer Delete Successfully');

        return redirect()->route('all.offer');
    }

    //InactiveOffer
    public function InactiveOffer($id)
    {

        Offer_category::find($id)->update([
            'status' => '0',
        ]);

        toastr()->success('Offer Inactive Successfully');

        return redirect()->back();
    }

    //ActiveOffer
    public function ActiveOffer($id)
    {

        Offer_category::find($id)->update([
            'status' => '1',
        ]);

        toastr()->success('Offer Active Successfully');

        return redirect()->back();
    }

}
