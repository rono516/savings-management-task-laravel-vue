<script setup></script>
<template>
    <div class="text-center justify-content-start">
        <h2 class="mb-4">Savings management</h2>
        <!-- <h4 class="text-uppercase">your balance</h4>
        <h4>Ksh. 40</h4> -->

        <!-- <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-3 shadow" style="border-right: 1px solid #dedede">
                <h5 class="text-uppercase mt-4 ">Income</h5>
                <h6 class="text-success">+Ksh. 50</h6>
            </div>
            <div class="col-md-3 shadow">
                <h5 class="text-uppercase mt-4">Expense</h5>
                <h5 class="text-danger">-Ksh. 500</h5>
            </div>
            <div class="col-md-3"></div>
        </div> -->

        <h3 class="mt-4 mb-4">Customer list</h3>
        <div class="container">
            <div>
                <ul style="list-style: none;" class="">
                    <!-- @foreach ($transactions as $transaction) -->
                    <li class="text-start mb-1">
                        <div class="row">
                            <div class="col-md-2">Collins Rono</div>
                            <div class="col-md-2">37842681</div>
                            <div class="col-md-3">0792009556</div>
                            <div class="col-md-3">ronocollins2000@gmail.com</div>
                            <div class="col-md-1">1</div>
                            <div class="col-md-1"> <a href="delete" class="btn btn-primary">Edit</a></div>
                        </div>
                    </li>
                    <!-- @endforeach -->

                </ul>
            </div>

        </div>

        <h3 class="py-4">Add Transaction</h3>
        <p>Add negative amount for spendings</p>

        <form action="{{ url('insert-transaction') }}" method="POST">

            <div class="form-group">
                <div class="row ">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 shadow d-flex justify-content-start">
                        <label for="description" class="mb-2">Transaction description</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="col-md-3 shadow d-flex justify-content-start">
                        <label for="amount" class="mb-2">Transaction amount</label>
                        <input type="amount" class="form-control" name="amount" id="amount">
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="py-2">
                    <button class="btn btn-primary">Add transaction</button>
                </div>
            </div>

        </form>

    </div>
</template>