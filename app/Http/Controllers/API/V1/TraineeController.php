<?php

namespace App\Http\Controllers\API\V1;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreTraineeRequest;
use App\Http\Requests\V1\UpdateTraineeRequest;
use App\Models\Trainee;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TraineeResource;
use App\Http\Resources\V1\TraineeCollection;
use App\Filters\ApiFilter;
use App\Filters\V1\TraineeFilter;


class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $filter = new TraineeFilter();

        $includeLogbooks = $request->query('includeLogbooks');

        $filterItems = $filter->transform($request);

        $trainee = Trainee::where($filterItems);
        
        if($includeLogbooks){
            $trainee = $trainee->with('logbooks');
        }
        return new TraineeCollection($trainee->paginate()->appends($request->query()));
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
     * @param  \App\Http\Requests\StoreTraineeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTraineeRequest $request)
    {
        //
        return new TraineeResource(Trainee::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function show(Trainee $trainee)
    {
        //
        return new TraineeResource($trainee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainee $trainee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTraineeRequest  $request
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTraineeRequest $request, Trainee $trainee)
    {
        $trainee->update($request->all());
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainee $trainee)
    {
        //
    }
}
