<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Products</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="max-w-6xl mx-auto my-10 p-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center border-b pb-4 mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Product Management</h1>
            <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded transition duration-200">
                + Add New Product
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 text-left text-sm uppercase font-semibold">
                        <th class="py-3 px-4 border-b">ID</th>
                        <th class="py-3 px-4 border-b">Product</th>
                        <th class="py-3 px-4 border-b">Category</th>
                        <th class="py-3 px-4 border-b">Price</th>
                        <th class="py-3 px-4 border-b">Stock</th>
                        <th class="py-3 px-4 border-b text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    <tr class="border-b hover:bg-gray-50 transition duration-150">
                        <td class="py-3 px-4 border-b">1</td>
                        <td class="py-3 px-4 border-b font-medium text-gray-900">iPhone 15 Pro</td>
                        <td class="py-3 px-4 border-b">Electronics</td>
                        <td class="py-3 px-4 border-b font-semibold">$999.00</td>
                        <td class="py-3 px-4 border-b">35 pcs</td>
                        <td class="py-3 px-4 border-b text-center">
                            <a href="#" class="text-yellow-600 hover:text-yellow-700 mr-3 font-semibold">Edit</a>
                            <button class="text-red-600 hover:text-red-700 font-semibold">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
 
