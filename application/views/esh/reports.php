<div class="row">
    <div class="col-12">
        <h3>Shipments Reports</h3>
        <hr>
        <br><br>
    </div>
    <div class="col-md-3">
        <div class="card text-center" style="padding:10px;">
            <span class="h4"> <?php echo $call->MainSummary->TotalShimpments?> </span>
            <br>
            <b> Total Shimpments </b>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center" style="padding:10px;">
            <span class="h4"> <?php echo $call->MainSummary->Delivered?> </span>
            <br>
            <b> Delivered </b>
        </div>
    </div>
    <div class="col-md-3">

        <div class="card text-center" style="padding:10px;">
            <span class="h4"> <?php echo $call->MainSummary->UnDelivered?> </span>
            <br>
            <b> UnDelivered </b>
        </div>

    </div>
    <div class="col-md-3">
        <div class="card text-center" style="padding:10px;">
            <span class="h4"> <?php echo $call->MainSummary->ReScheduled?> </span>
            <br>
            <b> ReScheduled </b>
        </div>
    </div>
</div>