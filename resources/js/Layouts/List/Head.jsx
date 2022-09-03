import React from "react";

const Head = ({ columns }) => {
 
    return (
        <thead className="text-white bg-gray-600">
            <tr className="font-bold text-left">                
                <th className="px-6 pt-5 pb-4">#</th>
                {columns.map((name, key) =>
                    <th key={key} className="px-6 pt-5 pb-4">{name}</th>
                )}                
                <th className="px-6 pt-5 pb-4">Action</th>
            </tr>
        </thead>
    );
};

export default Head;