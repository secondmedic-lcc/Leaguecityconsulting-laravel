<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')
        <div class="card member-statistics h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-0">Edit Social Links</h6>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.updateSocialLinks') }}" method="POST">
                    @csrf
                    <div class="row align-items-center">
                        <div class="table-responsive">
                            <table id="tableDrop" class="table nowrap" cellspacing="0" width="100%">
                                <tr>
                                    <th width="20%">
                                        Facebook <small>(optional)</small>
                                    </th>
                                    <td>
                                        <input type="text" name="facebook_url"
                                            value="{{ optional($links)->facebook_url }}" class="form-control bg-white"
                                            placeholder="Paste facebook url here" />
                                    </td>
                                </tr>
                                <tr>
                                    <th width="20%">
                                        Instagram <small>(optional)</small>
                                    </th>
                                    <td>
                                        <input type="text" name="instagram_url"
                                            value="{{ optional($links)->instagram_url }}" class="form-control bg-white"
                                            placeholder="Paste instagram url here" />
                                    </td>
                                </tr>
                                <tr>
                                    <th width="20%">
                                        Linkedin <small>(optional)</small>
                                    </th>
                                    <td>
                                        <input type="text" name="linkedin_url"
                                            value="{{ optional($links)->linkedin_url }}" class="form-control bg-white"
                                            placeholder="Paste linkedin url here" />
                                    </td>
                                </tr>
                                <tr>
                                    <th width="20%">
                                        Twitter <small>(optional)</small>
                                    </th>
                                    <td>
                                        <input type="text" name="twitter_url"
                                            value="{{ optional($links)->twitter_url }}" class="form-control bg-white"
                                            placeholder="Paste twitter url here" />
                                    </td>
                                </tr>
                                <tr>
                                    <th width="20%">
                                        Pinterest <small>(optional)</small>
                                    </th>
                                    <td>
                                        <input type="text" name="pinterest_url"
                                            value="{{ optional($links)->pinterest_url }}" class="form-control bg-white"
                                            placeholder="Paste pinterest url here" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-primary mt-3">Update Social Links</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
