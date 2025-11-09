<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>name</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

table {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    border-collapse: collapse;
    min-width: 500px;
    animation: fadeInUp 0.6s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

th {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 18px 25px;
    text-align: left;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

td {
    padding: 16px 25px;
    border-bottom: 1px solid #f0f0f0;
    color: #333;
    font-size: 15px;
    transition: all 0.3s ease;
}

tr:last-child td {
    border-bottom: none;
}

tr:hover td {
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.08) 0%, rgba(118, 75, 162, 0.08) 100%);
    transform: scale(1.01);
    cursor: pointer;
}

tr {
    transition: all 0.3s ease;
}

th:first-child,
td:first-child {
    padding-left: 30px;
}

th:last-child,
td:last-child {
    padding-right: 30px;
}

/* Responsive Design */
@media (max-width: 600px) {
    table {
        min-width: 100%;
    }
    
    th, td {
        padding: 12px 15px;
        font-size: 13px;
    }
    
    th:first-child,
    td:first-child {
        padding-left: 15px;
    }
    
    th:last-child,
    td:last-child {
        padding-right: 15px;
    }
}
</style>