class NewsController extends Controller
{
    public function add()
    {
        return view('admin.news.create');
    }

    // 以下を追記
    public function create(Request $request)
    {
        // admin/news/createにリダイレクトする
        return redirect('admin/news/create');
    }
}