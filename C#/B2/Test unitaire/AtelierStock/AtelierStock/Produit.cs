using System;
using System.Collections.Generic;
using System.Text;

namespace AtelierStock
{
    public class Produit
    {
        private decimal prixAchat, pourcentageMarge;
        private int stocks;
        private string reference, libelle;

        private void VerifierChaine(string chaine, string nomVariable)
        {
            if (chaine == null)
            {
                throw new ArgumentNullException(
                    paramName: nomVariable,
                    message: $"La variable '{nomVariable}' ne peut être nulle"
                );
            }
            if (chaine.Length == 0)
            {
                throw new ArgumentException(
                    paramName: nomVariable,
                    message: $"La variable '{nomVariable}' ne peut être vide"
                );
            }
        }
        private void VerifierDecimalPositif(decimal valeur, string nomVariable, bool zeroOk)
        {
            if (valeur < 0 || !zeroOk && valeur == 0m)
            {
                throw new ArgumentOutOfRangeException(
                    paramName: nomVariable, 
                    message: $"La valeur décimale de '{nomVariable}' doit être positive"
                );
            }
        }

        public Produit(string reference, string libelle, decimal prixAchat, decimal pourcentageMarge)
        {
            VerifierChaine(reference, nameof(reference));
            VerifierChaine(libelle  , nameof(libelle  ));
            VerifierDecimalPositif(prixAchat       , nameof(prixAchat       ), zeroOk: false);
            VerifierDecimalPositif(pourcentageMarge, nameof(pourcentageMarge), zeroOk: true);
            
            this.reference = reference;
            this.libelle = libelle;
            this.prixAchat = prixAchat;
            this.pourcentageMarge = pourcentageMarge;
            stocks = 0;
        }
        #region Accesseurs
        public string Reference => reference;
        public string Libelle => libelle;
        public int Stocks => stocks; // { get { return stocks; } }
        public decimal PrixVente => prixAchat * (1m + pourcentageMarge);
        public decimal PrixAchat => prixAchat;
        #endregion

        #region Stocks

        /// <summary>
        /// Sort la quantité spécifiée des stocks pour le produit concerné. Prend en compte la rupture de stock.
        /// </summary>
        /// <param name="quantite">Quantité à retirer</param>
        /// <returns>Valeur réellement retirée inférieure (rupture) ou égale à la quantité</returns>
        public int Sortir(int quantite)
        {
            var quantiteReelle = Math.Min(quantite, stocks);

            stocks -= quantiteReelle;
            return quantiteReelle;
        }

        public void Rentrer(int quantite)
        {
            stocks += quantite;
        }

        public bool EstEnRupture => stocks == 0;

        #endregion

    }
}
