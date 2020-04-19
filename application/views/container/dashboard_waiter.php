<div class='container mb-5'>
    <h3 class='font-weight-bold mt-4'>Welcome Back Jauzy</h3>
    <div class='d-flex'>
        <button type="button" class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#addnewpatient">
            Add new patient
        </button>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Patient Name" aria-label="Search" name="patientname">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <table class="table table-striped mt-3">
        <thead class='bg-main text-white'>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Problems</th>
                <th scope="col">Floor</th>
                <th scope="col">Room</th>
                <th scope="col">Day Scheduled</th>
                <th scope="col">Time</th>
                <th scope="col">Doctor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Kelilipan</td>
                <td>Lantai 3</td>
                <td>H003</td>
                <td>12 Januari 2020</td>
                <td>9:39</td>
                <td>Jauzy</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="addnewpatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body px-4">

                    <div class="form-group mb-3">
                        <label for="recipient-name" class="col-form-label">Patient Name:</label>
                        <input type="text" class="form-control" name="patientname" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="recipient-name" class="col-form-label">Problems:</label>
                        <input type="text" class="form-control" name="problems" required>
                    </div>

                    <label for="name" class=''>Floor</label>
                    <select class="form-control mb-3" name="floor" required>
                        <option value="Lantai 1">Lantai 1</option>
                    </select>

                    <label for="name" class=''>Room</label>
                    <select class="form-control mb-3" name="room" required>
                        <option value="H001">H001</option>
                    </select>

                    <label for="dateschedule">Date Scheduled</label>
                    <input type="date" name="date" id="dateschedule" class='form-control' required>

                    <label for="timeschedule" class='mt-3'>Time Scheduled</label>
                    <input type="time" id="timeschedule" name="time" min="09:00" max="18:00" required class='form-control'>

                    <label for="doctor" class='mt-3'>Doctor</label>
                    <select class="form-control mb-3" name="doctor" required>
                        <option value="Jauzy">jauzy</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"">Add patient</button>
                </div>
            </form>
        </div>
    </div>
</div>