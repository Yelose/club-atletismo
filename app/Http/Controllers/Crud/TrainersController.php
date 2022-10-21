<?php



namespace App\Http\Controllers;



use App\Models\Product;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Symfony\Component\Translation\Reader\TranslationReaderInterface;



class ProductController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $trainers = Trainer::latest()->paginate(15);



        return view('admin.trainers.index',compact('trainers'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('admin.trainers.create');

    }


    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',
            'photo' => 'required',
            'roll' => 'required',

        ]);



        Trainer::create($request->all());



        return redirect()->route('trainers.index')->with('success','Trainer created successfully.');

    }


    public function show(Trainer $trainers)

    {

        return view('admin.trainers.show',compact('trainer'));

    }

    public function edit(Trainer $trainer)

    {

        return view('admin.trainers.edit',compact('trainer'));

    }


    public function update(Request $request, Trainer $trainer)

    {

        $request->validate([

            'name' => 'required',
            'photo' => 'required',
            'roll' => 'required',

        ]);



        $product->update($request->all());



        return redirect()->route('products.index')

                        ->with('success','Product updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Models\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product)

    {

        $product->delete();



        return redirect()->route('products.index')

                        ->with('success','Product deleted successfully');

    }

}
