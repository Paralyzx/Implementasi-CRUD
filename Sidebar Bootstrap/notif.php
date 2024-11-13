<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * { 
            font-style: italic;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 100vh;">
            <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="bi bi-vimeo me-2 fs-3"></i>
                <span class="fs-4">Vorm</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.html" class="nav-link active bg-dark text-light" aria-current="page">
                        <i class="bi bi-houses me-2 fs-5"></i>
                        Home
                    </a>
                </li> 
                <li>
                    <a href="notif.html" class="nav-link active bg-light text-dark">
                        <i class="bi bi-bell me-2 fs-5"></i>
                        Project
                    </a>
                </li>
                <li>
                    <a href="bookmark.html" class="nav-link text-white">
                        <i class="bi bi-bookmarks fs-5 me-2"></i>
                        Services
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="project4.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Fiko</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="project4.jpg">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Switch Account</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-10 text-dark" style="height:100vh;">
            <div class="row g-0 mt-3 ps-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">From</th>
                                        <th scope="col">Description</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1.</th>
                                        <td>@kebalserangan</td>
                                        <td>Liked your video 💗</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success" style="background-color: rgb(31, 255, 87);">View</a>
                                            <a href="" class="btn btn-sm btn-danger">Block</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2.</th>
                                        <td>@westalfaa_</td>
                                        <td>Liked you 💗</td>
                                        <td>
                                            <button class="btn btn-sm btn-info"><i class="bi bi-info-circle"></i></button>
                                            <a href="" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3.</th>
                                        <td>@alexandriarr_</td>
                                        <td>Liked you 💗</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success" style="background-color: rgb(31, 255, 87);">View</a>
                                            <a href="" class="btn btn-sm btn-danger">Block</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4.</th>
                                        <td>@riveannughraha_</td>
                                        <td>Just Followed You 🗿</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success" style="background-color: rgb(31, 255, 87);">View</a>
                                            <a href="" class="btn btn-sm btn-danger">Block</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5.</th>
                                        <td>@mshofiann</td>
                                        <td>Liked your video 💗</td>
                                        <td>
                                            <button class="btn btn-sm btn-info"><i class="bi bi-info-circle"></i></button>
                                            <a href="" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                            <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Form Input</div>
                        <div class="card-body">
                            <form id="projectForm" novalidate>
                                <div class="mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Project Category</label>
                                    <select class="form-control" required>
                                        <option value="" disabled selected>Select category</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Web Dev">Web Dev</option>
                                        <option value="SEO">SEO</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Project Date</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Project File</label>
                                    <input type="file" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Buang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your project has been successfully saved!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Buang Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apa kamu yakin ingin menghapus ini?!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('projectForm').addEventListener('submit', function(event) {
            event.preventDefault();
            if (this.checkValidity()) {
                var modal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                modal.show();
            } else {
                this.classList.add('was-validated');
            }
        });
    </script>
</body>
</html>
