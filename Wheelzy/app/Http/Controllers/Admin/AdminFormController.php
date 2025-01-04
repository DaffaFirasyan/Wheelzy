<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesanan;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Kategori;
use App\Models\Katalog;

class AdminFormController extends Controller
{
    /**
     * Menampilkan halaman utama admin dengan statistik dan daftar pesanan
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Mengambil nilai filter status dari query string
        $filterStatus = $request->get('status', null);

        // Filter pesanan berdasarkan status jika ada
        $query = Pesanan::query();

        if ($filterStatus) {
            $query->where('status', $filterStatus);
        }

        // Statistik pesanan
        $stats = [
            'total' => Pesanan::count(),
            'pending' => Pesanan::where('status', 'pending')->count(),
            'approved' => Pesanan::where('status', 'approved')->count(),
            'rejected' => Pesanan::where('status', 'rejected')->count(),
        ];

        // Ambil data pesanan dengan pagination
        $pesanan = $query->latest()->paginate(10);

        return view('admin.form', compact('pesanan', 'stats', 'filterStatus'));
    }

    /**
     * Menampilkan detail pesanan
     *
     * @param \App\Models\Pesanan $pesanan
     * @return \Illuminate\View\View
     */
    public function show(Pesanan $pesanan)
    {
        // Eager loading relasi katalog dan kategori
        $pesanan->load('katalog.kategori');
        return view('admin.form.show', compact('pesanan'));
    }

    /**
     * Menampilkan form edit pesanan
     *
     * @param \App\Models\Pesanan $pesanan
     * @return \Illuminate\View\View
     */
    public function edit(Pesanan $pesanan)
    {
        // Mengambil semua data kategori dan katalog untuk dropdown
        $kategoris = Kategori::all();
        $katalogs = Katalog::all();
        return view('admin.form.edit', compact('pesanan', 'kategoris', 'katalogs'));
    }

    /**
     * Menyimpan perubahan data pesanan
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Pesanan $pesanan
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'katalog_id' => 'required|exists:katalogs,id',
            'status' => 'required|in:pending,approved,rejected'
        ]);

        // Update data pesanan
        $pesanan->update($validated);

        return redirect()->route('admin.form')->with('success', 'Data pesanan berhasil diupdate');
    }

    /**
     * Menghapus pesanan
     *
     * @param \App\Models\Pesanan $pesanan
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Pesanan $pesanan)
    {
        // Hapus pesanan
        $pesanan->delete();
        return redirect()->route('admin.form')->with('success', 'Data pesanan berhasil dihapus');
    }

    /**
     * Export daftar pesanan ke PDF
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function exportPDF()
    {
        // Ambil semua pesanan untuk di-export
        $pesanan = Pesanan::latest()->get();

        // Generate PDF
        $pdf = PDF::loadView('admin.form.pdf-list', compact('pesanan'));
        return $pdf->download('daftar-pesanan.pdf');
    }

    /**
     * Export detail pesanan ke PDF
     *
     * @param \App\Models\Pesanan $pesanan
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function exportDetailPDF(Pesanan $pesanan)
    {
        // Generate PDF detail pesanan
        $pdf = PDF::loadView('admin.form.pdf-detail', compact('pesanan'));
        return $pdf->download('pesanan-' . $pesanan->id . '.pdf');
    }
}