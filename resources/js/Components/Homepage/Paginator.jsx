import { Link } from "@inertiajs/react";

const Paginator = ({ meta }) => {
    const prev = meta.links[0].url;
    const next = meta.links[meta.links.length - 1].url;
    const current = meta.current_page;

    return (
        <div className="btn-group p-4">
            {prev && <Link href={prev} className="btn btn-outline bg-slate-50 shadow-xl">«</Link>}

            <Link className="btn btn-outline bg-slate-50 shadow-xl">{current}</Link>
            
            {next && <Link href={next} className="btn btn-outline bg-slate-50 shadow-xl">»</Link>}

        </div>
    )
}

export default Paginator