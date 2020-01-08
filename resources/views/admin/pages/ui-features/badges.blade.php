@extends('layouts.admin')

@section('title', 'Badges')

@section('content')
    @adminPageHeader(['title' => 'Badges', 'item' => 'UI Elements'])
    @endadminPageHeader

    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Normal Badges</h4>
                    <p class="card-description">Add class <code>.badge-{color}</code> with <code>.badge</code></p>
                    <div class="template-demo">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="pl-0">Item</th>
                                    <th class="text-right">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">Primary label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-primary">Primary</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Info label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-info">Info</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Danger label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-danger">Danger</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Success label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-success">Success</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Warning label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-warning">Warning</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Badge Pills</h4>
                    <p class="card-description">Add class <code>.badge-pill</code></p>
                    <div class="template-demo">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="pl-0">Item</th>
                                    <th class="text-right">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">Primary label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-primary badge-pill">Primary</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Info label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-info badge-pill">Info</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Danger label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-danger badge-pill">Danger</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Success label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-success badge-pill">Success</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Warning label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-warning badge-pill">Warning</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Badge Outlined Variations</h4>
                    <p class="card-description">Add class <code>.badge-outline-*</code></p>
                    <div class="template-demo">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="pl-0">Normal</th>
                                    <th class="text-right">Rounded</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">
                                        <div class="badge badge-outline-primary badge-pill">Primary</div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-outline-primary">Primary</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="badge badge-outline-info badge-pill">Info</div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-outline-info">Info</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="badge badge-outline-danger badge-pill">Danger</div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-outline-danger">Danger</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="badge badge-outline-success badge-pill">Success</div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-outline-success">Success</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="badge badge-outline-warning badge-pill">Warning</div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-outline-warning">Warning</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Badge Outlined Variations</h4>
                    <div class="template-demo">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="pl-0">Item</th>
                                    <th class="text-right">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">Rounded Primary</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-outline-primary">2</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Rounded Info</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-outline-info">5</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Rounded Danger</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-outline-danger">1</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Rounded Success</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-outline-success">9</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Rounded Warning</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-outline-warning">4</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Badge Variations</h4>
                    <div class="template-demo">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="pl-0">Item</th>
                                    <th class="text-right">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">Rounded Primary</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-primary">2</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Rounded Info</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-info">5</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Rounded Danger</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-danger">1</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Rounded Success</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-success">9</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Rounded Warning</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-warning">4</div>
                                    </td>
                                </tr>
                            </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Badge With Icons</h4>
                    <div class="template-demo">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="pl-0">Item</th>
                                    <th class="text-right">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">Icon Badge</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-primary"><i class="mdi mdi-account"></i></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Outlined Icons</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-outline-info"><i class="mdi mdi-cloud-outline"></i></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Icon With Text</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-danger"><i class="mdi mdi-email mr-2"></i>12</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Icon With Text</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-success">12<i class="mdi mdi-email ml-2"></i></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Icon Badge</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-pill badge-warning"><i class="mdi mdi-comment"></i></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Gradient Badges</h4>
                    <p class="card-description">Add class <code>.badge-gradient-{color}</code></p>
                    <div class="template-demo">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="pl-0">Item</th>
                                    <th class="text-right">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">Primary label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-primary">Primary</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Secondary label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-secondary">Secondary</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Info label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-info">Info</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Danger label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-danger">Danger</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Success label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-success">Success</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Warning label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-warning">Warning</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Gradient Rounded Badges</h4>
                    <p class="card-description">Add class <code>.badge-pill</code></p>
                    <div class="template-demo">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="pl-0">Item</th>
                                    <th class="text-right">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">Primary label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-primary badge-pill">Primary</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Secondary label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-secondary badge-pill">Secondary</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Info label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-info badge-pill">Info</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Danger label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-danger badge-pill">Danger</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Success label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-success badge-pill">Success</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">Warning label</td>
                                    <td class="pr-0 text-right">
                                        <div class="badge badge-gradient-warning badge-pill">Warning</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
