@extends('layouts.admin')

@section('content')
        <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Welcome {{(Auth::user()->name)}} 🎉</h5>
                        <p class="mb-4">
                          Selamat bekerja dengan semangat. Semoga harimu menyenangkan.
                        </p>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img
                          src="../assets/img/illustrations/man-with-laptop-light.png"
                          height="140"
                          alt="View Badge User"
                          data-app-dark-img="illustrations/man-with-laptop-dark.png"
                          data-app-light-img="illustrations/man-with-laptop-light.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/chart-success.png"
                              alt="chart success"
                              class="rounded"
                            />
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt3"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Profit</span>
                        <h3 class="card-title mb-2">$12,628</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img
                              src="../assets/img/icons/unicons/wallet-info.png"
                              alt="Credit Card"
                              class="rounded"
                            />
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt6"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            </div>
                          </div>
                        </div>
                        <span>Sales</span>
                        <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Revenue -->
              <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="row row-bordered g-0">
                      <!-- Hoverable Table rows -->
                      <div class="card">
                          <h5 class="card-header">Hoverable rows</h5>
                          <div class="table-responsive text-nowrap">
                          <table class="table table-hover">
                              <thead>
                              <tr>
                                  <th>Project</th>
                                  <th>Client</th>
                                  <th>Users</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                              <tr>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                  <td>Albert Cook</td>
                                  <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                      >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson"
                                      >
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker"
                                      >
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                  </ul>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                                  <td>Barry Hunter</td>
                                  <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                      >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson"
                                      >
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker"
                                      >
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                  </ul>
                                  </td>
                                  <td><span class="badge bg-label-success me-1">Completed</span></td>
                                  <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                                  <td>Trevor Baker</td>
                                  <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                      >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson"
                                      >
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker"
                                      >
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                  </ul>
                                  </td>
                                  <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                  <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                  <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                  </td>
                                  <td>Jerry Milton</td>
                                  <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                      >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson"
                                      >
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker"
                                      >
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                  </ul>
                                  </td>
                                  <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                  <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                  <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                  </td>
                                  <td>Jerry Milton</td>
                                  <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                      >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson"
                                      >
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker"
                                      >
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                  </ul>
                                  </td>
                                  <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                  <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                  <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                  </td>
                                  <td>Jerry Milton</td>
                                  <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                      >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson"
                                      >
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker"
                                      >
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                  </ul>
                                  </td>
                                  <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                  <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                  <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                  </td>
                                  <td>Jerry Milton</td>
                                  <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                      >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson"
                                      >
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker"
                                      >
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                  </ul>
                                  </td>
                                  <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                  <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                  <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                  </td>
                                  <td>Jerry Milton</td>
                                  <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                      >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson"
                                      >
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker"
                                      >
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                  </ul>
                                  </td>
                                  <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                  <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                  <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                  </td>
                                  <td>Jerry Milton</td>
                                  <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller"
                                      >
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson"
                                      >
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                      <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker"
                                      >
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                      </li>
                                  </ul>
                                  </td>
                                  <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                  <td>
                                  <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                          </div>
                      </div>
                      <!--/ Hoverable Table rows -->
                  </div>
                </div>
              </div>
              <!--/ Total Revenue -->
              <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt4"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            </div>
                          </div>
                        </div>
                        <span class="d-block mb-1">Payments</span>
                        <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                        <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="cardOpt1"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Transactions</span>
                        <h3 class="card-title mb-2">$14,857</h3>
                        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->
  @endsection