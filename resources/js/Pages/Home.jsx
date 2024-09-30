import Layout from "../Layout/Layout";

function Home({name, news}) {
  console.log(news)
  return (
    <>
      <h1 className="title">Home</h1>

      <div>
        {news.map(row => (
          <div key={row.id} className="p-3 bg-light rouned">
              <title>{row.title}</title>
              <p>{row.text}</p>
              <a href={row.link} target="_blank">{row.link}</a>
          </div>
        ))}
      </div>
      
    </>
  );
}

Home.layout = page => <Layout children={page} />

export default Home;