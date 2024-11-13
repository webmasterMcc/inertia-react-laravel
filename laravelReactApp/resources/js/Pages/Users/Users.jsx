import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import React from 'react'

const Users = ({ user , users }) => {
    console.log(user)
    return (
        <>
     
          <AuthenticatedLayout
             user={users}
             header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">User Management</h2>}
           >
            <div className="overflow-x-auto">
            <h2 className='text-2xl font-medium text-center'>User Management</h2>
                <table
                    className="min-w-full divide-y-2 divide-gray-200 bg-white text-sm dark:divide-gray-700 dark:bg-gray-900"
                >
                    <thead className="ltr:text-left rtl:text-right">
                        <tr>
                            <th className="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">Name</th>
                            <th className="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"> Date of Registration</th>
                            <th className="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"> Email </th>
                            <th className="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white"> last Updates </th>
                            <th className="px-4 py-2"></th>
                        </tr>
                    </thead>

                        {users.map( user => {
                          return (   
                          <tbody className="divide-y divide-gray-200 dark:divide-gray-700" key={user.id}>
                             <tr>
                                 <td className="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                                    {user.name}
                                 </td>
                                 <td className="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">{user.created_at}</td>
                                 <td className="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">{user.email}</td>
                                 <td className="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-200">{user.updated_at}</td>
                                 <td className="whitespace-nowrap px-4 py-2">
                                     <a
                                         href="#"
                                         className="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                                     >
                                         View
                                     </a>
                                 </td>
                             </tr>
                         </tbody>)
                        })}
                </table>
            </div>
            </AuthenticatedLayout> 
        </>
    )
}

export default Users