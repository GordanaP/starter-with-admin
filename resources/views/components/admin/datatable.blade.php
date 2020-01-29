<div class="card" id="{{ 'card'.$records }}">
    <div class="card-body {{ $tab_pane ?? null == true ? 'p-0' : '' }}" class=" border-gray-300 shadow-sm px-0 mb-4">
        <table class="table hover mt-2 admin-table" cellspacing="0" width="100%"
            id="{{ 'table'.$records }}">

            <thead class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wide">
                <th>
                    <label class="checkbox-container">
                        <input type="checkbox" id="{{ 'checkAll'.$records }}">
                    </label>
                </th>

                {{ $slot }}

                <th width="10%"></th>
            </thead>

            <tbody></tbody>
        </table>
    </div>
</div>