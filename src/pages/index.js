import React from 'react'
import Helmet from 'react-helmet'
import Link from 'gatsby-link'

const HelmetHead = () => (
  <Helmet>
    <title>David Hartsough | Writings</title>
    <meta
      name="keywords"
      content="david,hartsough,davidhartsough,writings,essays,thoughts,notes,documents,blog"
    />
    <meta
      name="description"
      content="David Hartsough is a happy human who loves discussing the philosophy and psychology of flourishing, connectedness, and identity."
    />
    <meta name="twitter:title" content="David Hartsough's Writings" />
    <meta
      name="twitter:description"
      content="David Hartsough is a happy human who loves discussing the philosophy and psychology of flourishing, connectedness, and identity."
    />
    <meta
      property="og:title"
      itemprop="name"
      content="David Hartsough's Writings"
    />
    <meta
      property="og:description"
      itemprop="description"
      content="David Hartsough is a happy human who loves discussing the philosophy and psychology of flourishing, connectedness, and identity."
    />
    <meta property="og:url" content="http://blog.davidhartsough.com/" />
    <meta property="og:type" content="website" />
  </Helmet>
)

const YearEssayList = ({ year }) => {
  return (
    <div>
      <h2>{year.year}</h2>
      <ul>
        {year.essays.map(essay => (
          <li key={essay.id}>
            <Link to={essay.fields.slug}>{essay.frontmatter.title}</Link>
          </li>
        ))}
      </ul>
    </div>
  )
}

export default ({ data }) => {
  const nodes = data.allMarkdownRemark.edges
  const years = Array.from(
    new Set(nodes.map(({ node }) => node.frontmatter.date))
  ).map(year => {
    return {
      year,
      essays: [],
    }
  })
  nodes.forEach(({ node }) => {
    const yearIndex = years.findIndex(
      year => year.year === node.frontmatter.date
    )
    years[yearIndex].essays.push(node)
  })
  return (
    <section>
      <HelmetHead />
      {years.map(year => <YearEssayList year={year} key={year.year} />)}
    </section>
  )
}

export const query = graphql`
  query IndexQuery {
    allMarkdownRemark(sort: { fields: [frontmatter___date], order: DESC }) {
      edges {
        node {
          id
          frontmatter {
            title
            date(formatString: "YYYY")
          }
          fields {
            slug
          }
        }
      }
    }
  }
`
