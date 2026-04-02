                <div class="bg-white rounded-xl shadow-md p-6">
                    <h4 class="font-semibold text-gray-800 mb-4">Pengaturan Tema & Tampilan</h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Color Settings -->
                        <div>
                            <h5 class="text-sm font-medium text-gray-700 mb-3">Warna Tema</h5>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Warna Utama</span>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-indigo-600 rounded-full"></div>
                                        <input type="text" value="#4f46e5" class="border rounded px-2 py-1 text-sm w-24">
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Warna Sekunder</span>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-purple-600 rounded-full"></div>
                                        <input type="text" value="#9333ea" class="border rounded px-2 py-1 text-sm w-24">
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Warna Aksen</span>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-red-500 rounded-full"></div>
                                        <input type="text" value="#ef4444" class="border rounded px-2 py-1 text-sm w-24">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Layout Settings -->
                        <div>
                            <h5 class="text-sm font-medium text-gray-700 mb-3">Layout</h5>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Tampilan Produk per Baris</span>
                                    <select class="border rounded px-2 py-1 text-sm">
                                        <option>4 produk</option>
                                        <option>5 produk</option>
                                        <option>6 produk</option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Tampilan Sidebar</span>
                                    <select class="border rounded px-2 py-1 text-sm">
                                        <option>Kiri</option>
                                        <option>Kanan</option>
                                        <option>Hidden</option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Mode Tampilan</span>
                                    <select class="border rounded px-2 py-1 text-sm">
                                        <option>Light</option>
                                        <option>Dark</option>
                                        <option>System</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold hover:bg-gray-50">Batal</button>
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-semibold hover:bg-indigo-700">Simpan Perubahan</button>
                    </div>
                </div>