<style>
    table{
        position: relative;
        border-collapse:collapse;
        width:100%;
    }
    table td{
        border: 1px solid #000;
        padding: 5px;
    }
    h1,h2,p{
        margin:0;
        text-align: center;
    }
    p{
        padding-bottom:15px;
        margin-bottom: 10px ;
        border-bottom: 5px double #000;
    }

    .title{
        background-color:#cf6815;
    }

    .judul{
 
        width:5%;
        margin-bottom: 5px;
        margin-top:0;
        text-align: center;
    }

    .judul h3{
        border:2px solid ;
        width:5%;
        margin-bottom: 5px;
        margin-left: 5px;
        margin-top:0;
        text-align: center;
    }

</style>

<h1>PERPUSTAKAAN Sci-Fi</h1>
<h2>INI(Indonesia Netherland Incorporated)</h2>
<p>Jl Thamrin Madiun, Telp : (007) 02 , www.INI.com , perpus@ini.com</p>

<div class="judul">
 <h3>Buku</h3>
</div>

<table>
    <tr class="title">
        <td>#</td>
        <td>Judul</td>
        <td>Pengarang</td>
        <td>Penerbit</td>
        <td>Kategori</td>
        <td>Halaman</td>
        <td>Edisi</td>
        <td>ISBN</td>
    </tr>
    @foreach($buku as $rsBuku)
    <tr>
        <td>{{ $rsBuku->kd_buku  }}</td>
        <td>{{ $rsBuku->judul }}</td>
        <td>{{ $rsBuku->nama_pengarang }}</td>
        <td>{{ $rsBuku->nama_penerbit }}</td>
        <td>{{ $rsBuku->nama_kategori }}</td>
        <td>{{ $rsBuku->halaman }}</td>
        <td>{{ $rsBuku->edisi }}</td>
        <td>{{ $rsBuku->ISBN }}</td>
    </tr>
    @endforeach

</table>