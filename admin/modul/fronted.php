          <h3 class="text-lg font-semibold text-gray-800 mb-4">Kelola Frontend</h3>
                    
                    <!-- Hero Banner Management -->
                    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-semibold text-gray-800">Hero Banner</h4>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                <i class="fas fa-plus mr-2"></i>Tambah Banner
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Banner 1 -->
                            <div class="border rounded-lg overflow-hidden">
                                <img src="https://placehold.co/400x200/indigo/white?text=Banner+1" alt="Banner" class="w-full h-32 object-cover">
                                <div class="p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="font-semibold">Summer Sale 2024</h5>
                                        <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span>
                                    </div>
                                    <p class="text-sm text-gray-500 mb-3">Diskon hingga 70%</p>
                                    <div class="flex space-x-2">
                                        <button class="flex-1 bg-indigo-600 text-white py-1 rounded text-sm hover:bg-indigo-700">Edit</button>
                                        <button class="flex-1 border border-gray-300 text-gray-600 py-1 rounded text-sm hover:bg-gray-50">Nonaktifkan</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Banner 2 -->
                            <div class="border rounded-lg overflow-hidden">
                                <img src="https://placehold.co/400x200/purple/white?text=Banner+2" alt="Banner" class="w-full h-32 object-cover">
                                <div class="p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="font-semibold">Flash Sale</h5>
                                        <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span>
                                    </div>
                                    <p class="text-sm text-gray-500 mb-3">Hanya 24 jam!</p>
                                    <div class="flex space-x-2">
                                        <button class="flex-1 bg-indigo-600 text-white py-1 rounded text-sm hover:bg-indigo-700">Edit</button>
                                        <button class="flex-1 border border-gray-300 text-gray-600 py-1 rounded text-sm hover:bg-gray-50">Nonaktifkan</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Banner 3 -->
                            <div class="border rounded-lg overflow-hidden">
                                <img src="https://placehold.co/400x200/blue/white?text=Banner+3" alt="Banner" class="w-full h-32 object-cover">
                                <div class="p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="font-semibold">New Arrivals</h5>
                                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Nonaktif</span>
                                    </div>
                                    <p class="text-sm text-gray-500 mb-3">Produk terbaru</p>
                                    <div class="flex space-x-2">
                                        <button class="flex-1 bg-indigo-600 text-white py-1 rounded text-sm hover:bg-indigo-700">Edit</button>
                                        <button class="flex-1 bg-green-600 text-white py-1 rounded text-sm hover:bg-green-700">Aktifkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category Management -->
                    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-semibold text-gray-800">Kategori Produk</h4>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                <i class="fas fa-plus mr-2"></i>Tambah Kategori
                            </button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Nama Kategori</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Ikon</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Jumlah Produk</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-3 text-sm">Elektronik</td>
                                        <td class="px-4 py-3"><i class="fas fa-tv text-indigo-600"></i></td>
                                        <td class="px-4 py-3 text-sm">856</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm">Fashion Pria</td>
                                        <td class="px-4 py-3"><i class="fas fa-tshirt text-indigo-600"></i></td>
                                        <td class="px-4 py-3 text-sm">623</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm">Fashion Wanita</td>
                                        <td class="px-4 py-3"><i class="fas fa-female text-indigo-600"></i></td>
                                        <td class="px-4 py-3 text-sm">745</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Product Management -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-semibold text-gray-800">Produk Terbaru</h4>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                <i class="fas fa-plus mr-2"></i>Tambah Produk
                            </button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Produk</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Kategori</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Harga</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Stok</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://placehold.co/40x40/indigo/white" alt="Product" class="w-10 h-10 rounded">
                                                <span class="text-sm font-medium">Samsung Galaxy S23</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">Elektronik</td>
                                        <td class="px-4 py-3 text-sm">Rp 12.999.000</td>
                                        <td class="px-4 py-3 text-sm">45</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://placehold.co/40x40/blue/white" alt="Product" class="w-10 h-10 rounded">
                                                <span class="text-sm font-medium">iPhone 15 Pro</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">Elektronik</td>
                                        <td class="px-4 py-3 text-sm">Rp 21.999.000</td>
                                        <td class="px-4 py-3 text-sm">23</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://placehold.co/40x40/purple/white" alt="Product" class="w-10 h-10 rounded">
                                                <span class="text-sm font-medium">MacBook Pro M3</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">Laptop</td>
                                        <td class="px-4 py-3 text-sm">Rp 29.999.000</td>
                                        <td class="px-4 py-3 text-sm">12</td>
                                        <td class="px-4 py-3"><span class="bg-yellow-100 text-yellow-600 text-xs px-2 py-1 rounded">Draft</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>