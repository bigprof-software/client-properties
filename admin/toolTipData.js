var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// servers table
servers_addTip=["",spacer+"This option allows all members of the group to add records to the 'Servers' table. A member who adds a record to the table becomes the 'owner' of that record."];

servers_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Servers' table."];
servers_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Servers' table."];
servers_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Servers' table."];
servers_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Servers' table."];

servers_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Servers' table."];
servers_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Servers' table."];
servers_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Servers' table."];
servers_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Servers' table, regardless of their owner."];

servers_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Servers' table."];
servers_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Servers' table."];
servers_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Servers' table."];
servers_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Servers' table."];

// operating_systems table
operating_systems_addTip=["",spacer+"This option allows all members of the group to add records to the 'Operating systems' table. A member who adds a record to the table becomes the 'owner' of that record."];

operating_systems_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Operating systems' table."];
operating_systems_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Operating systems' table."];
operating_systems_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Operating systems' table."];
operating_systems_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Operating systems' table."];

operating_systems_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Operating systems' table."];
operating_systems_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Operating systems' table."];
operating_systems_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Operating systems' table."];
operating_systems_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Operating systems' table, regardless of their owner."];

operating_systems_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Operating systems' table."];
operating_systems_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Operating systems' table."];
operating_systems_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Operating systems' table."];
operating_systems_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Operating systems' table."];

// hosting_providers table
hosting_providers_addTip=["",spacer+"This option allows all members of the group to add records to the 'Hosting providers' table. A member who adds a record to the table becomes the 'owner' of that record."];

hosting_providers_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Hosting providers' table."];
hosting_providers_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Hosting providers' table."];
hosting_providers_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Hosting providers' table."];
hosting_providers_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Hosting providers' table."];

hosting_providers_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Hosting providers' table."];
hosting_providers_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Hosting providers' table."];
hosting_providers_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Hosting providers' table."];
hosting_providers_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Hosting providers' table, regardless of their owner."];

hosting_providers_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Hosting providers' table."];
hosting_providers_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Hosting providers' table."];
hosting_providers_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Hosting providers' table."];
hosting_providers_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Hosting providers' table."];

// data_centers table
data_centers_addTip=["",spacer+"This option allows all members of the group to add records to the 'Data centers' table. A member who adds a record to the table becomes the 'owner' of that record."];

data_centers_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Data centers' table."];
data_centers_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Data centers' table."];
data_centers_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Data centers' table."];
data_centers_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Data centers' table."];

data_centers_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Data centers' table."];
data_centers_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Data centers' table."];
data_centers_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Data centers' table."];
data_centers_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Data centers' table, regardless of their owner."];

data_centers_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Data centers' table."];
data_centers_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Data centers' table."];
data_centers_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Data centers' table."];
data_centers_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Data centers' table."];

// domains table
domains_addTip=["",spacer+"This option allows all members of the group to add records to the 'Domains' table. A member who adds a record to the table becomes the 'owner' of that record."];

domains_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Domains' table."];
domains_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Domains' table."];
domains_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Domains' table."];
domains_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Domains' table."];

domains_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Domains' table."];
domains_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Domains' table."];
domains_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Domains' table."];
domains_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Domains' table, regardless of their owner."];

domains_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Domains' table."];
domains_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Domains' table."];
domains_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Domains' table."];
domains_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Domains' table."];

// subdomains table
subdomains_addTip=["",spacer+"This option allows all members of the group to add records to the 'Subdomains' table. A member who adds a record to the table becomes the 'owner' of that record."];

subdomains_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Subdomains' table."];
subdomains_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Subdomains' table."];
subdomains_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Subdomains' table."];
subdomains_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Subdomains' table."];

subdomains_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Subdomains' table."];
subdomains_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Subdomains' table."];
subdomains_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Subdomains' table."];
subdomains_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Subdomains' table, regardless of their owner."];

subdomains_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Subdomains' table."];
subdomains_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Subdomains' table."];
subdomains_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Subdomains' table."];
subdomains_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Subdomains' table."];

// registrars table
registrars_addTip=["",spacer+"This option allows all members of the group to add records to the 'Registrars' table. A member who adds a record to the table becomes the 'owner' of that record."];

registrars_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Registrars' table."];
registrars_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Registrars' table."];
registrars_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Registrars' table."];
registrars_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Registrars' table."];

registrars_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Registrars' table."];
registrars_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Registrars' table."];
registrars_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Registrars' table."];
registrars_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Registrars' table, regardless of their owner."];

registrars_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Registrars' table."];
registrars_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Registrars' table."];
registrars_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Registrars' table."];
registrars_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Registrars' table."];

// dns_managers table
dns_managers_addTip=["",spacer+"This option allows all members of the group to add records to the 'DNS managers' table. A member who adds a record to the table becomes the 'owner' of that record."];

dns_managers_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'DNS managers' table."];
dns_managers_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'DNS managers' table."];
dns_managers_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'DNS managers' table."];
dns_managers_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'DNS managers' table."];

dns_managers_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'DNS managers' table."];
dns_managers_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'DNS managers' table."];
dns_managers_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'DNS managers' table."];
dns_managers_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'DNS managers' table, regardless of their owner."];

dns_managers_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'DNS managers' table."];
dns_managers_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'DNS managers' table."];
dns_managers_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'DNS managers' table."];
dns_managers_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'DNS managers' table."];

// mail_providers table
mail_providers_addTip=["",spacer+"This option allows all members of the group to add records to the 'Mail providers' table. A member who adds a record to the table becomes the 'owner' of that record."];

mail_providers_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Mail providers' table."];
mail_providers_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Mail providers' table."];
mail_providers_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Mail providers' table."];
mail_providers_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Mail providers' table."];

mail_providers_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Mail providers' table."];
mail_providers_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Mail providers' table."];
mail_providers_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Mail providers' table."];
mail_providers_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Mail providers' table, regardless of their owner."];

mail_providers_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Mail providers' table."];
mail_providers_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Mail providers' table."];
mail_providers_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Mail providers' table."];
mail_providers_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Mail providers' table."];

// clients table
clients_addTip=["",spacer+"This option allows all members of the group to add records to the 'Clients' table. A member who adds a record to the table becomes the 'owner' of that record."];

clients_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Clients' table."];
clients_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Clients' table."];
clients_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Clients' table."];
clients_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Clients' table."];

clients_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Clients' table."];
clients_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Clients' table."];
clients_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Clients' table."];
clients_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Clients' table, regardless of their owner."];

clients_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Clients' table."];
clients_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Clients' table."];
clients_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Clients' table."];
clients_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Clients' table."];

// client_contacts table
client_contacts_addTip=["",spacer+"This option allows all members of the group to add records to the 'Client contacts' table. A member who adds a record to the table becomes the 'owner' of that record."];

client_contacts_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Client contacts' table."];
client_contacts_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Client contacts' table."];
client_contacts_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Client contacts' table."];
client_contacts_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Client contacts' table."];

client_contacts_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Client contacts' table."];
client_contacts_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Client contacts' table."];
client_contacts_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Client contacts' table."];
client_contacts_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Client contacts' table, regardless of their owner."];

client_contacts_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Client contacts' table."];
client_contacts_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Client contacts' table."];
client_contacts_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Client contacts' table."];
client_contacts_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Client contacts' table."];

// server_events table
server_events_addTip=["",spacer+"This option allows all members of the group to add records to the 'Server events' table. A member who adds a record to the table becomes the 'owner' of that record."];

server_events_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Server events' table."];
server_events_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Server events' table."];
server_events_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Server events' table."];
server_events_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Server events' table."];

server_events_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Server events' table."];
server_events_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Server events' table."];
server_events_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Server events' table."];
server_events_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Server events' table, regardless of their owner."];

server_events_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Server events' table."];
server_events_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Server events' table."];
server_events_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Server events' table."];
server_events_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Server events' table."];

// domain_events table
domain_events_addTip=["",spacer+"This option allows all members of the group to add records to the 'Domain events' table. A member who adds a record to the table becomes the 'owner' of that record."];

domain_events_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Domain events' table."];
domain_events_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Domain events' table."];
domain_events_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Domain events' table."];
domain_events_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Domain events' table."];

domain_events_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Domain events' table."];
domain_events_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Domain events' table."];
domain_events_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Domain events' table."];
domain_events_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Domain events' table, regardless of their owner."];

domain_events_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Domain events' table."];
domain_events_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Domain events' table."];
domain_events_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Domain events' table."];
domain_events_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Domain events' table."];

// subdomain_events table
subdomain_events_addTip=["",spacer+"This option allows all members of the group to add records to the 'Subdomain events' table. A member who adds a record to the table becomes the 'owner' of that record."];

subdomain_events_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Subdomain events' table."];
subdomain_events_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Subdomain events' table."];
subdomain_events_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Subdomain events' table."];
subdomain_events_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Subdomain events' table."];

subdomain_events_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Subdomain events' table."];
subdomain_events_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Subdomain events' table."];
subdomain_events_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Subdomain events' table."];
subdomain_events_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Subdomain events' table, regardless of their owner."];

subdomain_events_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Subdomain events' table."];
subdomain_events_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Subdomain events' table."];
subdomain_events_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Subdomain events' table."];
subdomain_events_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Subdomain events' table."];

// client_events table
client_events_addTip=["",spacer+"This option allows all members of the group to add records to the 'Client events' table. A member who adds a record to the table becomes the 'owner' of that record."];

client_events_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Client events' table."];
client_events_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Client events' table."];
client_events_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Client events' table."];
client_events_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Client events' table."];

client_events_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Client events' table."];
client_events_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Client events' table."];
client_events_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Client events' table."];
client_events_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Client events' table, regardless of their owner."];

client_events_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Client events' table."];
client_events_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Client events' table."];
client_events_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Client events' table."];
client_events_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Client events' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
