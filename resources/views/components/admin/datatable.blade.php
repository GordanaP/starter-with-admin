<div class="card" id="{{ 'card'.$records }}">
    <div class="card-body {{ $tab_pane ?? null == true ? 'p-0' : '' }}" class=" border-gray-300 shadow-sm px-0 mb-4">
        <div class="pull-right mb-4">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ $route }}" class="btn btn-primary">
                    <i class="mdi mdi-library-plus"></i>
                </a>
            </div>
        </div>
        <table class="table hover mt-4 admin-table" cellspacing="0" width="100%"
            id="{{ 'table'.$records }}">

            <thead class="text-gray-700 uppercase text-xs tracking-wide" style="background: #f6f8fa">
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