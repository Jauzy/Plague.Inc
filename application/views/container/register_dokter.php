<div>
    <div class='shape-wave-bottom' style="padding-bottom: 200px;">

        <div class='container vh-100 d-flex'>
            <div class='row m-auto'>
                <div class='col-md d-flex'>
                    <img src='./assets/img/undraw_doctors_hwty.svg' width='75%' class='m-auto' />
                </div>
                <div class='col-md-5'>
                    <form class='d-flex flex-column' action="" method="post">
                        <div class='text-main'>
                            <h1 class='mt-5 font-weight-bold'>Register as Doctor</h1>
                            <h5 class='mb-4'>Please fill in form below with correct information.</h5>
                            <div class="form-group mb-3">
                                <label for="name" class='font-weight-bold'>Kimi no na Wa</label>
                                <input placeholder="Ex: Kirito" type="text" class="form-control" name="name" aria-describedby="nameHelp">
                                <small id="nameHelp" class="form-text text-muted">Your full name here.</small>
                            </div>
                            <label for="name" class='font-weight-bold'>Spesialisasi</label>
                            <select class="form-control mb-3" name="spesialisasi">
                                <option value="Spesialis Mata">Spesialis Mata</option>
                                <option value="Spesialis Organ Dalam">Spesialis Organ Dalam</option>
                                <option value="Spesialis Bedah">Spesialis Bedah</option>
                            </select>
                            <div class="form-group">
                                <label for="email" class='font-weight-bold'>Email address</label>
                                <input placeholder="Ex: subarukyun@mail.com" type="email" class="form-control" name="email" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="password" class='font-weight-bold'>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group mb-0">
                                <label for="password" class='font-weight-bold'>Retype Password</label>
                                <input type="password" class="form-control" name="repassword">
                            </div>
                        </div>
                        <div class='d-flex'>
                            <a class='text-decoration-none font-weight-bold my-3 font-size-14 text-main' href='<?php base_url() ?>logindokter'>Already have an account? login.</a>
                            <a class='text-decoration-none font-weight-bold my-3 font-size-14 text-main ml-auto' href='<?php base_url() ?>registerwaiter'>Register as waiter.</a>
                        </div>
                        <div class='d-flex '>
                            <div class='px-2 w-50'>
                                <button class='btn btn-main w-100 text-white' type="submit" />Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>