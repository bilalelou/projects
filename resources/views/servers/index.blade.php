
<div class="mb-4">
<a href="#" class="text-white px-4 py-2 rounded hover:opacity-90" style="background-color: rgb(30 58 138 / var(--tw-bg-opacity));">
    إضافة فاتورة
</a>
</div>
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">قائمة الفواتير</h2>


            <div class="bg-green-500 text-white p-2 rounded mb-4">
            </div>



            <p class="text-gray-600">لا توجد فواتير حتى الآن.</p>
            <!-- جدول عرض الفواتير -->
        <div class="mb-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <label for="entries">Show</label>
                <select id="entries" class="border p-2 rounded" onchange="changeEntries()">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <span>entries</span>
            </div>
        </div>

<table class="table" id="vslist_list_table" border="0"
														cellspacing="1" cellpadding="8" align="center" width="100%">
                <thead
															class="bg-[#F8FAFD] dark:bg-[#15172B] border-y border-y-[#ECEFF3] dark:border-y-gray-800">
															<tr
																class="text-[#615E83] dark:text-[#B7B9C3] !text-sm uppercase text-start">
																<th width="5%"
																	class="!px-4 !py-3 font-medium cursor-pointer whitespace-nowrap">
																	<div
																		class="text-start flex items-center gap-2 uppercase">
																		<span>ID</span></div>
																</th>
                                                               <th width="150"
																	class="!px-4 !py-3 font-medium cursor-pointer whitespace-nowrap">
																	<div
																		class="text-start flex items-center gap-2 uppercase">
																		<span>اسم العميل</span></div>
																</th>
																<th width="150"
																	class="!px-4 !py-3 font-medium cursor-pointer whitespace-nowrap">
																	<div
																		class="text-start flex items-center gap-2 uppercase">
																		<span> نوع الخدمة
</span></div>
																</th>

																<th width="150"
																	class="!px-4 !py-3 font-medium cursor-pointer whitespace-nowrap">
																	<div
																		class="text-start flex items-center gap-2 uppercase">
																		<span>المبلغ</span></div>
																</th>
																<th width="150"
																	class="!px-4 !py-3 font-medium cursor-pointer whitespace-nowrap">
																	<div
																		class="text-start flex items-center gap-2 uppercase">
																		<span>الحالة</span></div>
																</th>

																<th width="10%"
																	class="!px-4 !py-3 font-medium cursor-pointer whitespace-nowrap">
																	<div
																		class="text-start flex items-center gap-2 uppercase">
																		<span>الخيارات</span></div>
																</th>
																<th width="1%" class="select-all-checkbox">
																	<div
																		class="text-start flex items-center gap-2 uppercase">
																		<span>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" name="select_all"
																					id="vps_select_all"
																					class="select_all virt-checkbox"
																					onchange="checkbox_select_all(this);">
																				<label class="custom-control-label"
																					for="vps_select_all">
																				</label>
																			</div>
																		</span></div>
																</th>
															</tr>
														</thead>
                <tbody>
                        <tr class="border-t">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">2</td>
                            <td class="py-2 px-4">3</td>
                            <td class="py-2 px-4">4</td>
                            <td class="py-2 px-4">
                                    <span class="text-green-500">مدفوعة</span>
                                    <span class="text-red-500">غير مدفوعة</span>
                            </td>
                            <td class="py-2 px-4">
                                <!-- تعديل الفاتورة -->
                                <a href="" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">تعديل</a>

                                <!-- حذف الفاتورة -->
                                <form action=" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
                                </form>

                                <!-- تحميل الفاتورة -->
                                <a href="" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">تحميل</a>
                            </td>
                        </tr>
                </tbody>
            </table>

    </div>
