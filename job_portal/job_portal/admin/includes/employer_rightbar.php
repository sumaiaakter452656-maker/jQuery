        <!-- Analytics -->
        <!-- <div class="row g-3 g-xl-4 mb-4" id="analytics">
            <div class="col-xl-5 reveal">
                <div class="card-x">
                    <div class="card-x-head">
                        <div><h5>Applications Received</h5><p>Last 6 months</p></div>
                        <div class="chart-legend"><span><i style="background:#10b981"></i>Applications</span></div>
                    </div>
                    <div class="card-x-body">
                        <div class="bar-chart" data-labels='["Jun","Jul","Aug","Sep","Oct","Nov"]' data-series='[{"name":"Applications","color":"#6366f1","values":[12,18,15,25,22,31]},{"name":"New Registrations","color":"#22d3ee","values":[6,9,8,13,11,17]}]'></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 reveal">
                <div class="card-x">
                    <div class="card-x-head"><div><h5>Hiring Funnel</h5><p>Applicant status</p></div></div>
                    <div class="card-x-body">
                        <div class="donut-wrap">
                            <div class="donut" style="width:160px;height:160px" data-segments='[{"label":"Applied","value":38,"color":"#f59e0b"},{"label":"Viewed","value":20,"color":"#06b6d4"},{"label":"Shortlisted","value":15,"color":"#3b82f6"},{"label":"Interview","value":10,"color":"#8b5cf6"},{"label":"Hired","value":7,"color":"#10b981"},{"label":"Rejected","value":10,"color":"#ef4444"}]' data-legend="#empLegend">
                                <div class="donut-center"><div><strong>3580</strong><small>Applicants</small></div></div>
                            </div>
                            <div class="donut-legend" id="empLegend"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 reveal" id="subscription">
                <div class="sub-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <div class="muted">Current Plan</div>
                            <h4 class="fw-bold mb-0 text-white">Premium</h4>
                        </div>
                        <span class="badge-soft Demo">Demo</span>
                    </div>
                    
                        <div class="d-flex justify-content-between small mb-2">
                            <span class="muted">Job posts used</span><strong>3 / 5</strong>
                        </div>
                        <div class="progress mb-3"><div class="progress-bar" data-width="45"></div></div>
                        <div class="row g-2 text-center mb-3">
                            <div class="col-4"><div class="fw-bold fs-5">7</div><div class="muted">Posts left</div></div>
                            <div class="col-4"><div class="fw-bold fs-5">24</div><div class="muted">Days left</div></div>
                            <div class="col-4"><div class="fw-bold fs-5">৳2,500</div><div class="muted">Price</div></div>
                        </div>
                        <div class="muted mb-3"><i class="bi bi-calendar-event"></i> 20 Nov 2026 – 20 Nov 2026</div>
                    
                        <p class="muted mb-3">Subscribe to a package to start posting jobs and reach thousands of job seekers.</p>
                    
                    <div class="d-flex flex-wrap gap-2">
                        
                            <span class="tag" style="background:rgba(255,255,255,.08);border-color:rgba(255,255,255,.12);color:#e2e8f0">
                                Sample User · ৳2,500
                            </span>
                        
                    </div>
                    <a href="#" class="btn btn-accent w-100 mt-3"><i class="bi bi-gem me-1"></i> Demo</a>
                </div>
            </div>
        </div> -->

        <!-- My jobs -->
        <!-- <div class="card-x mb-4 reveal" id="my-jobs" style="height:auto">
            <div class="card-x-head">
                <div><h5>My Job Posts</h5><p>Manage your listings and see how they perform</p></div>
                <div class="table-tools">
                    <select class="form-select form-select-sm" style="width:auto" data-status-filter="#myJobsTable">
                        <option value="">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                        <option value="closed">Closed</option>
                    </select>
                    <div class="table-search d-none d-sm-block"><i class="bi bi-search"></i><input type="search" placeholder="Search jobs…" data-table-filter="#myJobsTable"></div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-modern" id="myJobsTable">
                    <thead><tr><th>Job Title</th><th>Type</th><th>Salary</th><th>Applicants</th><th>Deadline</th><th>Status</th><th class="text-end">Actions</th></tr></thead>
                    <tbody>
                    
                        <tr data-status="approved">
                            <td>
                                <div class="t fw-bold">Frontend Developer
                                    <span class="tag tag-featured ms-1"><i class="bi bi-star-fill"></i> Featured</span>
                                </div>
                                <small class="text-muted">Technology · <i class="bi bi-geo-alt"></i> Dhaka</small>
                            </td>
                            <td><span class="tag tag-accent">Full Time</span></td>
                            <td class="text-nowrap small fw-semibold">৳30,000 – ৳50,000</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <strong>24</strong>
                                    <small class="text-muted text-nowrap">(Demo shortlisted)</small>
                                </div>
                            </td>
                            <td class="text-nowrap">
                                20 Nov 2026
                                <br><small class="text-danger">Expired</small>
                            </td>
                            <td><span class="tag tag-success">Approved</span></td>
                            <td class="text-end text-nowrap">
                                <a href="#" class="action-btn" data-bs-toggle="tooltip" title="View applicants"><i class="bi bi-people"></i></a>
                                <a href="#" class="action-btn" data-bs-toggle="tooltip" title="Edit"><i class="bi bi-pencil"></i></a>
                            </td>
                        </tr>
                    
                        <tr class="no-filter"><td colspan="7"><div class="empty-state"><i class="bi bi-briefcase"></i>You haven't posted any job yet.<br><a href="#post-job" class="fw-semibold">Post your first job</a></div></td></tr>
                    
                    </tbody>
                </table>
            </div>
            <div class="card-x-foot"><a href="#">Manage all jobs <i class="bi bi-arrow-right"></i></a></div>
        </div> -->

        <!-- Applicants + payments -->
        <!-- <div class="row g-3 g-xl-4 mb-4">
            <div class="col-xl-7 reveal" id="applicants">
                <div class="card-x">
                    <div class="card-x-head">
                        <div><h5>Recent Applicants</h5><p>Candidates who applied to your jobs</p></div>
                        <div class="table-search"><i class="bi bi-search"></i><input type="search" placeholder="Search candidate…" data-table-filter="#applicantsTable"></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-modern" id="applicantsTable">
                            <thead><tr><th>Candidate</th><th>Applied For</th><th>Status</th><th class="text-end">CV</th></tr></thead>
                            <tbody>
                            
                                <tr>
                                    <td>
                                        <div class="cell-main">
                                            <span class="avatar round avatar-blue">AD</span>
                                            <div>
                                                <div class="t">Mahmudul Alam</div>
                                                <div class="s">Web Developer · 3 yrsDemo</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><div class="fw-semibold small">Frontend Developer</div><small class="text-muted">2 hours ago</small></td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td class="text-end text-nowrap">
                                        <a href="#" target="_blank" class="action-btn" data-bs-toggle="tooltip" title="Download CV"><i class="bi bi-file-earmark-arrow-down"></i></a>
                                        <a href="mailto:candidate@example.com" class="action-btn" data-bs-toggle="tooltip" title="Email"><i class="bi bi-envelope"></i></a>
                                    </td>
                                </tr>
                            
                                <tr class="no-filter"><td colspan="4"><div class="empty-state"><i class="bi bi-people"></i>No applicants yet</div></td></tr>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="card-x-foot"><a href="#">View all applicants <i class="bi bi-arrow-right"></i></a></div>
                </div>
            </div>

            <div class="col-xl-5 reveal" id="payments">
                <div class="card-x">
                    <div class="card-x-head"><div><h5>Payment History</h5><p>Your package purchases</p></div><span class="tag tag-accent">Spent ৳2,500</span></div>
                    <ul class="list-x">
                        
                            <li>
                                <span class="avatar sm avatar-accent"><i class="bi bi-receipt"></i></span>
                                <div class="info">
                                    <div class="t">#INV-1024 · Premium</div>
                                    <div class="s">bKashDemo</div>
                                </div>
                                <div class="text-end">
                                    <div class="fw-bold small">৳2,500</div>
                                    <span class="tag tag-success">Approved</span>
                                </div>
                            </li>
                        
                            <li class="d-block"><div class="empty-state"><i class="bi bi-receipt"></i>No payments yet</div></li>
                        
                    </ul>
                    <div class="card-x-foot"><a href="#">Full payment history <i class="bi bi-arrow-right"></i></a></div>
                </div>
            </div>
        </div> -->

        <!-- Post a job (design only) -->
        <!-- <div class="card-x mb-2 reveal" id="post-job" style="height:auto">
            <div class="card-x-head">
                <div><h5>Post a New Job</h5><p>7</p></div>
                <span class="tag tag-accent"><i class="bi bi-info-circle"></i> Jobs are reviewed by admin before going live</span>
            </div>
            <div class="card-x-body">
                <form data-demo="Job post form ready (design preview)" novalidate>
                    <div class="row g-3">
                        <div class="col-lg-8">
                            <label class="form-label">Job Title <span class="text-danger">*</span></label>
                            <div class="input-icon"><i class="bi bi-briefcase"></i><input type="text" class="form-control" placeholder="e.g. Senior Laravel Developer" required></div>
                            <div class="invalid-feedback">Job title is required.</div>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Job Type <span class="text-danger">*</span></label>
                            <div class="input-icon"><i class="bi bi-clock"></i>
                                <select class="form-select" required>
                                    <option value="Demo">Full Time</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <label class="form-label">Category</label>
                            <div class="input-icon"><i class="bi bi-tag"></i>
                                <select class="form-select" required>
                                    <option value="">Select</option>
                                    <option value="Demo">Sample User</option>
                                </select>
                            </div>
                            <div class="invalid-feedback">Choose a category.</div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <label class="form-label">City</label>
                            <div class="input-icon"><i class="bi bi-geo-alt"></i>
                                <select class="form-select" required>
                                    <option value="">Select</option>
                                    <option value="Demo">Sample User</option>
                                </select>
                            </div>
                            <div class="invalid-feedback">Choose a city.</div>
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <label class="form-label">Min Salary (৳)</label>
                            <input type="number" min="0" class="form-control" placeholder="30000">
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <label class="form-label">Max Salary (৳)</label>
                            <input type="number" min="0" class="form-control" placeholder="50000">
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <label class="form-label">Deadline <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" min="Demo" required>
                            <div class="invalid-feedback">Set a deadline.</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Job Description</label>
                            <textarea class="form-control" rows="4" placeholder="Responsibilities, requirements, benefits…"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Required Skills</label>
                            <div class="d-flex flex-wrap gap-2">
                                
                                    <input type="checkbox" class="btn-check" id="skDemo" autocomplete="off">
                                    <label class="btn btn-white btn-sm" for="skDemo">Sample User</label>
                                
                                <span class="text-muted small">No skills found</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex flex-wrap justify-content-between align-items-center gap-3 pt-2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="featuredSwitch" Premium>
                                <label class="form-check-label small" for="featuredSwitch">Mark as <strong>Featured</strong> <span class="text-muted">(Premium plan)</span></label>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="reset" class="btn btn-white">Clear</button>
                                <button type="submit" class="btn btn-accent"><i class="bi bi-send me-1"></i> Submit for Review</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->