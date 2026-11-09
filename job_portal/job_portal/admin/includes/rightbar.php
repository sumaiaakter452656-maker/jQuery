
        <!-- Mini stats -->
        <!-- <div class="row g-3 g-xl-4 mb-4">
            <div class="col-6 col-xl-3 reveal">
                <div class="mini-stat tone-green"><span class="ico"><i class="bi bi-cash-coin"></i></span>
                    <div><h6 data-count="48500" data-prefix="৳">৳0</h6><small>Total Revenue</small></div></div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="mini-stat tone-red"><span class="ico"><i class="bi bi-hourglass-split"></i></span>
                    <div><h6 data-count="12">0</h6><small>Pending Jobs</small></div></div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="mini-stat tone-cyan"><span class="ico"><i class="bi bi-arrow-repeat"></i></span>
                    <div><h6 data-count="38">0</h6><small>Active Subscriptions</small></div></div>
            </div>
            <div class="col-6 col-xl-3 reveal">
                <div class="mini-stat tone-pink"><span class="ico"><i class="bi bi-star-fill"></i></span>
                    <div><h6 data-count="16">0</h6><small>Featured Jobs</small></div></div>
            </div>
        </div> -->

        <!-- Charts -->
        <!-- <div class="row g-3 g-xl-4 mb-4" id="analytics">
            <div class="col-xl-8 reveal">
                <div class="card-x">
                    <div class="card-x-head">
                        <div><h5>Platform Activity</h5><p>Applications vs new registrations – last 6 months</p></div>
                        <div class="chart-legend">
                            
                                <span><i style="background:Demo"></i>Sample User</span>
                            
                        </div>
                    </div>
                    <div class="card-x-body">
                        <div class="bar-chart"
                             data-labels='["Jun","Jul","Aug","Sep","Oct","Nov"]'
                             data-series='[{"name":"Applications","color":"#6366f1","values":[12,18,15,25,22,31]},{"name":"New Registrations","color":"#22d3ee","values":[6,9,8,13,11,17]}]'></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 reveal">
                <div class="card-x">
                    <div class="card-x-head"><div><h5>Application Status</h5><p>Overall hiring pipeline</p></div></div>
                    <div class="card-x-body">
                        <div class="donut-wrap">
                            <div class="donut" data-segments='[{"label":"Applied","value":38,"color":"#f59e0b"},{"label":"Viewed","value":20,"color":"#06b6d4"},{"label":"Shortlisted","value":15,"color":"#3b82f6"},{"label":"Interview","value":10,"color":"#8b5cf6"},{"label":"Hired","value":7,"color":"#10b981"},{"label":"Rejected","value":10,"color":"#ef4444"}]' data-legend="#appLegend">
                                <div class="donut-center"><div><strong>3580</strong><small>Total</small></div></div>
                            </div>
                            <div class="donut-legend" id="appLegend"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Recent jobs + categories -->
        <!-- <div class="row g-3 g-xl-4 mb-4">
            <div class="col-xl-8 reveal" id="recent-jobs">
                <div class="card-x">
                    <div class="card-x-head">
                        <div><h5>Recent Job Posts</h5><p>Latest jobs submitted by employers</p></div>
                        <div class="table-tools">
                            <select class="form-select form-select-sm" style="width:auto" data-status-filter="#jobsTable">
                                <option value="">All Status</option>
                                <option value="pending">Pending</option>
                                <option value="approved">Approved</option>
                                <option value="rejected">Rejected</option>
                                <option value="closed">Closed</option>
                            </select>
                            <div class="table-search d-none d-sm-block">
                                <i class="bi bi-search"></i>
                                <input type="search" placeholder="Search…" data-table-filter="#jobsTable">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-modern" id="jobsTable">
                            <thead>
                            <tr><th>Job</th><th>Category</th><th class="d-none d-xxl-table-cell">Type</th><th>Applicants</th><th>Deadline</th><th>Status</th><th class="text-end">Action</th></tr>
                            </thead>
                            <tbody>
                            
                                <tr data-status="approved">
                                    <td>
                                        <div class="cell-main">
                                            <span class="avatar round avatar-accent">CO</span>
                                            <div>
                                                <div class="t">Frontend Developer
                                                    <i class="bi bi-star-fill text-warning small" title="Featured"></i>
                                                </div>
                                                <div class="s">Tech Solutions · <i class="bi bi-geo-alt"></i> Dhaka</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="tag">Technology</span></td>
                                    <td class="text-nowrap d-none d-xxl-table-cell">Full Time</td>
                                    <td><span class="fw-semibold">24</span></td>
                                    <td class="text-nowrap 2026-11-30">20 Nov 2026</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td class="text-end text-nowrap">
                                        <a href="#" class="action-btn" data-bs-toggle="tooltip" title="View"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="action-btn" data-bs-toggle="tooltip" title="Approve"><i class="bi bi-check2"></i></a>
                                    </td>
                                </tr>
                            
                                <tr class="no-filter"><td colspan="7"><div class="empty-state"><i class="bi bi-briefcase"></i>No jobs posted yet</div></td></tr>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="card-x-foot"><a href="#">View all jobs <i class="bi bi-arrow-right"></i></a></div>
                </div>
            </div>

            <div class="col-xl-4 reveal">
                <div class="card-x">
                    <div class="card-x-head"><div><h5>Jobs by Category</h5><p>Where employers are hiring</p></div></div>
                    <div class="card-x-body">
                        
                            <div class="progress-item">
                                <div class="lbl"><span>Sample User</span><span>24 jobs</span></div>
                                <div class="progress"><div class="progress-bar" data-width="24"></div></div>
                            </div>
                        
                            <div class="empty-state"><i class="bi bi-tags"></i>No categories</div>
                        

                        <hr class="my-4">

                        <h6 class="fw-bold mb-3" id="top-companies">Top Companies</h6>
                        <ul class="list-x" style="margin:0 -1.35rem">
                            
                                <li>
                                    <span class="avatar round avatar-accent">CO</span>
                                    <div class="info"><div class="t">Sample User</div><div class="s"><i class="bi bi-geo-alt"></i> Dhaka</div></div>
                                    <span class="tag tag-accent">24 jobs</span>
                                </li>
                            
                                <li class="justify-content-center text-muted small">No companies yet</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Payments + Users -->
        <!-- <div class="row g-3 g-xl-4 mb-4">
            <div class="col-xl-7 reveal" id="payments">
                <div class="card-x">
                    <div class="card-x-head">
                        <div><h5>Recent Payments</h5><p>Pending payments are shown first for verification</p></div>
                        <div class="table-search">
                            <i class="bi bi-search"></i>
                            <input type="search" placeholder="Invoice / TrxID…" data-table-filter="#payTable">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-modern" id="payTable">
                            <thead><tr><th>Invoice</th><th>Employer</th><th>Package</th><th>Method</th><th>Amount</th><th>Status</th></tr></thead>
                            <tbody>
                            
                                <tr>
                                    <td class="text-nowrap"><div class="fw-bold">#INV-1024</div><small class="text-muted">Demo</small></td>
                                    <td><div class="fw-semibold">Sample User</div><small class="text-muted">user@example.com</small></td>
                                    <td><span class="tag tag-accent">Premium</span></td>
                                    <td class="text-nowrap">bKash</td>
                                    <td class="fw-bold text-nowrap">৳2,500</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                </tr>
                            
                                <tr class="no-filter"><td colspan="6"><div class="empty-state"><i class="bi bi-credit-card"></i>No payments yet</div></td></tr>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="card-x-foot"><a href="#">View all transactions <i class="bi bi-arrow-right"></i></a></div>
                </div>
            </div>

            <div class="col-xl-5 reveal" id="recent-users">
                <div class="card-x">
                    <div class="card-x-head">
                        <div><h5>New Users</h5><p>Recently registered accounts</p></div>
                        <span class="tag tag-accent">85 this month</span>
                    </div>
                    <ul class="list-x">
                        
                            <li>
                                <span class="avatar round avatar-blue">AD</span>
                                <div class="info">
                                    <div class="t">Sample User</div>
                                    <div class="s">user@example.com · 2 hours ago</div>
                                </div>
                                <div class="text-end d-flex flex-column gap-1 align-items-end">
                                    <span class="tag tag-success">Approved</span>
                                    <span class="tag tag-success">Approved</span>
                                </div>
                            </li>
                        
                            <li class="justify-content-center text-muted">No users yet</li>
                        
                    </ul>
                    <div class="card-x-foot"><a href="#">Manage users <i class="bi bi-arrow-right"></i></a></div>
                </div>
            </div>
        </div> -->

        <!-- Quick add form + Packages -->
        <!-- <div class="row g-3 g-xl-4 mb-2">
            <div class="col-xl-5 reveal" id="quick-add">
                <div class="card-x">
                    <div class="card-x-head">
                        <div><h5>Quick Add</h5><p>Add master data in seconds</p></div>
                        <ul class="nav nav-pills-x" role="tablist">
                            <li class="nav-item"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tabCategory" type="button">Category</button></li>
                            <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tabCity" type="button">City</button></li>
                            <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tabSkill" type="button">Skill</button></li>
                        </ul>
                    </div>
                    <div class="card-x-body tab-content"> -->
                        <!-- Category -->
                        <!-- <form class="tab-pane fade show active" id="tabCategory" data-demo="Category form ready (design preview)" novalidate>
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <div class="input-icon"><i class="bi bi-tag"></i><input type="text" name="name" class="form-control" placeholder="e.g. Marketing" required></div>
                                <div class="invalid-feedback">Please enter a category name.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Slug</label>
                                <div class="input-icon"><i class="bi bi-link-45deg"></i><input type="text" name="slug" class="form-control" placeholder="e.g. marketing" required></div>
                                <div class="invalid-feedback">Slug is required.</div>
                            </div>
                            <div class="d-flex flex-wrap gap-1 mb-3">
                                <small class="text-muted me-1">Existing:</small>
                                <span class="tag">Sample User</span>
                            </div>
                            <button class="btn btn-accent w-100"><i class="bi bi-plus-lg me-1"></i> Add Category</button>
                        </form> -->
                        <!-- City -->
                        <!-- <form class="tab-pane fade" id="tabCity" data-demo="City form ready (design preview)" novalidate>
                            <div class="mb-3">
                                <label class="form-label">City Name</label>
                                <div class="input-icon"><i class="bi bi-geo-alt"></i><input type="text" name="name" class="form-control" placeholder="e.g. Khulna" required></div>
                                <div class="invalid-feedback">Please enter a city name.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Division</label>
                                <div class="input-icon"><i class="bi bi-map"></i>
                                    <select name="division" class="form-select" required>
                                        <option value="">Select division</option>
                                        
                                            <option>15</option>
                                        
                                    </select>
                                </div>
                                <div class="invalid-feedback">Select a division.</div>
                            </div>
                            <button class="btn btn-accent w-100"><i class="bi bi-plus-lg me-1"></i> Add City</button>
                        </form> -->
                        <!-- Skill -->
                        <!-- <form class="tab-pane fade" id="tabSkill" data-demo="Skill form ready (design preview)" novalidate>
                            <div class="mb-3">
                                <label class="form-label">Skill Name</label>
                                <div class="input-icon"><i class="bi bi-lightning-charge"></i><input type="text" name="name" class="form-control" placeholder="e.g. React" required></div>
                                <div class="invalid-feedback">Please enter a skill.</div>
                            </div>
                            <button class="btn btn-accent w-100"><i class="bi bi-plus-lg me-1"></i> Add Skill</button>
                        </form> -->
                    <!-- </div>
                </div>
            </div>

            <div class="col-xl-7 reveal" id="packages">
                <div class="card-x">
                    <div class="card-x-head">
                        <div><h5>Subscription Packages</h5><p>Plans available to employers</p></div>
                        <a href="#" class="btn btn-light-accent btn-sm"><i class="bi bi-pencil-square me-1"></i> Manage</a>
                    </div>
                    <div class="card-x-body">
                        <div class="row g-3">
                            
                                <div class="col-md-4">
                                    <div class="pkg popular">
                                        <span class="ribbon">Popular</span>
                                        <div class="pkg-name">Sample User</div>
                                        <div class="pkg-price">৳2,500 <small>/ 30 days</small></div>
                                        <span class="tag tag-accent"><i class="bi bi-people me-1"></i>12 active</span>
                                        <ul>
                                            <li><i class="bi bi-check-circle-fill"></i>5 job post(s)</li>
                                            <li><i class="bi bi-check-circle-fill"></i>30 days validity</li>
                                            <li><i class="bi bi-check-circle-fill"></i>A flexible plan for growing teams.</li>
                                        </ul>
                                    </div>
                                </div>
                            
                                <div class="col-12"><div class="empty-state"><i class="bi bi-box-seam"></i>No packages</div></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> -->