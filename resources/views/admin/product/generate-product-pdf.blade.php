<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>{{$title}}</title>
</head>
<body>
    <!-- <h2>Title:{{$title}}</h2>
    <h2>Date:{{$date}}</h2> -->
    
    <div class="max-w-7xl mx-auto">
        

        <section class="px-10 py-5">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Product Name
                        </th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Description
                        </th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-right">
                            Product Category
                        </th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-right">
                            Quantity
                        </th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-right">
                            Date
                        </th>
                        <!-- <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-right">
                            Image
                        </th> -->
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                    <tr class="bg-white">
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-900">
                            {{$item->name}}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                            {{$item->description}}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                            {{$item->category}}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                            {{$item->price}}    
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                            {{$item->created_at}}
                        </td>
                        <!-- <
                        <!-- <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                        <a href="">
                                    <img src="/product/{{$item->image}}" alt="">
                                    </a>
                        </td>
                         -->
                    </tr>

                    <!-- <tr class="bg-gray-50">
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-900">
                            Website Development
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                            Hosting provisioned, website <br>
                            created and deployed.
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                            $40ph
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                            16hrs
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                            $640
                        </td>
                    </tr> -->

                    <!-- <tr class="bg-white">
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-900">
                            SEO
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500">
                            Website copy written. Website <br>
                            submitted to search engines.
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                            $25ph
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                            12hrs
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right">
                            $300
                        </td>
                    </tr> -->

                    <!-- <tr class="bg-gray-50">
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-900 font-medium text-right" colspan="4">
                            Sub-Total
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right font-medium">
                            $2,140
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-900 font-medium text-right" colspan="4">
                            Tax @ 20%
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-xs text-gray-500 text-right font-medium">
                            $428
                        </td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900 font-medium text-right" colspan="4">
                            Total
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 text-right font-medium">
                            $2,568
                        </td>
                    </tr> -->
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>
</html>