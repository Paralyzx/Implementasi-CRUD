<?php
include 'simpan.php';
?>

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
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="row g-0">
        <aside class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 100vh;">
            <a href="project4.jpg" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="bi bi-vimeo me-2 fs-3"></i>
                <span class="fs-4">Vorm</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active bg-light text-dark" aria-current="page">
                        <i class="bi bi-houses me-2 fs-5"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="notif.php" class="nav-link text-white">
                        <i class="bi bi-bell me-2 fs-5"></i>
                        Project
                    </a>
                </li>
                <li>
                    <a href="bookmark.php" class="nav-link text-white">
                        <i class="bi bi-bookmarks fs-5 me-2"></i>
                        Services
                    </a>
                </li>
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
        </aside>

        <main class="col-md-10 text-dark" style="height:100vh;">
            <div class="row g-0 mt-3 ps-5">
                <div class="col-md-8">
                    <div class="card text-center">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">nickname</th>
                                        <th scope="col">tanggal</th>
                                        <th scope="col">deskripsi</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tr>
                                   <?php
                                   $x = 1;
                                      include 'koneksi.php';
                                        $query = mysqli_query($koneksi, "SELECT * FROM data ");
                                        while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                            <td> <?php echo $x++ ?></td>
                                            <td> <?php echo $data ['nickname']?></td>
                                            <td> <?php echo $data ['tanggal']?></td>
                                            <td> <?php echo $data ['deskripsi']?></td>
                                          <td><button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-info-circle"></i></button>
                                                <a href="edit.php?id=<?php echo $data ['id'];?>" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                                <a href="delete.php?id=<?php echo $data['id'];?>" onClick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></a>
                                              </td>
                                </tr>
                                <?php } ?>
                                
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <form action  method="post"> 
                                        <label class="form-label" for="">nickname</label>
                                        <input type="text" name="nickname" class="form-control" aria-label="Sizing example input" required>
                                        
                                        <label class="form-label" for="">tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" required>
                                        <label class="form-label" for="">Description</label>
                                        <textarea class="form-control" name="deskripsi"></textarea>
                                       
                                      
                                        <button type="submit"name="submit"  class="btn btn-success text-white mt-3">Submit</button>
                                        <button type="submit" class="btn btn-primary text-white mt-3">cancel</button>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-aqhidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="infoModalLabel">Information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            This is some information about the project. You can add more details here.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function () {
            'use strict'
            const forms = document.querySelectorAll('form')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
