<?php setTitle('Reset password');?>

<div class="container">
    <div class="row">
        <div class="col-4 m-auto ">

            <form action="/login" method="POST" class="mt-5">

                <?=setCsrf()?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPasswordConfirm" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPasswordConfirm">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <button type="submit" class="btn btn-primary">reset</button>

            </form>

        </div>
    </div>
</div>