<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    1461900077_KEGIATAN4_P
  </title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>
  <div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
        
<style>
      table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
      }
      thead {
        background-color: #f2f2f2;
      }
      th, td {
        text-align: left;
        padding: 8px;
      }
      tr:nth-child(even) { background-color: #f2f2f2}
      .tambah {
        padding: 8px 16px ;
        text-decoration: none;
      }
      
  </style>
      <h1>Tugas : JOIN from Buku dan Jenis_Buku</h1>
        <a href="/buku/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <br>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
            <th class="px-4 py-3">ID</th>
            <th class="px-4 py-3">Judul</th>
            <th class="px-4 py-3">Tahun Terbit</th>
            <th class="px-4 py-3">Jenis</th>
          </tr>
        </thead>
        <tbody>
        @foreach($buku as $buku)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $buku->id }}</td>
            <td class="px-4 py-4">{{ $buku->judul }}</td>
            <td class="px-4 py-4">{{ $buku->tahun_terbit }}</td>
            <td class="px-4 py-4">{{ $buku->jenis }}</td>
            <td class="text-center py-4">
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      
    </div>
  </div>
</body>
</html>
