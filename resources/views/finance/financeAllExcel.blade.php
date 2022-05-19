
    <style>
        #laporan-sederhana {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #laporan-sederhana td, #laporan-sederhana th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #laporan-sederhana tr:nth-child(even){background-color: #f2f2f2;}

        #laporan-sederhana tr:hover {background-color: #ddd;}

        #laporan-sederhana th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>

    <table id="laporan-sederhana" width="100%">
        <thead>
        <tr>
              <th>ID Product</th>
              <th>Products</th>
              <th>Product Out</th>
              <th>Tanggal Product Out</th>
              <th>Product In</th>
              <th>Tanggal Product In</th>
        </tr>
        </thead>
        
            <tbody>
            <tr>
                <td>{{$laporan->product_id}}</td>
                <td>{{ $laporan->nama }}</td>
                <td>{{ $out->qty }}</td>
                <td>{{ $out->tanggal }}</td>
                <td>{{ $in->qty }}</td>
                  <td>{{ $in->tanggal }}</td>
            </tr>
            </tbody>
      

    </table>




