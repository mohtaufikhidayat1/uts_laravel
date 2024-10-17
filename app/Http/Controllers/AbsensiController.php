use App\Models\Absensi;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        return Absensi::with('pegawai')->get();
    }

    public function store(Request $request)
    {
        $absensi = Absensi::create($request->all());
        return response()->json($absensi, 201);
    }

    public function show($id)
    {
        return Absensi::with('pegawai')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->update($request->all());
        return response()->json($absensi, 200);
    }

    public function destroy($id)
    {
        Absensi::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
