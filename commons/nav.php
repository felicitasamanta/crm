<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/php/crm/index.php">Customer Relationship Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/php/crm/" role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Companies
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/php/crm/companies/forms/create.php">Add new company</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/php/crm/customers/" role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Customers
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/php/crm/customers">All customers</a></li>
                        <li><a class="dropdown-item" href="/php/crm/customers/forms/create.php">Add new customer</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/php/crm/contracts/" role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Contracts
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/php/crm/contracts/">All contracts</a></li>
                        <li><a class="dropdown-item" href="/php/crm/contracts/forms/create.php">Add new contract</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>