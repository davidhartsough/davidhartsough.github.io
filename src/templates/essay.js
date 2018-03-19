import React from 'react'
import Helmet from 'react-helmet'

export default ({ data }) => {
  const essay = data.markdownRemark
  return (
    <section>
      <Helmet>
        <title>{essay.frontmatter.title} | David Hartsough</title>
        <meta
          name="keywords"
          content={`david,hartsough,davidhartsough,${
            essay.frontmatter.keywords
          }`}
        />
        <meta name="description" content={essay.frontmatter.description} />
        <meta name="twitter:title" content={essay.frontmatter.title} />
        <meta
          name="twitter:description"
          content={essay.frontmatter.description}
        />
        <meta
          property="og:title"
          itemprop="name"
          content={essay.frontmatter.title}
        />
        <meta
          property="og:description"
          itemprop="description"
          content={essay.frontmatter.description}
        />
        <meta
          property="og:url"
          content={`http://blog.davidhartsough.com${essay.fields.slug}`}
        />
        <meta property="og:type" content="article" />
        <meta
          property="og:article:published_time"
          content={essay.frontmatter.date}
        />
        <meta
          property="og:article:modified_time"
          content={essay.frontmatter.date}
        />
        <meta property="og:article:author" content="David Hartsough" />
        <meta
          property="og:article:tag"
          content={`david,hartsough,davidhartsough,${
            essay.frontmatter.keywords
          }`}
        />
      </Helmet>
      <header>
        <h1>{essay.frontmatter.title}</h1>
        <p>{essay.frontmatter.date}</p>
      </header>
      <div dangerouslySetInnerHTML={{ __html: essay.html }} />
    </section>
  )
}

export const query = graphql`
  query EssayBySlug($slug: String!) {
    markdownRemark(fields: { slug: { eq: $slug } }) {
      html
      frontmatter {
        title
        date(formatString: "YYYY-MM-DD")
        keywords
        description
      }
      fields {
        slug
      }
    }
  }
`
