<?php namespace Bantenprov\DDGuru\Http\Controllers;

/* require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\DDGuru\Facades\DDGuru;

/* Models */
use Bantenprov\DDGuru\Models\Bantenprov\DDGuru\DDGuru as DDGuruModel;
use Bantenprov\DDGuru\Models\Bantenprov\DDGuru\Province;
use Bantenprov\DDGuru\Models\Bantenprov\DDGuru\Regency;

/* etc */
use Validator;

/**
 * The DDGuruController class.
 *
 * @package Bantenprov\DDGuru
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDGuruController extends Controller
{

    protected $province;

    protected $regency;

    protected $dd_guru;

    public function __construct(Regency $regency, Province $province, DDGuruModel $dd_guru)
    {
        $this->regency  = $regency;
        $this->province = $province;
        $this->dd_guru     = $dd_guru;
    }

    public function index(Request $request)
    {
        /* todo : return json */

        return 'index';

    }

    public function create()
    {

        return response()->json([
            'provinces' => $this->province->all(),
            'regencies' => $this->regency->all()
        ]);
    }

    public function show($id)
    {

        $dd_guru = $this->dd-guru->find($id);

        return response()->json([
            'negara'    => $dd-guru->negara,
            'province'  => $dd-guru->getProvince->name,
            'regencies' => $dd-guru->getRegency->name,
            'tahun'     => $dd-guru->tahun,
            'data'      => $dd-guru->data
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'negara'        => 'required',
            'province_id'   => 'required',
            'regency_id'    => 'required',
            'kab_kota'      => 'required',
            'tahun'         => 'required|integer',
            'data'          => 'required|integer',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'title'     => 'error',
                'message'   => 'add failed',
                'type'      => 'failed',
                'errors'    => $validator->errors()
            ]);
        }

        $check = $this->dd-guru->where('regency_id',$request->regency_id)->where('tahun',$request->tahun)->count();

        if($check > 0)
        {
            return response()->json([
                'title'         => 'error',
                'message'       => 'Data allready exist',
                'type'          => 'failed',
            ]);

        }else{
            $data = $this->dd-guru->create($request->all());

            return response()->json([
                    'type'      => 'success',
                    'title'     => 'success',
                    'id'      => $data->id,
                    'message'   => 'PDRB '. $this->regency->find($request->regency_id)->name .' tahun '. $request->tahun .' successfully created',
                ]);
        }

    }

    public function update(Request $request, $id)
    {
        /* todo : return json */
        return '';

    }

    public function destroy($id)
    {
        /* todo : return json */
        return '';

    }
}

