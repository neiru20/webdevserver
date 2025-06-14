<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Display Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
      background-color: #f9f9f9;
    }

    table {
      width: 80%;
      border-collapse: collapse;
      margin: auto;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 12px 15px;
      border-bottom: 1px solid #ddd;
      text-align: left;
      vertical-align: middle; /* Vertically center content */
    }

    th {
      background-color: #007BFF;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    caption {
      caption-side: top;
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    /* Action buttons container */
    .action-buttons {
      display: flex;
      gap: 8px; /* space between buttons */
      align-items: center; /* vertical center */
    }

    /* Button styles */
    .action-buttons a,
    .action-buttons form {
      margin: 0; /* reset margin */
    }

    .action-buttons button,
    .action-buttons a {
      padding: 6px 12px;
      border: none;
      color: white;
      cursor: pointer;
      text-decoration: none;
      border-radius: 3px;
      font-size: 0.9rem;
      display: inline-block;
      min-width: 65px;
      text-align: center;
    }

    .edit-btn {
      background-color: #ffc107;
      color: #212529;
      font-weight: 600;
    }

    .edit-btn:hover {
      background-color: #e0a800;
    }

    .delete-btn {
      background-color: #dc3545;
    }

    .delete-btn:hover {
      background-color: #c82333;
    }
  </style>
</head>
<header>
  <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Log Out</button>
</form>

</header>
<body>
  <table>
    <caption>Student Records</caption>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th style="width: 200px;">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($studs as $studAct)
      <tr>
        <td>{{ $studAct->name }}</td>
        <td>{{ $studAct->email }}</td>
        <td>{{ $studAct->age }}</td>
        <td>
          <div class="action-buttons">
            <a href="{{ url('/editing-page/' . $studAct->id) }}" class="edit-btn">Edit</a>

            <form action="{{ route('destroy', $studAct->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="margin: 0;">
              @csrf
              @method('DELETE')
              <button type="submit" class="delete-btn">Delete</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>


