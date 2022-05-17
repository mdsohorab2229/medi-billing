<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Template Design</title>

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    
    <div class="wrapper">
        <div class="sidebar">
            <!-- brand-logo -->
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                <h2>PDSCDSL</h2>
            </div>
            <!-- user -->
            <div class="user">
                <div class="user-img">
                    <img src="{{ asset('assets/images/user.png') }}" alt="">
                </div>
                <div class="user-info">
                    <h3>Khusy Kumar Das</h3>
                    <p>Admin</p>
                </div>
            </div>
            <!-- main menus -->
            <div class="navigations">
                <div class="navigation-item has-multimenu">
                    <a href="" class="menu-link">
                        <i class="bx bxs-tachometer text-blue-600" ></i>
                        <span>Dashboard</span>
                    </a>
                    <div class="navigation-content">
                        Some content here
                    </div>
                </div>
                <div class="navigation-item">
                    <a href="">
                        <i class="bx bxs-user-rectangle text-red-600" ></i>
                        <span>Profile</span>
                    </a>
                </div>
                <div class="navigation-item">
                    <a href="">
                        <i class='bx bxs-user-account text-indigo-600' ></i>
                        <span>Members</span>
                    </a>
                </div>
                <div class="navigation-item">
                    <a href="">
                        <i class="bx bxs-user-rectangle text-red-600" ></i>
                        <span>Profile</span>
                    </a>
                </div>
                <div class="navigation-item">
                    <a href="">
                        <i class='bx bxs-user-account text-indigo-600' ></i>
                        <span>Members</span>
                    </a>
                </div>
                <div class="navigation-item">
                    <a href="">
                        <i class='bx bxs-file-doc text-green-600' ></i>
                        <span>Applications</span>
                    </a>
                </div>
                <div class="navigation-item">
                    <a href="">
                        <i class='bx bxs-user-badge' ></i>
                        <span>Admins</span>
                    </a>
                </div>
                <div class="navigation-item has-multimenu">
                    <a href="" class="menu-link">
                        <i class='bx bxs-report' ></i>
                        <span>Reports</span>
                    </a>
                    <div class="navigation-content">
                        <div class="navigation-content-header">
                            <h3>Reports</h3>
                        </div>
                        <div class="navigation-content-body">
                            <h5>Daily Reports</h5>
                            <ul>
                                <li>
                                    <a href="">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Daily Collection Report</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Daily Collection Report</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Daily Collection Report</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Daily Collection Report</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Daily Collection Report</span>
                                    </a>
                                </li>
                            </ul>
                            <h5>Daily Reports</h5>
                            <ul>
                                <li>
                                    <a href="">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Daily Collection Report</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Daily Collection Report</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Daily Collection Report</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation-item">
                    <a href="">
                        <i class='bx bxs-cog' ></i>
                        <span>Settings</span>
                    </a>
                </div>
                <div class="navigation-item">
                    <a href="">
                        <i class='bx bxs-log-out' ></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">

            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                </div>
                                <div class="box-action">
                                    <a href="" class="btn btn-danger">Some Button</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <h3>Some content here</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ducimus harum recusandae perferendis nemo quasi temporibus, aut excepturi illo sint beatae id consequatur placeat ad!</p>
                                <h3>Some content here</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ducimus harum recusandae perferendis nemo quasi temporibus, aut excepturi illo sint beatae id consequatur placeat ad!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque minima odio necessitatibus sapiente quis provident eligendi? Non amet voluptate dicta. Veniam neque facere quaerat atque vitae molestiae facilis natus!</p>
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">
                                    <h4>Form Design</h4>
                                </div>
                                <div class="box-action">
                                    <a href="" class="btn btn-danger">Some Button</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <form action="" class="form">
                                    <div class="form-group mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="" placeholder="Enter your name" class="form-control">
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label for="">Email</label>
                                        <input type="email" name="" placeholder="e.g: jogn@gmail.com" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Gender</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="" class="col-form-label">Something</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" name="" placeholder="Enter Something" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="box">
                    <div class="box-header">
                        <div class="box-title">
                            <h4>Table list</h4>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="filter"></div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Md. Bellal Hossain</td>
                                    <td>Md. Abdul Kader Khan</td>
                                    <td>Mst Bilkis Begum</td>
                                    <td>01798673163</td>
                                    <td>Dhaka Bangladesh</td>
                                    <td>
                                        <div class="action">
                                            <a href="" class="text-blue-400"><i class="bx bx-show"></i></a>
                                            <a href="" class="text-green-400"><i class="bx bx-edit"></i></a>
                                            <a href="" class="text-red-400"><i class="bx bx-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Md. Bellal Hossain</td>
                                    <td>Md. Abdul Kader Khan</td>
                                    <td>Mst Bilkis Begum</td>
                                    <td>01798673163</td>
                                    <td>Dhaka Bangladesh</td>
                                    <td>
                                        <div class="action">
                                            <a href="" class="text-blue-400"><i class="bx bx-show"></i></a>
                                            <a href="" class="text-green-400"><i class="bx bx-edit"></i></a>
                                            <a href="" class="text-red-400"><i class="bx bx-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Md. Bellal Hossain</td>
                                    <td>Md. Abdul Kader Khan</td>
                                    <td>Mst Bilkis Begum</td>
                                    <td>01798673163</td>
                                    <td>Dhaka Bangladesh</td>
                                    <td>
                                        <div class="action">
                                            <a href="" class="text-blue-400"><i class="bx bx-show"></i></a>
                                            <a href="" class="text-green-400"><i class="bx bx-edit"></i></a>
                                            <a href="" class="text-red-400"><i class="bx bx-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>Md. Bellal Hossain</td>
                                    <td>Md. Abdul Kader Khan</td>
                                    <td>Mst Bilkis Begum</td>
                                    <td>01798673163</td>
                                    <td>Dhaka Bangladesh</td>
                                    <td>
                                        <div class="action">
                                            <a href="" class="text-blue-400"><i class="bx bx-show"></i></a>
                                            <a href="" class="text-green-400"><i class="bx bx-edit"></i></a>
                                            <a href="" class="text-red-400"><i class="bx bx-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Md. Bellal Hossain</td>
                                    <td>Md. Abdul Kader Khan</td>
                                    <td>Mst Bilkis Begum</td>
                                    <td>01798673163</td>
                                    <td>Dhaka Bangladesh</td>
                                    <td>
                                        <div class="action">
                                            <a href="" class="text-blue-400"><i class="bx bx-show"></i></a>
                                            <a href="" class="text-green-400"><i class="bx bx-edit"></i></a>
                                            <a href="" class="text-red-400"><i class="bx bx-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer"></div>
                </div>
                
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/boxicons/dist/boxicons.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>