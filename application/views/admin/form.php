<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Form <?= (isset($contract)) ? 'Edit' : 'Add' ?></h6>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form <?= (isset($contract)) ? 'Edit' : 'Add' ?></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="custom-validation" action="<?= base_url() ?>C_contract_terms/<?= (isset($contract)) ? 'edit/' . $contract['id'] : 'add' ?>" method="Post">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="input[title]" class="form-control" required placeholder="Type Title" value="<?= (isset($contract)) ? $contract['title'] : '' ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Textarea</label>
                                <div>
                                    <textarea required class="form-control" name="input[contract_terms]" rows="5"><?= (isset($contract)) ? $contract['contract_terms'] : '' ?></textarea>
                                </div>
                            </div>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>