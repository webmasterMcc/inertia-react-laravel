import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import React from 'react'
import Table from "@/Components/Table.jsx";
import {Head} from "@inertiajs/react";

const Users = ({ user , users }) => {
    console.log(user)
    return (
        <>

          <AuthenticatedLayout
             user={user}
             header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">User Management</h2>}
           >
              <Head title="Users" />
            <div className="overflow-x-auto">
            <h2 className='text-2xl font-medium text-center'>User Management</h2>
              <Table users={users} />
            </div>
            </AuthenticatedLayout>
        </>
    )
}

export default Users
