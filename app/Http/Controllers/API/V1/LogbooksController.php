<?php

namespace App\Http\Controllers\API\V1;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreLogbooksRequest;
use App\Http\Requests\V1\UpdateLogbooksRequest;
use App\Models\Logbooks;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\LogbooksResource;
use App\Http\Resources\V1\LogbooksCollection;
use App\Filters\ApiFilter;
use App\Filters\V1\LogbooksFilter;



class LogbooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new LogbooksFilter();
        $filterItems = $filter -> transform($request);

        if(count($filterItems)==0){
            return new LogbooksCollection(Logbooks::paginate());
        }else{
            
            $logbooks = Logbooks::where($filterItems)->paginate();

            return new LogbooksCollection($logbooks->appends($request->query()));
        }


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLogbooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLogbooksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logbooks  $logbooks
     * @return \Illuminate\Http\Response
     */
    public function show(Logbooks $logbooks)
    {
        //
        return new LogbooksResource($logbooks);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logbooks  $logbooks
     * @return \Illuminate\Http\Response
     */
    public function edit(Logbooks $logbooks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLogbooksRequest  $request
     * @param  \App\Models\Logbooks  $logbooks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLogbooksRequest $request, Logbooks $logbooks)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logbooks  $logbooks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logbooks $logbooks)
    {
        //
    }
}
